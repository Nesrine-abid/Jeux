<?php
require('header.php');
?>
<div class="container" style="margin-top:4em; margin-left:10em">
        <h5>COMMENTAIRES</h5>
        <p>- le commentaire qui laisse le moins indifférent.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id evaluation</th>
                    <th scope="col">id joueur</th>
                    <th scope="col">id jeu</th>
                    <th scope="col">note</th>
                    <th scope="col">commentaire</th>
                    <th scope="col">nombre de joueurs</th>
                    <th scope="col">date d'evaluation</th>
                    <th scope="col">nombre de jugements</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['evaluations'] as $evaluation) { ?>
                    <tr>
                        <td><?php echo $evaluation->id_evaluation;?></td>
                        <td><?php echo $evaluation->id_joueur;?></td>
                        <td><?php echo $evaluation->id_jeu;?></td>
                        <td><?php echo $evaluation->note;?></td>
                        <td><?php echo $evaluation->commentaire;?></td>
                        <td><?php echo $evaluation->nbr_joueurs;?></td>
                        <td><?php echo $evaluation->date_evaluation;?></td>
                        <td><?php echo $evaluation->nbr_jugements;?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>