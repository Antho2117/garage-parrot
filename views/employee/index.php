<main class="container-fluid d-flex flex-column col-md-6 col-lg-5 col-xl-4 mt-4">
    <?php if(!empty($_SESSION["success"])): ?>
        <div class="alert alert-info mt-3 text-center fs-4" role="alert">
            <?php echo $_SESSION["success"]; unset($_SESSION["success"]); ?>
        </div>
    <?php else : ?>
        <h3 class="text-center">Nous sommes le <?= date("d-m-Y") ?>.</h3>
    <?php endif; ?>
    <button
        type="button"
        class="btn btn-secondary my-3"
    >
        <a href="<?= ROOT ?>/employee/reviews" class="text-black text-decoration-none">
            Gérer les avis clients
        </a>
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3"
    >
        <a href="https://mail.google.com/mail/u/1/#inbox" target="_blank" class="text-decoration-none">
            Consulter les emails
        </a>
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3"
    >
        <a href="<?= ROOT ?>/employee/cars" class="text-decoration-none">Gérer le parc automobiles</a>
    </button>
    <button
        type="button"
        class="btn btn-secondary my-3 text-decoration-none"
    >
        <a href="<?= ROOT ?>/employee/userAccount" class="text-decoration-none">
            Gérer mon compte
        </a>
    </button>
    <button type="button" class="btn btn-danger my-3">
        <a href="<?= ROOT ?>/employee/logout" class="text-decoration-none">
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