<form method="POST">

    <fieldset>

        <legend>Création d'une galerie</legend>
        <input type="text" name="titre">
        <input type="text" name="photo" placeholder="nom du fichier">
        <textarea name="legend" id="" cols="30" rows="10"></textarea>
        <textarea name="tag" id="" cols="30" rows="10"></textarea>
        <select name="idUtilisateur" id="idUtilisateur">

            <?php

            foreach ($utilisateurs as $utilisateur): ?>
                <option value="<?=$utilisateur->id?>"><?=$utilisateur->prenom?> <?=$utilisateur->nom?></option>
            <?php
            endforeach; ?>

        </select>
        <button>Créer</button>

    </fieldset>

</form>