<?php
require 'dbconfig.php';

$query = "SELECT * FROM login";
$stmt = $conn->prepare($query);
$stmt->execute();

//Haal alle resultaten uit de array op
$resultaten = $stmt->fetchAll();

//Aantal resultaten tellen
$aantalRijen = count($resultaten);

$login = '
<title>Login</title>
<form action="login.php" method="post">
    <h1>Login</h1>
<label for="user">Gebruikersnaam</label><br>
<input type="text" id="user" name="user"><br><br>


    <label for="password">Wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Verzenden">
</form>';
//----------------------------------------------------------------------------------
$register = '
<title>Registreer</title>
<form action="register.php" method="post">
    <h1>Registreer</h1>
    <label for="user1">Gebruikersnaam</label><br>
    <input type="text" id="user1" name="user1"><br><br>


    <label for="password1">Wachtwoord:</label><br>
    <input type="password" id="password1" name="password1"><br><br>

    <input type="submit" value="Verzenden">
</form>';

if (isset($_POST["wissel_knop"]) && $_POST["wissel_knop"] === "Registreer") {
    // Als er op 'Registreer' werd geklikt, tonen we het registreerformulier
    // en zetten we de knoptekst voor de volgende keer op 'Login'
    $show = $register;
    $knoptxt = "Login";
} else {
    // STANDAARD (eerste keer laden) en als er op 'Login' werd geklikt:
    // we tonen het loginformulier en zetten de knoptekst op 'Registreer'
    $show = $login;
    $knoptxt = "Registreer";
}


include 'index_view.php';