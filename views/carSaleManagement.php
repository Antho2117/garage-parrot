<?php
//require_once __DIR__ . "/lib/config.php";
require_once __DIR__."/privateHeader.php";
var_dump($_FILES);

    if (isset($_POST["send"])) {

        $imgName = $_FILES["upload"]["name"];
        $imgTempName = $_FILES["upload"]["tmp_name"];
        $error = $_FILES["upload"]["error"];
        $directory = _CARS_IMAGES_UPLOADS_.$imgName;
        var_dump($directory);
        var_dump(move_uploaded_file($imgTempName, $directory));

    }


?>

<main class="">
    <form method="post" enctype="multipart/form-data">
        <label for="upload">Envoyer une image :</label>
        <input type="file" name="upload" id="upload">
        <button type="submit" name="send" value="send">Envoyer</button>
    </form>
    <button type="button" class="btn btn-secondary my-3 border-0 bg-info text-white">
        <a href="<?= _BASE_USERSPACE_URL ?>/profile" class="text-white">Retour</a>
    </button>
</main>


<?php

require_once __DIR__."/privateFooter.php";