<?php

//require_once __DIR__ . "/lib/config.php";
require_once __DIR__."/privateHeader.php";
//require_once __DIR__ . "/lib/tools.php";

//$pdo = getPDO();
?>

<main class="container-fluid d-flex flex-column flex-md-wrap col-md-6 col-lg-5 col-xl-4 mt-4">
    <h3 class="text-center">Bonjour Mr Parrot, nous sommes le <?= date("d-m-Y") ?>.</h3>
    <div class="dropdown d-flex justify-content-center">
        <button
            type="button"
            class="btn btn-success text-white my-3 dropdown-toggle col-12"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            Ajouter un employé
        </button>
        <div class="dropdown-menu col-12 bg-secondary">
        <form method="post" class="d-flex flex-column align-items-center">
            <label for="birthdate" class="form-label">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" placeholder="date de naissance"><br>
            <span>Sexe :</span>
            <div class="d-flex align-items-center">
                <label for="mister" class="form-label">Monsieur
                    <input type="radio" id="mister" name="gender" value="monsieur">
                </label>
                <label for="miss" class="form-label">Madame
                    <input type="radio" id="miss" name="gender" value="madame">
                </label>
            </div>
            <label for="garage" class="form-label">Identifiant garage :</label>
            <input type="text" id="garage" name="garage" value="1"><br>
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="mot de passe"><br>
            <label for="role" class="form-label">Rôle :</label>
            <input type="text" id="role" name="role" value="employee" placeholder="role"><br>
            <label for="firstname" class="form-label">Prénom :</label>
            <input type="text" id="firstname" name="firstname" placeholder="prénom du salarié"><br>
            <label for="lastname" class="form-label">Nom :</label>
            <input type="text" id="lastname" name="lastname" placeholder="nom du salarié"><br>
            <label for="email" class="form-label">Email professionnel :</label>
            <input type="text" id="email" name="email" placeholder="email professionnel">
            <button
                type="submit"
                class="btn btn-secondary border-0 bg-info text-white mt-2"
            >
                Enregistrer le salarié
            </button>
        </form>
        </div>
    </div>
    <button
        type="button"
        class="btn btn-success text-white"
        data-bs-toggle="modal"
        data-bs-target="#inProgressModal"
    >
        Supprimer un employé
    </button>
    <button type="button" class="btn btn-secondary my-3 border-0 bg-info text-white">
        <a href="<?= _BASE_USERSPACE_URL ?>/profile" class="text-white">Retour</a>
    </button>
</main>

<?php

require_once __DIR__."/privateFooter.php";