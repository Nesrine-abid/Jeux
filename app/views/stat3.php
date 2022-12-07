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
                    <th scope="col">id juge</th>
                    <th scope="col">est pertinent</th>
                    <th scope="col">nombre de jugements</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['evaluations'] as $evaluation) { ?>
                    <tr>
                        <td><?php echo $evaluation->id_evaluation;?></td>
                        <td><?php echo $evaluation->id_juge;?></td>
                        <td><?php echo $evaluation->est_pertinent;?></td>
                        <td><?php echo $evaluation->nbr_jugements;?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>