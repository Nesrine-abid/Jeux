-- Database: JEUX
CREATE DATABASE "JEUX"
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;
		
-- ============================================================
--   Table : JOUEURS                                            
-- ============================================================	
	create table JOUEURS
(
    ID_JOUEUR          SERIAL         PRIMARY key,
    NOM_JOUEUR         VARCHAR(20),
    PRENOM_JOUEUR      VARCHAR(20),
    PSEUDO             VARCHAR(20),
    ADRESSE_MAIL       VARCHAR(100)
);
select * from JOUEURS;
-- ============================================================
--   Table : MECANIQUES                    
-- ============================================================
create table MECANIQUES
(
    ID_MECANIQUE        SERIAL         PRIMARY key,
    NOM_MECANIQUE       VARCHAR(20)
);

-- ============================================================
--   Table : THEMES                    
-- ============================================================
create table THEMES
(
    ID_THEME           SERIAL         PRIMARY key,
    NOM_THEME          VARCHAR(20)
);

-- ============================================================
--   Table : ARTISTES                                            
-- ============================================================
create table ARTISTES
(
    ID_ARTISTE        SERIAL         PRIMARY key,
    NOM_ARTISTE       VARCHAR(20),
    PRENOM_ARTISTE    VARCHAR(20)
);

-- ============================================================
--   Table : JEUX                                           
-- ============================================================
create table JEUX
(
    ID_JEU            SERIAL         PRIMARY key,
    EDITEUR           VARCHAR(20),
    DATE_PARUTION     DATE,
    TYPE              VARCHAR(20),
    DUREE             SMALLINT,
    NBR_JOUEURS_MIN   SMALLINT,
    NBR_JOUEURS_MAX   SMALLINT                        
);

-- ============================================================
--   Table : EVALUATIONS     ajouter contrainte : la paire (ID_JOUEUR,ID_JEU) est unique                                        
-- ============================================================
create table EVALUATIONS
(
	ID_EVALUATION     SERIAL      PRIMARY key,
    ID_JOUEUR         smallint REFERENCES JOUEURS (ID_JOUEUR),
    ID_JEU            smallint REFERENCES JEUX (ID_JEU),
    NOTE              real,
    COMMENTAIRE       varchar(255),
    NBR_JOUEURS       SMALLINT,
    DATE_EVALUATION   DATE
);
select * from evaluations;

-- ============================================================
--   Table : JOUEUR_MECANIQUE                                              
-- ============================================================
create table JOUEUR_MECANIQUE
(
    ID_JOUEUR          smallint REFERENCES JOUEURS (ID_JOUEUR),
    ID_MECANIQUE       smallint REFERENCES MECANIQUES (ID_MECANIQUE),
	primary KEY (ID_JOUEUR,ID_MECANIQUE)
);
SELECT * FROM JOUEUR_MECANIQUE

-- ============================================================
--   Table : JOUEUR_THEME                                              
-- ============================================================
create table JOUEUR_THEME
(
    ID_JOUEUR          smallint REFERENCES JOUEURS (ID_JOUEUR),
    ID_THEME           smallint REFERENCES THEMES (ID_THEME),
    primary KEY (ID_JOUEUR,ID_THEME)

);

-- ============================================================
--   Table : JEU_MECANIQUE                                              
-- ============================================================
create table JEU_MECANIQUE
(
    ID_JEU             smallint REFERENCES JEUX (ID_JEU),
    ID_MECANIQUE       smallint REFERENCES MECANIQUES (ID_MECANIQUE),
	primary KEY (ID_JEU,ID_MECANIQUE)
);

-- ============================================================
--   Table : JEU_THEME                                              
-- ============================================================
create table JEU_THEME
(
    ID_JEU             smallint REFERENCES JEUX (ID_JEU),
    ID_THEME           smallint REFERENCES THEMES (ID_THEME),
    primary KEY (ID_JEU,ID_THEME)
);

-- ============================================================
--   Table : JEU_ARTISTE                                              
-- ============================================================
create table JEU_ARTISTE
(
    ID_JEU             smallint REFERENCES JEUX (ID_JEU),
    ID_ARTISTE         smallint REFERENCES ARTISTES (ID_ARTISTE),
	EST_ILLUSTRATEUR   BOOLEAN  NOT NULL,
    primary KEY (ID_JEU,ID_ARTISTE)
);
-- ============================================================
--   Table : EXTENSIONS                                              
-- ============================================================
create table EXTENSIONS
(
    ID_BASE            smallint REFERENCES JEUX (ID_JEU),
    ID_EXTENSION       smallint REFERENCES JEUX (ID_JEU),
	primary KEY (ID_BASE,ID_EXTENSION)
);

-- ============================================================
--   Table : JUGEMENTS                                             
-- ============================================================
create table JUGEMENTS
(
	ID_EVALUATION     smallint  REFERENCES EVALUATIONS (ID_EVALUATION),
	ID_JUGE           smallint REFERENCES JOUEURS (ID_JOUEUR),
	primary KEY (ID_EVALUATION, ID_JUGE),
    PERTINANCE        BOOLEAN  not null 
);  


-- ============================================================
--   Table : EXTENSIONS_EVALUATION        verifier si (ID_EXTENSION, ID_JEU) existe dans EXTENSIONS                                    
-- ============================================================
create table EXTENSIONS_EVALUATION
(
	ID_EVALUATION     smallint  REFERENCES EVALUATIONS (ID_EVALUATION),
    ID_EXTENSION      smallint  REFERENCES JEUX (ID_JEU),
	primary KEY (ID_EVALUATION, ID_EXTENSION)
);  
