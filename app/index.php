<?php

$host = "mysql"; // Le host est le nom du service, présent dans le docker-compose.yml
$dbname = "my-wonderful-website";
$charset = "utf8";
$port = "3306";
?>

<html>
<head>
    <title>Drenthe College docker web server</title>
</head>
<body>
    
    <form action="Form-register.php" method="POST">
        <p for="username">Gebruikersnaam:</p><br>
        <input type="text" id="username" name="username" required><br><br>

        <p for="password">Wachtwoord:</p><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Registreren">
    </form>
</body>
</html>

</body>
</html>
