<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="<?php echo _BASE_URL_."/profile" ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="login">
    </form>
    <br>
</body>
</html>
