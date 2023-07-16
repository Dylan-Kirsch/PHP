<div class="formulaire">

    <form method="POST" enctype="multipart/form-data">

        <fieldset class="form-control" >

            <legend>Création d'une galerie</legend>
            <input class="form-control" type="text" name="titre" placeholder="Titre de la galerie" value="<?=isset($_POST['titre'])?$_POST['titre']:"";?>">

            <input class="form-control" type="text" name="photo" placeholder="nom du fichier" value="<?=isset($_POST['photo'])?$_POST['photo']:"";?>">
            
            <div class="input-group">
                <span class="input-group-text">Legend</span> 
                <textarea class="form-control" name="legend" id="" cols="30" rows="10"><?=isset($_POST['legend'])?$_POST['legend']:"";?></textarea>
            </div>

            <div class="input-group">
                <span class="input-group-text">Tag</span> 
                <textarea class="form-control" name="tag" id="" cols="30" rows="10"><?=isset($_POST['tag'])?$_POST['tag']:"";?></textarea>
            </div>

            <select name="idUtilisateur" id="idUtilisateur">

                <?php

                foreach ($utilisateurs as $utilisateur): ?>
                    <option value="<?=$utilisateur->id?>"<?=(isset($_POST['idUtilisateur'])&&$_POST['idUtilisateur']==$utilisateur->id)?" SELECTED ":""?>><?=$utilisateur->prenom?> <?=$utilisateur->nom?></option>
                
                <?php
                endforeach; ?>

            </select>

            <button>Créer</button>

        </fieldset>
        
        <input type="hidden" name="codesecret" value="<?=$_SESSION['codesecret'];?>">


    </form>
</div>    