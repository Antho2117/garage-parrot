<?php
require_once __DIR__."/lib/config.php";
require_once __DIR__."/templates/privateHeader.php";
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
</main>


<?php

require_once __DIR__."/templates/privateFooter.php";