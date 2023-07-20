<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= ROOT ?>/assets/images/favicon.ico">

    <!-- Bootstrap installed with npm -->
    <link rel="stylesheet" href="<?= ROOT ?>/main.css">

    <title>Garage V.Parrot</title>


</head>

<body class="bg-primary ">

<!-- Navbar -->
<header>
    <nav class="navbar navbar-dark navbar-expand-md bg-secondary">
        <div class="container-fluid d-flex">

            <!-- Main logo -->
            <a href="<?= ROOT ?>/home" class="col-8 col-md-9"><img src="<?= ROOT ?>/assets/images/logo/logo-no-background.png" class="img-fluid" alt="car"></a>

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
            <div class="bg-secondary mx-2">
                <ul class="navbar-nav list-unstyled text-center">
                    <li class="nav-item-2">
                        <a href="<?= ROOT ?>/home" class="nav-link text-decoration-none text-black">Accueil</a>
                    </li>
                    <li class="nav-item-2">
                        <a href="<?= ROOT ?>/cars" class="nav-link text-decoration-none text-black">Voitures</a>
                    </li>
                    <li class="nav-item-2">
                        <a href="<?= ROOT ?>/workshop" class="nav-link text-decoration-none text-black">Atelier</a>
                    </li>
                    <li class="nav-item-2">
                        <a href="<?= ROOT ?>/contact" class="nav-link text-decoration-none text-black">Contact</a>
                    </li>
                    <li class="nav-item-2">
                        <a href="<?= ROOT ?>/feedback" class="nav-link text-decoration-none text-black">Avis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container-fluid">
    <?php echo $content; ?>
</div>

<noscript>Veuillez activer JavaScript pour profiter de toutes les fonctionnalités de notre site.</noscript>

<!-- Include JavaScript -->
<script src="<?= ROOT ?>/index.js"></script>

<!-- Include Bootstrap -->
<script src=<?= ROOT ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js></script>

</body>
</html>