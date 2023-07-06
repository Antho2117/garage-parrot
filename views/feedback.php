<?php

//require_once __DIR__."/lib/config.php";
//require_once __DIR__."/lib/pdo.php";
require_once __DIR__."/header.php";
//require_once __DIR__."/lib/customerReview.php";
//require_once __DIR__."/lib/validateFormFeedback.php";

//$feedback = validateFormFeedback($pdo);
//$reviews = getCustomerReview($pdo);

?>

<main class="container-fluid d-md-flex flex-md-row-reverse col-xl-9 p-md-4">
    <div class="d-flex flex-column align-items-center justify-content-md-center col-md-6 mt-4">
        <h5 class="text-center p-md-4">
            Pour publier un avis, cliquez sur le bouton ci-dessous. Vous pouvez aussi consulter les avis en dessous de
            celui-ci.
        </h5>
        <form method="post" action="<?php $feedback; ?>">
            <div class="mb-3">
                <label for="username" class="form-label">Veuillez indiquer votre nom :</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="votre nom">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Veuillez indiquer votre note /5 :</label>
                <input type="text" class="form-control" id="rating" name="rating" maxlength="1" placeholder="votre note">
            </div>
            <div class="mb-3">
                <label for="opinion" class="form-label">Votre avis :</label>
                <textarea class="form-control" id="opinion" name="opinion" rows="5" placeholder="Veuillez rédiger votre avis"></textarea>
            </div>
            <div class="mb-3 d-flex flex-column align-items-center">
                <button type="submit" class="btn btn-secondary d-flex flex-column align-items-center">Envoyer</button>
            </div>
        </form>
    </div>

    <!-- Accordion -->
    <div class="accordion col-md-6 my-md-4 " id="accordionUserOpinion">
        <?php foreach ($reviews as $review){ ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button bg-success text-white"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse<?= $review["id"] ?>"
                        aria-expanded="true"
                        aria-controls="collapse<?= $review["id"] ?>"
                    >
                        <?php echo $review["author"]." le ".$review["date"].", note: ".$review["note"]."/5" ?>
                    </button>
                </h2>
                <div id="collapse<?= $review["id"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionUserOpinion">
                    <div class="accordion-body">
                        <span><?php echo $review["comment"] ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</main>

<?php

require_once __DIR__."/footer.php";