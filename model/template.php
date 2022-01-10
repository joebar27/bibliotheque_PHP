<obd
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">


</head>

<body>

    <!-- ################################################### HEADER ##################################################################### -->
  
    <header>    
      <div>
        <h1>Bibliothèque</h1>
        <p>Le logiciel de tout les bibliothécaires</p>
      </div>
    </header>
    <!-- #################################################### NAV ##################################################################### -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="bookList.php">Liste des livres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajout / Suppresion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userList.php">Liste des utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Espace bibliothécaire</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opérations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="createAccount.php">Création de compte</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Vos CB</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">F.A.Q</a></li>
            </ul> -->
                    </li>
                </ul>

                <!-- <?php
        // if (isset($_SESSION['user_id'])){
        //   echo '<a class="btn btn-outline-danger me-2" name="logout" href="logout.php" method="post">Déconnection</a>';
        // }else {
        //   echo '<a class="btn btn-outline-success me-2" name="login" href="login.php" method="post">Connection</a>';
        // }
        // ?>
        <form class="d-flex mb-0">
          <input class="form-control me-2" type="search" placeholder="Votre recherche" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form> -->
            </div>
        </div>
    </nav>

    <!-- ################################################### MAIN ##################################################################### -->

    <main class="container">
        <h1>
            <?= $underTitle ?>
        </h1>
        <div>
            <?= $content ?>
        </div>
    </main>

    <!-- ################################################### FOOTER ##################################################################### -->

    <footer class="container-fluid fixed-bottom">
        <div>
            <ul class="d-flex justify-content-around ">
                <li>
                    <p>Utilisateur : </p>
                </li>
                <li>
                    <p>Nombre Livre Total : </p>
                </li>
                <li>
                    <p>Nombre d'emprunt : </p>
                </li>
                <li>
                    <p>Date : </p>
                </li>
            </ul>
        </div>

    </footer>


    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>