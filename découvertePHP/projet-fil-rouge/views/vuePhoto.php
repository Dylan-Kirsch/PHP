<div class="card" style="width: 18rem;">
  <img src="assets\images\<?=$photo->photos?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$photo->titre?></h5>
    <p class="card-text"><?=$photo->legend?></p>
    <p class="card-text"><?=$photo->tag?></p>
    <p class="card-text"><?=$photo->createur->prenom?></p>
    <a href="index.php?page=utilisateur&id=<?=$photo->createur->id?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>