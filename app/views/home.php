<?php
require('header.php');
?>

<div style="margin: 2em;">
    <h3>Voir Les Statistiques:</h3>
</div>

<div class="row"  style="margin: 4em;">
  <div class="col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">JOUEURS</h5>
        <p class="card-text">- les joueurs, classés selon le nombre de jeux qu’ils ont notés .</p>
        <form action='index.php' method='GET'>
            <input type="hidden" name="action" value="joueurOrderByCommentaire" />
            <button type="submit" class="btn btn-primary">Voir Statistiques</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">COMMENTAIRES</h5>
        <p class="card-text">- la liste des n commentaires les plus recents.</p>
        <form action='index.php' method='GET'>
            <div class="form-group">
                <label for="">Donner n:</label>
                <input type="number" class="form-control" id="n" name="n">     
            </div>
            <input type="hidden" name="action" value="CommentairePlusRecents" />
            <button type="submit" class="btn btn-primary">Voir Statistiques</button>
        </form>      
      </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
</div>

<div class="row"  style="margin: 4em;">
  <div class="col-sm-2"></div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">COMMENTAIRES</h5>
        <p class="card-text">-  un indice de confiance du commentaire .</p>
        <a href="#" class="btn btn-primary">Voir Statistiques</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">COMMENTAIRES</h5>
        <p class="card-text">- le commentaire qui laisse le moins indifférent.</p>
        <form action='index.php' method='GET'>
            <input type="hidden" name="action" value="MoinIndifferent" />
            <button type="submit" class="btn btn-primary">Voir Statistiques</button>
        </form>         
      </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
</div>