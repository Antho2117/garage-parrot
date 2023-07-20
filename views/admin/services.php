<main class="container-fluid d-flex flex-column flex-md-wrap col-md-6 col-lg-5 col-xl-4 mt-4">
    <h3 class="text-center">Nous sommes le <?= date("d-m-Y") ?>.</h3>
    <div class="dropdown d-flex justify-content-center">
        <button
            type="button"
            class="btn btn-success text-white my-3 dropdown-toggle col-12"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            Ajouter une prestation
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <form method="post" class="d-flex flex-column align-items-center">
                <div class="my-3 col-9">
                    <label for="service" class="form-label">Quel genre de prestation désirez-vous :</label>
                    <select class="form-select" id="service" name="service" aria-label="Default select">
                        <option selected>selectionnez une prestation</option>
                        <option value="mechanic">Prestation mécanique</option>
                        <option value="body">Prestation carrosserie</option>
                        <option value="increased">Augmentation de performance</option>
                    </select>
                </div>
                <div class="my-3 col-9">
                    <label for="price" class="form-label">Veuillez indiquer le prix horaire du service :</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="my-3 col-9">
                    <label for="serviceDescribe" class="form-label">Veuillez indiquer la description du service :</label>
                    <textarea type="text" class="form-control" id="serviceDescribe" name="serviceDescribe" rows="4"></textarea>
                </div>
                <div class="col-9 d-flex flex-column align-items-center">
                    <button type="submit" class="btn btn-secondary my-3 border-0 bg-info text-white">Envoyer</button>
                </div>
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
            Supprimer un service
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <div class="d-flex flex-column align-items-center">
                <h5 class="text-center">Voici la liste de vos services, la suppression est irréversible :</h5>
                <?php foreach ($services as $service): ?>
                    <a type="button" href="<?= ROOT ?>/admin/deleteService/<?= $service->id_service ?>" class="btn btn-danger col-5 m-2">
                        <?= "Service: ". ucfirst($service->service_type); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-secondary my-3 border-0 bg-info text-white">
        <a href="<?= ROOT ?>/admin" class="text-white text-decoration-none">Retour</a>
    </button>
</main>