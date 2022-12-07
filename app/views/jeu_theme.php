<?php
require('header.php');
?>
<section id="jeu">
  <div class="container" style="margin: 1em;">
    <div class="row"  style="margin-top:2em">
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Sélectionner Un Thème:</h6>
            <form action='index.php' method='GET'>
              <select class="form-control" id="" name="nom_theme">
                <?php foreach ($data['themes'] as $theme) { ?>
                  <option><?php echo $theme->nom_theme;?></option>
                  <?php } ?>
              </select>
						  <input type="hidden" name="action" value="getJeuPerTheme" />
						  <button type="submit" class="btn btn-success" style="margin:2em">Filtrer</button>
				    </form>   
          </div>
        </div>   
      </div>
    
      <div class="col-8">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id_jeu</th>
                <th scope="col">editeur</th>
                <th scope="col">date_parution</th>
                <th scope="col">type</th>
                <th scope="col">duree</th>
                <th scope="col">nbr_joueurs_min</th>
                <th scope="col">nbr_joueurs_max</th>
                <th scope="col">id_Mécanique</th>   
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['jeux'] as $jeu) { ?>
                  <tr>
                    <td><?php echo $jeu->id_jeu;?></td>
                    <td><?php echo $jeu->editeur;?></td>
                    <td><?php echo $jeu->date_parution;?></td>
                    <td><?php echo $jeu->type;?></td>
                    <td><?php echo $jeu->duree;?></td>
                    <td><?php echo $jeu->nbr_joueurs_min;?></td>
                    <td><?php echo $jeu->nbr_joueurs_max;?></td>
                    <td><?php echo $jeu->id_mecanique;?></td>
                  </tr>
              <?php } ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</section>