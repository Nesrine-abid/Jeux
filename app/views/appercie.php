<?php
require('header.php');
?>
<section id="joueur">
    <div class="container" style="margin-top:2em">
        <h3>Qui appercie ce commentaire ?</h3>
        <table class="table table-bordered" style="margin-top:2em">
            <thead>
                <tr>
                    <th scope="col">id_joueur</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">pseudo</th>
                    <th scope="col">adresse_mail</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data['joueurs'] as $joueur) { ?>
                <tr>
                    <td><?php echo $joueur->id_joueur;?></td>
                    <td><?php echo $joueur->nom_joueur;?></td>
                    <td><?php echo $joueur->prenom_joueur;?></td>
                    <td><?php echo $joueur->pseudo;?></td>
                    <td><?php echo $joueur->adresse_mail;?></td>
                </tr>
                <?php } ?>                 
          </table>
    </div>
</section>