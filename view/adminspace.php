<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap installed with npm -->
    <link rel="stylesheet" href="../main.css">

    <title>Espace employé garage V.Parrot</title>

</head>

<body>

    <!-- Navbar -->
  <header>
    <nav class="navbar navbar-dark navbar-expand-md bg-primary">     
      <div class="container-fluid d-flex">     

        <!-- Main logo -->
        <a href="mainpage.php" class="col-8 col-md-9"><img src="../img/logo/logo-no-background.png" class="img-fluid" alt="car"></a>

        <!-- Dropdown menu -->
        <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggleExternalContent" 
          aria-controls="navbarToggleExternalContent" 
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="black"
              class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
              <path
                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
          </span>
        </button> 
      </div>
      <div class="collapse navbar-collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-primary mx-2">
          <ul class="navbar-nav list-unstyled text-center">
            <li class="nav-item-2">
              <a href="mainpage.php" class="nav-link text-decoration-none text-black">Accueil</a>
            </li>
            <li class="nav-item-2">
              <a href="cars.php" class="nav-link text-decoration-none text-black">Voitures</a>
            </li>
            <li class="nav-item-2">
              <a href="workshop.php" class="nav-link text-decoration-none text-black">Atelier</a>
            </li>
            <li class="nav-item-2">
              <a href="contact.php" class="nav-link text-decoration-none text-black">Contact</a>
            </li>
            <li class="nav-item-2">
              <a href="feedback.php" class="nav-link text-decoration-none text-black">Avis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <main class="container-fluid d-flex flex-column flex-md-wrap col-md-6 col-lg-5 col-xl-4 mt-4">
        <h3 class="text-center">Bonjour Mr Parrot, nous sommes le "date du jour", il est "heure du jour".</h3>
        <button 
            type="button" 
            class="btn btn-primary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Modifier les horaires
        </button>
        <button 
            type="button" 
            class="btn btn-primary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Gérer les services
        </button>
        <button 
            type="button" 
            class="btn btn-primary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Gérer les comptes employé
        </button>
        <button 
            type="button" 
            class="btn btn-primary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Statistiques du site
        </button>        
        <button 
            type="button" 
            class="btn btn-secondary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Gérer les avis clients
        </button>
        <button 
            type="button" 
            class="btn btn-secondary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Consulter les emails
        </button>
        <button 
            type="button" 
            class="btn btn-secondary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Gérer le parc automobiles
        </button>
        <button 
            type="button" 
            class="btn btn-secondary my-3" 
            data-bs-toggle="modal" 
            data-bs-target="#inprogressModal"
        >
            Gérer mon compte
        </button>
        <button type="button" class="btn btn-danger my-3">
            <a href="connexion.php" class="text-decoration-none">
                Se déconnecter
            </a>
        </button>
    </main>

    <!-- Modal site construction in progress -->
    <div class="modal fade" id="inprogressModal" tabindex="-1" aria-labelledby="inprogressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="inprogressModalLabel">En construction</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Cette page du site est en construction, soyez patient.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <noscript>Veuillez activer JavaScript pour profiter de toutes les fonctionnalités de notre site.</noscript>

    <!-- Include JavaScript -->
    <script src="../index.js"></script>

    <!-- Include Bootstrap -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>