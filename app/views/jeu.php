<?php
require('header.php');
?>
<section id="jeu">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <form>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Thèmes</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Pirate</option>
                <option>Science-Fiction</option>   
              </select>
          </div>
        </form>      
      </div>
      <div class="col-8"></div>

      <div class="col-2">
        <button type="button" class="btn btn-success" style="margin:2em">Ajouter jeu</button>
      </div>
    </div>
  </div>

  <div class="container">
    <table class="table table-bordered" style="margin-top:2em">
        <thead>
          <tr>
            <th scope="col">id_jeu</th>
            <th scope="col">editeur</th>
            <th scope="col">date_parution</th>
            <th scope="col">type</th>
            <th scope="col">duree</th>
            <th scope="col">nbr_joueurs_min</th>
            <th scope="col">nbr_joueurs_max</th>
            <th scope="col"></th>   
            <th scope="col"></th>                 
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
                <td><button type="button" class="btn btn-primary">Modifier jeu</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer jeu</button></td>
              </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
</section>