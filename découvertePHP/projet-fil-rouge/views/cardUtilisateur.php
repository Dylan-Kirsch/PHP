<div class="card m-2 border-dark" style="width: 18rem;">
  <img src="#" class="card-img-top" alt="#">
  <div class="card-body">
    <h5 class="card-title"><?=$utilisateur->nom?><?=$utilisateur->prenom?></h5>
    <p class="card-text"></p>
    
    <a href="index.php?page=utilisateur&id=<?=$utilisateur->id?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>