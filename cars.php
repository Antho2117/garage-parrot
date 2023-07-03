<?php

require_once __DIR__."/templates/header.php";

$cars = [
        ["brand" => "Lamborghini Aventador", "year" => 2012, "kms" => 2987, "options" => "full options", "price" => 150000],
        ["brand" => "Audi RS3", "year" => 2012, "kms" => 2987, "options" => "full options", "price" => 150000],
        ["brand" => "Mercedes C63 AMG", "year" => 2012, "kms" => 2987, "options" => "full options", "price" => 150000],
        ["brand" => "Volkswagen Golf 8 GTI", "year" => 2012, "kms" => 2987, "options" => "full options", "price" => 150000],
        ["brand" => "Pagani Zonda R Cinque", "year" => 2012, "kms" => 2987, "options" => "full options", "price" => 150000]
];

?>

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
                    <img src="assets/images/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
                    <img src="assets/images/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
                    <img src="assets/images/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">

                    <!-- Form car infos -->
                    <form method="post" action="">
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
                    <li class="mb-2">Prix<br>
                        <label class="lh-sm my-3" for="minimumPrice">
                            Min :<input type="text" class="border-0 bg-primary" id="minimumPrice" placeholder="montant minimum">
                        </label>
                        <label class="lh-sm" for="maximumPrice">Max :
                            <input type="text" class="border-0 bg-primary" id="maximumPrice" placeholder="montant maximum">
                        </label>
                    </li>
                    <li>Année<br>
                        <label class="lh-sm my-3" for="minimumYear">Min :
                            <input type="text" class="border-0 bg-primary" id="minimumYear" placeholder="année minimum">
                        </label>
                        <label class="lh-sm" for="maximumYear">Max :
                            <input type="text" class="border-0 bg-primary" id="maximumYear" placeholder="année minimum">
                        </label>
                    </li>
                    <li>Kilomètres<br>
                        <label class="lh-sm my-3" for="minimumKilometers">Min :
                            <input type="text" class="border-0 bg-primary" id="minimumKilometers" placeholder="kms minimum">
                        </label>
                        <label class="lh-sm" for="maximumKilometers">Max :
                            <input type="text" class="border-0 bg-primary" id="maximumKilometers" placeholder="kms minimum">
                        </label>
                    </li>
                </ul>
            </div>
            <div class="modal-footer d-flex justify-content-center bg-success">
                <button type="button" class="btn btn-success bg-info text-white" data-bs-dismiss="modal">rechercher</button>
            </div>
        </div>
    </div>
</div>

<aside class="d-flex flex-column align-items-center">
    <!-- Modal button for car search -->
    <button type="button" class="btn btn-secondary shadow-lg mt-4" data-bs-toggle="modal" data-bs-target="#searchFilterModal">
        Filtrer les recherches
    </button>
    <p class="text-center mt-3 mx-2">Tous les véhicules présentés sont en stock et disponibles de suite,
        n'hésitez pas à nous contacter pour plus de renseignements.
    </p>
</aside>

<!-- Cars by card display -->
<main class="container-fluid d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-evenly">
    <?php foreach ($cars as $car){ ?>
        <div class="card shadow-lg mb-3 mx-1 col-md-3">
            <img src="assets/images/images-ia/homepage.png" class="card-img-top" alt="iacar">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Voiture créée par ia</h5>
                <ul>
                    <li>modèle : <?= $car['brand'] ?></li>
                    <li>année : <?= $car['year'] ?></li>
                    <li>kms : <?= $car['kms'] ?></li>
                    <li>options : <?= $car['options'] ?></li>
                    <li>prix : <?= $car['price'] ?></li>
                </ul>
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="modal"
                    data-bs-target="#carCardsModal"
                >
                    Détails
                </button>
            </div>
        </div>
   <?php } ?>
</main>

<?php

require_once __DIR__."/templates/footer.php";