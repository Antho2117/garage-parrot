
  <aside class="d-flex flex-column align-items-center">

    <!-- Modal car cards -->
    <div class="modal fade" id="carCardsModal" tabindex="-1" aria-labelledby="carCardsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h1 class="modal-title fs-5" id="carCardsModalLabel">Titre du véhicule en dynamique</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-primary">  
            <p>Description dynamique du véhicule :<br>
              - modèle <br>
              - année <br>
              - kms <br>
              - options <br>
              - prix <br>
              - couleur
            </p>
            <img src="../img/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
            <img src="../img/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
            <img src="../img/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
            
            <!-- Form car infos -->
            <form>
              <div class="mb-3">
                <label for="lastname" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="lastname" placeholder="votre nom">
              </div>
              <div class="mb-3">
                <label for="firstname" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="firstname" placeholder="votre prénom">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Téléphone :</label>
                <input type="text" class="form-control" id="phone" placeholder="0123456789">
              </div>
              <div class="mb-3">
                <label for="object" class="form-label">Objet :</label>
                <input type="text" class="form-control" id="object" placeholder="objet du message en dynamique">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer d-flex justify-content-center bg-success">
            <button 
              type="button" 
              class="btn btn-info text-white" 
              data-bs-dismiss="modal" 
              data-bs-target="#requestSendModal" 
              data-bs-toggle="modal"
            >
              Envoyer
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal request send -->
    <div class="modal fade" id="requestSendModal" aria-hidden="true" aria-labelledby="requestSendModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h1 class="modal-title fs-5" id="requestSendModalToggleLabel">Demande envoyée</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-primary">
            <p>Votre demande est envoyée, nous y répondrons en moins de 48h.<br>
              Cordialement
            </p>
          </div>
          <div class="modal-footer bg-success text-white d-flex justify-content-center">
            <button class="btn btn-info text-white" data-bs-dismiss="modal" aria-label="Close">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal button for car search -->
    <button type="button" class="btn btn-secondary shadow-lg mt-4" data-bs-toggle="modal" data-bs-target="#searchFilterModal">
      Filtrer les recherches
    </button>

    <!-- Modal for car search -->
    <div class="modal fade" id="searchFilterModal" tabindex="-1" aria-labelledby="searchFilterModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h1 class="modal-title fs-5" id="searchFilterModalLabel">Filtrer les recherches</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-primary">
            <ul>
              <li>prix
                <p class="lh-sm mt-3">Min :<input type="text" class="border-0 bg-primary" placeholder="montant minimum"></p>
                <p class="lh-sm">Max :<input type="text" class="border-0 bg-primary" placeholder="montant maximum"></p>
              </li>
              <li>Année
                <p class="lh-sm mt-3">Min :<input type="text" class="border-0 bg-primary" placeholder="année minimum"></p>
                <p class="lh-sm">Max :<input type="text" class="border-0 bg-primary" placeholder="année minimum"></p>
              </li>
              <li>Kilomètres
                <p class="lh-sm mt-3">Min :<input type="text" class="border-0 bg-primary" placeholder="kms minimum"></p>
                <p class="lh-sm">Max :<input type="text" class="border-0 bg-primary" placeholder="kms minimum"></p>
              </li>
            </ul>
          </div>
          <div class="modal-footer d-flex justify-content-center bg-success">
            <button type="button" class="btn btn-success bg-info text-white" data-bs-dismiss="modal">rechercher</button>
          </div>
        </div>
      </div>
    </div>

    <p class="text-center mt-3 mx-2">Tous les véhicules présentés sont en stock et disponibles de suite,
      n'hésitez pas à nous contacter pour plus de renseignements.
    </p>
  </aside>

  <!-- Cars by card display -->
  <main class="container-fluid d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-evenly">
    <div class="card shadow-lg mb-3 col-md-3" style="width: 18rem;">
      <img src="../img/images-ia/homepage.png" class="card-img-top" alt="iacar">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Voiture créée par ia</h5>
        <ul>
          <li>modèle : ia generator</li>
          <li>année : 2023</li>
          <li>kms : 0</li>
          <li>options : full options</li>
          <li>prix : 50000€</li>
        </ul>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
          data-bs-target="#carCardsModal">Détails</button>
      </div>
    </div>
    <div class="card shadow-lg mb-3 col-md-3" style="width: 18rem;">
      <img src="../img/images-ia/homepage.png" class="card-img-top" alt="iacar">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Voiture créée par ia</h5>
        <ul>
          <li>modèle : ia generator</li>
          <li>année : 2023</li>
          <li>kms : 0</li>
          <li>options : full options</li>
          <li>prix : 50000€</li>
        </ul>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
          data-bs-target="#carCardsModal">Détails</button>
      </div>
    </div>
    <div class="card shadow-lg mb-3 col-md-3" style="width: 18rem;">
      <img src="../img/images-ia/homepage.png" class="card-img-top" alt="iacar">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Voiture créée par ia</h5>
        <ul>
          <li>modèle : ia generator</li>
          <li>année : 2023</li>
          <li>kms : 0</li>
          <li>options : full options</li>
          <li>prix : 50000€</li>
        </ul>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
          data-bs-target="#carCardsModal">Détails</button>
      </div>
    </div>
    <div class="card shadow-lg mb-3 col-md-3" style="width: 18rem;">
      <img src="../img/images-ia/homepage.png" class="card-img-top" alt="iacar">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Voiture créée par ia</h5>
        <ul>
          <li>modèle : ia generator</li>
          <li>année : 2023</li>
          <li>kms : 0</li>
          <li>options : full options</li>
          <li>prix : 50000€</li>
        </ul>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
          data-bs-target="#carCardsModal">Détails</button>
      </div>
    </div>
    <div class="card shadow-lg mb-3 col-md-3" style="width: 18rem;">
      <img src="../img/images-ia/homepage.png" class="card-img-top" alt="iacar">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Voiture créée par ia</h5>
        <ul>
          <li>modèle : ia generator</li>
          <li>année : 2023</li>
          <li>kms : 0</li>
          <li>options : full options</li>
          <li>prix : 50000€</li>
        </ul>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
          data-bs-target="#carCardsModal">Détails</button>
      </div>
    </div>
  </main>
