<aside class="container d-flex flex-column align-items-center">
    <button
        type="button"
        class="btn btn-secondary shadow-lg mt-4"
        data-bs-toggle="modal"
        data-bs-target="#searchFilterModal"
    >
        Filtrer les recherches
    </button>
    <p class="text-center mt-3 mx-2">Tous les véhicules présentés sont en stock et disponibles de suite,
        n'hésitez pas à nous contacter pour plus de renseignements.
    </p>
</aside>

<!-- Cars by card display -->
<main class="container-fluid d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-evenly">
    <?php foreach ($cars as $id => $car): ?>
        <div class="card shadow-lg mb-3 mx-1 col-md-3" >
            <img src="<?= $car->car_image ?>" class="card-img-top h-100" alt="iacar">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Voiture créée par ia</h5>
                <ul>
                    <li>modèle : <?= $car->car_brand; ?></li>
                    <li>année : <?= $car->car_year; ?></li>
                    <li>kms : <?= $car->car_kilometers; ?></li>
                    <li>options : à découvrir dans détails</li>
                    <li>prix : <?= $car->car_price; ?>€</li>
                </ul>
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="modal"
                    data-bs-target="#carCardsModal<?= $id; ?>"
                >
                    Détails
                </button>
            </div>
        </div>
        <!-- Modal car cards -->
        <div class="modal fade" id="carCardsModal<?= $id; ?>"  aria-labelledby="carCardsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h1 class="modal-title fs-5" id="carCardsModalLabel">Détails du véhicule</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-primary">
                        <p><?= $car->car_brand; ?><br>
                            - année : <?= $car->car_year; ?><br>
                            - kms : <?= $car->car_kilometers; ?><br>
                            - options : <?= $car->car_options; ?><br>
                            - prix : <?= $car->car_price; ?>€<br>
                        </p>
                        <img src="<?= ROOT ?>/assets/images/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
                        <img src="<?= ROOT ?>/assets/images/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">
                        <img src="<?= ROOT ?>/assets/images/hoonicorn.png" class="img-fluid rounded mb-2" alt="hoonicorn">

                        <!-- Form car infos -->
                        <form method="post" action="<?= ROOT ?>/cars/sendForm">
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
                                <input type="text" class="form-control" id="object" value="<?= $car->car_brand; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message :</label>
                                <textarea class="form-control" id="message" rows="5"></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button
                                    type="button"
                                    id="sendConfirmBtn"
                                    class="btn btn-secondary mb-3"
                                    onclick="sendConfirm()"
                                    value="confirm"
                                    data-bs-dismiss="modal"
                                >
                                    Envoyer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</main>

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
                    <li class="mb-2">Année<br>
                        <label class="lh-sm my-3" for="minimumYear">Min :
                            <input type="text" class="border-0 bg-primary" id="minimumYear" placeholder="année minimum">
                        </label>
                        <label class="lh-sm" for="maximumYear">Max :
                            <input type="text" class="border-0 bg-primary" id="maximumYear" placeholder="année minimum">
                        </label>
                    </li>
                    <li class="mb-2">Kilomètres<br>
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