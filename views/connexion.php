<?php

//require_once __DIR__."/lib/config.php";
//require_once __DIR__."/lib/pdo.php";
require_once __DIR__."/privateHeader.php";
//require_once __DIR__."/lib/loginVerify.php";

//$connexion = verifyUserLoginData($pdo);

?>

<main class="container-fluid col-md-9 col-lg-7 col-xl-5">
    <form method="post" action="<?= _BASE_USERSPACE_URL ?>/profile">
        <h2 class="text-center my-5">Espace salarié</h2>
        <div class="mb-4">
            <label for="workEmail" class="form-label">Email address :</label>
            <input type="email" class="form-control" id="workEmail" name="workEmail" aria-describedby="workEmail">
            <div id="emailHelp" class="form-text">Veuillez entrer votre adresse professionnelle uniquement.</div>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-secondary text-black mt-4" value="login">Se connecter</button>
        </div>
    </form>
</main>

<?php

require_once __DIR__."/privateFooter.php";