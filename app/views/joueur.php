<?php
require('header.php');
?>
<section id="joueur">
    <div class="container">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-2">
                <form action='index.php' method='GET'>
                    <input type="hidden" name="action" value="FormAddJoueur" />
                    <button type="submit" class="btn btn-success" style="margin:2em">Ajouter Joueur</button>
                </form>        
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-bordered" style="margin-top:2em">
            <thead>
                <tr>
                    <th scope="col">id_joueur</th>
                    <th scope="col">pseudo</th>
                    <th scope="col">prenom</th>
                    <th scope="col">nom</th>
                    <th scope="col">adresse_mail</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data['joueurs'] as $joueur) { ?>
                <tr>
                    <td><?php echo $joueur->id_joueur;?></td>
                    <td><?php echo $joueur->pseudo;?></td>
                    <td><?php echo $joueur->prenom_joueur;?></td>
                    <td><?php echo $joueur->nom_joueur;?></td>
                    <td><?php echo $joueur->adresse_mail;?></td>
                    <td><button type="button" class="btn btn-primary">Modifier</button></td>
                    <td>
                        <form action='index.php' method='GET'>
						    <input type="hidden" name="id_joueur" value="<?= $joueur->id_joueur; ?>" />
							<input type="hidden" name="action" value="DeleteJoueurs" />
					      <button type="submit" class="btn btn-danger">Supprimer</button>
					    </form>                    
                    </td>
                </tr>
                <?php } ?>                 
          </table>
    </div>
</section>