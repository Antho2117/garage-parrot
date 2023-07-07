<?php

require_once "models/Employee.php";
$email = $_POST["email"];
$user = new User($email);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p>Bienvenue sur votre page de profil</p>
    <ul>
        <li><?= $user->getEmail() ?></li>
    </ul>
    <a href="<?= _BASE_URL_ ?>/logout">Se déconnecter</a>
</body>
</html>
