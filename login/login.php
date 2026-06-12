<?php

require "dbconfig.php";

// 1. Zorg dat je de ingevoerde gegevens uit het formulier ophaalt
$input_user = $_POST['user'];
$input_pass = $_POST['password'];
//var_dump(password_hash($input_pass, PASSWORD_DEFAULT));
// 2. Zoek de gebruiker in de database
$stmt = $conn->prepare("SELECT * FROM login WHERE `user` = :username");
$stmt->execute(['username' => $input_user]);
$user = $stmt->fetch();

//var_dump(password_verify($input_pass, $user['password']));
// 3. De IF-statement: klopt de gebruiker én het wachtwoord?
if ($user && password_verify($input_pass, $user['password'])) {
    // SUCCES: Gebruiker bestaat en wachtwoord is correct
    session_start();
    $_SESSION['ingelogd'] = true;
    include ("ingelogd.php");
    echo "Welkom, je bent ingelogd!";
} else {
    // FOUT: Gebruiker bestaat niet of wachtwoord is onjuist

    echo "Gebruikersnaam of wachtwoord is onjuist.";
}
?>
