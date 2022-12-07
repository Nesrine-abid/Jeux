<?php
require('header.php');
?>
<section id="jeu">
  <div class="container" style="margin: 1em;">
    <div class="row">
      <div class="col-10"></div>

      <div class="col-sm-2">
			  <button type="submit" class="btn btn-success" style="margin:2em">Ajouter Evaluation</button>
      </div>
    </div>

        <table class="table table-bordered" style="margin-left:8em">
            <thead>
                <tr>
                    <th scope="col">id evaluation</th>
                    <th scope="col">id joueur</th>
                    <th scope="col">id jeu</th>
                    <th scope="col">note</th>
                    <th scope="col">commentaire</th>
                    <th scope="col">nombre de joueurs</th>
                    <th scope="col">date d'évaluation</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Qui appercie ce commentaire?</th>
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
                    <td><button type="button" class="btn btn-primary">Modifier</button></td>
                    <td>
                        <form action='index.php' method='GET'>
						              <input type="hidden" name="id_joueur" value="<?= $evaluation->id_evaluation; ?>" />
							            <input type="hidden" name="action" value="Delete" />
					                <button type="submit" class="btn btn-danger">Supprimer</button>
					              </form>                    
                    </td>
                    <td>
                        <form action='index.php' method='GET'>
						              <input type="hidden" name="id_evaluation" value="<?= $evaluation->id_evaluation;?>"/>
							            <input type="hidden" name="action" value="JoueursQuiAppercie" />
					                <button type="submit" class="btn btn-info">liste Joueurs</button>
					              </form>                    
                    </td>
                </tr>
                <?php } ?>                 
          </table>
  </div>
</section>