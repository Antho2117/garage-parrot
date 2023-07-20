<main class="container-fluid d-flex flex-column flex-md-wrap col-md-6 col-lg-5 col-xl-4 mt-4">
    <h3 class="text-center">Nous sommes le <?= date("d-m-Y") ?>.</h3>
    <div class="dropdown d-flex justify-content-center">
        <button
                type="button"
                class="btn btn-success text-white my-3 dropdown-toggle col-12"
                data-bs-toggle="dropdown"
                aria-expanded="false"
        >
            Ajouter un véhicule
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <form method="post" class="d-flex flex-column align-items-center" enctype="multipart/form-data">
                <label for="garage" class="form-label my-2">Identifiant garage :</label>
                <input type="text" id="garage" name="garage" value="1"><br>
                <label for="brand" class="form-label my-2">Marque et modèle :</label>
                <input type="text" id="brand" name="brand" placeholder="ex: Audi RS3"><br>
                <label for="year" class="form-label my-2">Année :</label>
                <input type="text" id="year" name="year" placeholder="ex: 2020"><br>
                <label for="kilometers" class="form-label my-2">Kilomètres :</label>
                <input type="text" id="kilometers" name="kilometers"><br>
                <label for="price" class="form-label my-2">Prix :</label>
                <input type="text" id="price" name="price"><br>
                <label for="options" class="form-label my-2">Options/description :</label>
                <textarea type="text" id="options" name="options" rows="5"></textarea>
                <label for="upload" class="form-label my-2">Image :</label>
                <input type="file" name="upload" id="upload">
                <button
                    type="submit"
                    class="btn btn-secondary border-0 bg-info text-white mt-2"
                >
                    Enregistrer le véhicule
                </button>
            </form>
        </div>
    </div>
    <div class="dropdown d-flex justify-content-center">
        <button
                type="button"
                class="btn btn-success text-white my-3 dropdown-toggle col-12"
                data-bs-toggle="dropdown"
                aria-expanded="false"
        >
            Modifier les informations
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <div class="container-fluid d-flex flex-column align-items-center">
                <h5 class="text-center">Quel véhicule souhaitez-vous modifier :</h5>
                <?php foreach ($cars as $car): ?>
                    <h6 class="text-center bg-warning rounded col-9 p-2">
                        <?= ucfirst($car->car_brand). ", " . $car->car_year ." : ".$car->car_price."€"; ?>
                    </h6>
                    <form method="post" class=" col-9 d-flex flex-column" enctype="multipart/form-data">
                        <select class="form-select" id="carModif" name="carModif" aria-label="Default select">
                            <option selected>selectionnez la modification a effectuer</option>
                            <option value="<?= $car->car_brand ?>">Marque et modèle</option>
                            <option value="<?= $car->car_year ?>">Année</option>
                            <option value="<?= $car->car_kilometers ?>">Kilomètres</option>
                            <option value="<?= $car->car_price ?>">Prix</option>
                            <option value="<?= $car->car_options ?>">Options</option>
                        </select>
                        <label for="upload" class="form-label"></label>
                        <input type="file" name="upload" id="upload">
                        <button
                            type="submit"
                            class="btn btn-info text-white my-3"
                            value="<?= ROOT ?>/admin/carUpdate/"
                        >Envoyer
                        </button>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="dropdown d-flex justify-content-center">
        <button
                type="button"
                class="btn btn-success text-white my-3 dropdown-toggle col-12"
                data-bs-toggle="dropdown"
                aria-expanded="false"
        >
            Supprimer un véhicule
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <div class="d-flex flex-column align-items-center">
                <h5 class="text-center">Voici la liste de vos véhicules, la suppression est irréversible :</h5>
                <?php foreach ($cars as $car): ?>
                    <a type="button" href="<?= ROOT ?>/admin/deleteCar/<?= $car->id_car ?>" class="btn btn-danger col-5 m-2">
                        <?= ucfirst($car->car_brand). " " . $car->car_year ." : ".$car->car_price."€"; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-secondary my-3 border-0 bg-info text-white">
        <a href="<?= ROOT ?>/admin" class="text-white text-decoration-none">Retour</a>
    </button>
</main>