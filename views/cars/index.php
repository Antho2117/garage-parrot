<aside class="container d-flex flex-column align-items-center">
    <button type="button" class="btn btn-secondary shadow-lg mt-4" data-bs-toggle="modal" data-bs-target="#searchFilterModal">
        Filtrer les recherches
    </button>
    <p class="text-center mt-3 mx-2">Tous les véhicules présentés sont en stock et disponibles de suite,
        n'hésitez pas à nous contacter pour plus de renseignements.
    </p>
</aside>

<!-- Cars by card display -->
<main class="container-fluid d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-evenly">
    <?php foreach ($cars as $id => $car){ ?>
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
                >
                    <a href="<?= ROOT ?>/cars/details/<?= $id; ?>">Détails</a>
                </button>
            </div>
        </div>
    <?php } ?>
</main>
