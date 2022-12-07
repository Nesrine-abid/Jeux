<?php
require('header.php');
?>
<div class="container">
    <div class="card" style="margin:2em">
    <div class="card-header bg-dark text-white" style="margin:2px">
        Ajout Jeux
    </div>
    <div class="card-body">
        <form action="index.php" method=GET>

            <div class="form-group">
                <label for="editeur">NOM_JOUEUR:</label>
                <input type="text" class="form-control" name="nom_joueur">
            </div>

            <div class="form-group">
                <label for="editeur">PRENOM_JOUEUR:</label>
                <input type="text" class="form-control" name="prenom_joueur">
            </div>

            <div class="form-group">
                <label for="type">PSEUDO:</label>
                <input type="text" class="form-control" id="type" placeholder="type" name="pseudo">
            </div>

            <div class="form-group">
                <label for="">ADRESSE_MAIL:</label>
                <input type="text" class="form-control" id="type" placeholder="type" name="adresse_mail">
            </div>

            <div class="form-group">
                <label for="">Thème(s) préféré(s):</label>
                <div class="form-check">
                <?php foreach ($data['themes'] as $theme) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="defaultCheck1"><?php echo $theme->nom_theme;?></label>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="">Mécanique(s) préférée(s):</label>
                <div class="form-check">
                <?php foreach ($data['themes'] as $theme) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="defaultCheck1"><?php echo $theme->nom_theme;?></label>
                    </div>
                <?php } ?>
            </div>

        <input type='hidden' name='action' value='AddJoueur'>
        <button type="submit" class="btn btn-primary" style="margin-top:2em">Enregistrer</button>
        </form>
    </div>
    </div>
</div>