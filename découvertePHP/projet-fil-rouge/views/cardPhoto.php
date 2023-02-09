<div class="card m-2 border-dark" style="width: 18rem;">
  <img src="<?=$photo->photos?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$photo->titre?></h5>
    <p class="card-text"><?=$photo->legend?></p>
    
    <a href="index.php?page=photo&id=<?=$photo->id?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>