<main class="container-fluid d-flex flex-column flex-md-wrap col-md-6 col-lg-5 col-xl-4 mt-4">
    <h3 class="text-center">Nous sommes le <?= date("d-m-Y") ?>.</h3>
    <div class="dropdown d-flex justify-content-center">
        <button
            type="button"
            class="btn btn-success text-white my-3 dropdown-toggle col-12"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            Ajouter un commentaire
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <form method="post" class="d-flex flex-column align-items-center">
                <div class="my-3 col-9">
                    <label for="username" class="form-label">Veuillez indiquer le nom d'utilisateur pour cet avis :</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="nom utilisateur">
                </div>
                <div class="my-3 col-9">
                    <label for="rating" class="form-label">Veuillez indiquer la note de l'utilisateur /5 :</label>
                    <input type="text" class="form-control" id="rating" name="rating" maxlength="1" placeholder="note utilisateur">
                </div>
                <div class="my-3 col-9">
                    <label for="opinion" class="form-label">Veuillez remplir l'avis de l'utilisateur :</label>
                    <textarea class="form-control" id="opinion" name="opinion" rows="5"></textarea>
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
            Supprimer un commentaire
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
            <div class="d-flex flex-column align-items-center">
                <h5 class="text-center">Voici la liste des commentaires, la suppression est irréversible :</h5>
                <?php foreach ($reviews as $review): ?>
                    <a type="button" href="<?= ROOT ?>/employee/deleteReview/<?= $review->id_customer_review ?>" class="btn btn-danger col-5 m-2">
                        <?= "Par ". ucfirst($review->customer_review_username). " le " . $review->customer_review_date . ", note: " .$review->customer_review_note.", commentaire: ".$review->customer_review_text; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-secondary my-3 border-0 bg-info text-white">
        <a href="<?= ROOT ?>/employee" class="text-white text-decoration-none">Retour</a>
    </button>
</main>