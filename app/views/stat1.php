<?php
require('header.php');
?>
<div class="container" style="margin-top:4em; margin-left:10em">
        <h5>JOUEURS</h5>
        <p>- les joueurs, classés selon le nombre de jeux qu’ils ont notés .</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id joueur</th>
                    <th scope="col">nom joueur</th>
                    <th scope="col">nombre de commentaires</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['joueurs'] as $joueur) { ?>
                    <tr>
                        <td><?php echo $joueur->id_joueur;?></td>
                        <td><?php echo $joueur->nom_joueur;?></td>
                        <td><?php echo $joueur->nbr_commentaires;?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>