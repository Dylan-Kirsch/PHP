<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>layout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-danger p-3">

        <div class="container-fluid">

            <a class="navbar-brand text-white" href="index.php">Galerie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=photo">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=utilisateur">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=categorie">Categories</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Les galeries
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="index.php?page=galerie">Galeries</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?page=ajouter-galerie">Ajouter galeries</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
 
    <main><?=$content?></main>

</body>
</html>