<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

        

        <form action="reponse.php" method="POST">

            <fieldset>

                <div class="civiliter">
                    <select name="civilite" id="civilite">
                        <option id="raciale1" value="homme" selected >Mme</option>
                        <option id="raciale2" value="femme">M</option>
                    </select>
                    <label for="name">Nom:</label>
                    <input type="text" id="nom" name="nom" placeholder="saisissez votre nom"/>
                <div>

                <div class="prenom">
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom" id="prenom" placeholder="saisissez votre prénom">
                </div>

                <div class="dt_naissance">
                    <label for="dateNaissance">Date de Naissance:</label>
                    <input type="date" name="dateNaissance" id="naissance" placeholder="1994">
                </div>

                <div class="identifiant">
                    <label for="identifiant">Donnez un identifiant:</label>
                    <input type="text" name="identifiant" id="identifiant" placeholder="Id">
                </div>

                <div class="motDePasse">
                    <label for="mdp">Donnez mot de passe:</label>
                    <input type="password" name="mdp" id="mdp" value="0" placeholder="Mot de passe">
                </div>

                <div class="genres">
                    <label for="sexe">genre:</label>
                    <input type="radio" name="genre" id="masculin" class="masculin">Masculin
                    <input type="radio" name="genre" id="feminin" class="feminin">Feminin
                </div>

                <div class="php">
                    <input type="checkbox" name="php" id="php" class="php">Je débute en PHP
                </div>

                <button id="btn_envoyer">Envoyer</button>
            
            </fieldset>
            
        </form>
    
</body>
</html>