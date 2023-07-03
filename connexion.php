<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap installed with npm -->
    <link rel="stylesheet" href="main.css">

    <title>Espace privé garage V.Parrot</title>

</head>

<body>

    <!-- Navbar -->
  <header>
    <nav class="navbar navbar-dark navbar-expand-md bg-primary">     
      <div class="container-fluid d-flex">     

        <!-- Main logo -->
        <a href="lib/mainpage.php" class="col-8 col-md-9"><img src="assets/images/logo/logo-no-background.png" class="img-fluid"></a>

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
              <a href="lib/mainpage.php" class="nav-link text-decoration-none text-black">Accueil</a>
            </li>
            <li class="nav-item-2">
              <a href="lib/cars.php" class="nav-link text-decoration-none text-black">Voitures</a>
            </li>
            <li class="nav-item-2">
              <a href="lib/workshop.php" class="nav-link text-decoration-none text-black">Atelier</a>
            </li>
            <li class="nav-item-2">
              <a href="lib/contact.php" class="nav-link text-decoration-none text-black">Contact</a>
            </li>
            <li class="nav-item-2">
              <a href="lib/feedback.php" class="nav-link text-decoration-none text-black">Avis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <main class="container-fluid col-md-9 col-lg-7 col-xl-5">
        <form>
            <h2 class="text-center my-5">Espace salarié</h2>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">veuillez entrer votre adresse professionnelle uniquement.</div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-4"><a href="userspace.php" class="text-decoration-none">Se connecter</a></button>
            </div>
        </form>
    </main>

    <noscript>Veuillez activer JavaScript pour profiter de toutes les fonctionnalités de notre site.</noscript>

    <!-- Include JavaScript -->
    <script src="index.js"></script>

    <!-- Include Bootstrap -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>