<?php

require_once __DIR__."/privateHeader.php";

?>
<main class="container-fluid d-flex flex-column flex-md-wrap col-md-6 col-lg-5 col-xl-4 mt-4">
    <h3 class="text-center">Bonjour Mr Parrot, nous sommes le <?= date("d-m-Y") ?>.</h3>
    <button
        type="button"
        class="btn btn-success text-white my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Modifier les horaires
    </button>
    <button
        type="button"
        class="btn btn-success text-white my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Gérer les services
    </button>
    <button
        type="button"
        class="btn btn-success text-white my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        <a href="manageEmployee.php" class="text-white">
            Gérer les comptes employé
        </a>
    </button>
    <button
        type="button"
        class="btn btn-success text-white my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Statistiques du site
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Gérer les avis clients
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Consulter les emails
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        <a href="carSaleManagement.php" >Gérer le parc automobiles</a>
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Gérer mon compte
    </button>
    <button type="button" class="btn btn-danger my-3">
        <a href="<?= _BASE_USERSPACE_URL ?>/logout" class="text-decoration-none">
            Se déconnecter
        </a>
    </button>
</main>

<!-- Modal site construction in progress -->
<div class="modal fade" id="inProgressModal" tabindex="-1" aria-labelledby="inProgressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h1 class="modal-title fs-5" id="inProgressModalLabel">En construction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-primary">
                Cette page du site est en construction, soyez patient.
            </div>
            <div class="modal-footer bg-success d-flex justify-content-center">
                <button type="button" class="btn btn-secondary border-0 bg-info text-white" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php

require_once __DIR__."/privateFooter.php";