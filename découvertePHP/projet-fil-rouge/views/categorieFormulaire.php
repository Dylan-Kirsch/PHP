<div class="formulaire">

    <form method="POST">

        <fieldset class="form-control">
            
            <input class="form-control" type="text" name="libelle" placeholder="Titre de la categorie" value="<?=isset($_POST['libelle'])?$_POST['libelle']:"";?>">

            <button>Créer</button>

        </fieldset>
        
        <input type="hidden" name="codesecret" value="<?=$_SESSION['codesecret'];?>">


    </form>
</div>    