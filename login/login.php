<?php
// 1. Zorg dat je de ingevoerde gegevens uit het formulier ophaalt
$input_user = $_POST['username'];
$input_pass = $_POST['password'];

// 2. Zoek de gebruiker in de database
$stmt = $conn->prepare("SELECT * FROM users WHERE username = :user");
$stmt->execute(['user' => $input_user]);
$user = $stmt->fetch();

// 3. De IF-statement: klopt de gebruiker én het wachtwoord?
if ($user && password_verify($input_pass, $user['password'])) {
    // SUCCES: Gebruiker bestaat en wachtwoord is correct
    session_start();
    $_SESSION['ingelogd'] = true;
    echo "Welkom, je bent ingelogd!";
} else {
    // FOUT: Gebruiker bestaat niet of wachtwoord is onjuist
    echo "Gebruikersnaam of wachtwoord is onjuist.";
}
?>