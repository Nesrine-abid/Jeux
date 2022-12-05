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
                <label for="editeur">Editeur:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Date de parution:</label>
                <input type="date" class="form-control" id="date_parution" placeholder="jj/mm/aaaa">
            </div>

            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" id="type" placeholder="type">
            </div>

            <div class="form-group">
                <label for="">Durée:</label>
                <input type="number" class="form-control" id="duree">     
            </div>

            <div class="form-group">
                <label for="">Nombre minimum de joueurs:</label>
                <input type="number" class="form-control" id="Nombre minimum de joueurs">     
            </div>

            <div class="form-group">
                <label for="">Nombre maximum de joueurs:</label>
                <input type="number" class="form-control" id="duree">     
            </div>

            <div class="form-group">
                <label for="">Thèmes utilisés:</label>
                <?php foreach ($data['themes'] as $theme) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="defaultCheck1"><?php echo $theme->nom_theme;?></label>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="extensions">Si le jeu est une extension d'un ou de plusieurs autre(s) jeu(x), desquels s'agit-il ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="defaultCheck1">1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="defaultCheck2">2</label>
                </div>     
            </div>

            <div class="form-group">
                <label for="extensions2">Si le jeu possède des extensions, lesquelles sont-elles ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="defaultCheck1">1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="defaultCheck2">2</label>
                </div>       
            </div>

            <div class="form-group">
                <label for="createur">Créteur du jeu</label>
                <?php foreach ($data['artistes'] as $artiste) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="defaultCheck1"><?php echo $artiste->nom_artiste;?>  <?php echo $artiste->prenom_artiste;?></label>
                    </div>    
                <?php } ?>  
            </div>

            <div class="form-group">
                <label for="illustrateurs">Illustrateurs</label>
                <div class="form-check">
                <?php foreach ($data['artistes'] as $artiste) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="defaultCheck1"><?php echo $artiste->nom_artiste;?>  <?php echo $artiste->prenom_artiste;?></label>
                    </div>    
                <?php } ?>  
            </div>

        <input type='hidden' name='action' value='FormProcess'>
        <button type="submit" class="btn btn-primary" style="margin-top:2em">Enregistrer</button>
        </form>
    </div>
    </div>
</div>