
-- Consultation

---ensemble des jeux critiques disponibles 
---          dans un theme donne (X), 
---          classes par mecaniques

--forme proposee : onglet deroulant avec les themes par noms

select JEUX.ID_JEU, EDITEUR, DATE_PARUTION, DUREE, NBR_JOUEURS_MIN, NBR_JOUEURS_MIN, ID_MECANIQUE
    from JEUX
    inner join EVALUATIONS on (JEUX.ID_JEU = EVALUATIONS.ID_JEU)
    inner join JEU_THEME on (JEUX.ID_JEU = JEU_THEME.ID_JEU)
    inner join THEMES on (JEU_THEME.ID_THEME = THEMES.ID_THEME)
    inner join JEU_MECANIQUE on (JEU_MECANIQUE.ID_JEU = JEUX.ID_JEU)
    inner join MECANIQUES on (JEU_MECANIQUE.ID_MECANIQUE = MECANIQUES.ID_MECANIQUE)
where THEME.NOM_THEME=X
order by MECANIQUES.ID_MECANIQUE;



---pour un joueur donne (peusdo : X), 
---la liste des commentaires se referant a un jeu 
---dans une de ses categories preferees

--- entrer le pseudo

select EVALUATIONS.*
    from JOUEURS
    inner join JOUEUR_MECANIQUE on (JOUEUR_MECANIQUE.ID_JOUEUR = JOUEURS.ID_JOUEUR)
    inner join JEU_MECANIQUE on (JOUEUR_MECANIQUE.ID_MECANIQUE = JEU_MECANIQUE.ID_MECANIQUE)
    inner join EVALUATIONS on (JEU_MECANIQUE.ID_JEU = EVALUATIONS.ID_JEU)
where JOUEURS.PSEUDO = X ;


--- pour un commentaire (id_evaluation = X), la liste des joueurs qui l'ont apprecie.

select JOUEURS.* 
    from JUGEMENTS
    inner join JOUEURS on (JUGEMENTS.ID_JUGE=JOUEURS.ID_JOUEUR)
where JUGEMENTS.ID_JEU = X
    and JUGEMENTS.PERTINANCE -- =true
;



-- Statistiques

--- les joueurs, classes selon le nombre de jeux qu'ils ont notes

select ID_JOUEUR, count(ID_EVALUATION) as nbr_commentaires
    from JOUEURS
    outer join left EVALUATIONS on (JOUEURS.ID_JOUEUR = EVALUATIONS.ID_JOUEUR)
group by ID_JOUEUR
order by nbr_commentaires desc;

--- la liste des n commentaires les plus recents 

select * from EVALUATIONS
order by DATE_EVALUATION  desc
limit n;

--- le commentaire qui laisse le moins indifferent (celui qui a recu le plus de jugements) 

select JUGEMENTS.* , count(ID_JUGE) as nbr_jugements
    from EVALUATIONS
    outer join left JUGEMENTS on (EVALUATIONS.ID_EVALUATION = JUGEMENTS.ID_EVALUATION)
group by JUGEMENTS.*
order by nbr_jugements  desc
limit 1;

--- pour chaque commentaire a un indice de confiance

select EVALUATIONS.*, (1+C)/(1+D) as indice_de_confiance
from EVALUATIONS,
    (select ID_EVALUATION as A, count(*) as C
    from JUGEMENTS
    group by ID_EVALUATION
    where PERTINANCE), -- =true

    (select ID_EVALUATION as B, count(*) as D
    from JUGEMENTS
    group by ID_EVALUATION
    where not PERTINANCE)-- pertinance = false
where ID_EVALUATION = A 
    and ID_EVALUATION = B 
    and A = B
order by indice_de_confiance; 


-- Mise a jour