<?php
require '../dbconfig.php';

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
<div class="form-floating">
  <input type="text" class="form-control" placeholder="" name="user" id="user" required>
  <label for="user">Gebruikersnaam</label>
</div><br>

<div class="form-floating">
  <input type="password" class="form-control wachtwoord-veld" placeholder="" name="password" id="password" required>
  <label for="password">Wachtwoord</label>
</div><br>

    <button type="submit" class="btn btn-primary" id="knop">Login</button>
</form>';

//----------------------------------------------------------------------------------

$register = '
<title>Registreer</title>
<form action="register.php" method="post">
    <h1>Registreer</h1>

    <div class="form-floating">
  <input type="text" class="form-control" placeholder="" name="user1" id="user" required>
  <label for="user1">Gebruikersnaam</label>
</div><br>


<div class="form-floating">
  <input type="password" class="form-control wachtwoord-veld" placeholder="" name="password1" id="password1" required>
  <label for="password1">Wachtwoord</label>
</div><br>

<div class="form-floating">
  <input type="password" class="form-control wachtwoord-veld" placeholder="" name="adpassword" id="adpassword" required>
  <label for="adpassword">Admin Wachtwoord</label>
</div><br>


    <button type="submit" class="btn btn-primary" id="knop">Registreer</button>
</form>';

if (isset($_POST["wissel_knop"]) && $_POST["wissel_knop"] === "Registreer") {
    // Als er op 'Registreer' werd geklikt, tonen we het registreerformulier
    // en zetten we de knoptekst voor de volgende keer op 'Login'
    $show = $register;
    $knoptxt = "Login";
    $knop_extra = "Al wel een account?";
} else {
    // STANDAARD (eerste keer laden) en als er op 'Login' werd geklikt:
    // we tonen het loginformulier en zetten de knoptekst op 'Registreer'
    $show = $login;
    $knoptxt = "Registreer";
    $knop_extra = "Nog geen account?";
}


include 'index_view.php';

//test