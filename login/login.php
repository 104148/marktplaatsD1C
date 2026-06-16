<?php
session_start(); // Eén keer bovenaan, dat is voldoende!
require "../dbconfig.php";


$input_user = $_POST['user'];
$input_pass = $_POST['password'];

// 1. Haal in EEN query de gebruiker op. 
// We selecteren specifiek de kolommen die we nodig hebben.
$stmt = $conn->prepare("SELECT id, user, password, admin FROM login WHERE user = :username");
$stmt->execute(['username' => $input_user]);
$user = $stmt->fetch();

// 2. De IF-statement: klopt de gebruiker én het wachtwoord?
if ($user && password_verify($input_pass, $user['password'])) {
    
    // SUCCES: Gebruiker bestaat en wachtwoord is correct
    $_SESSION['ingelogd'] = true;
    $_SESSION['user'] = $user['user'];
    
    // HET BELANGRIJKSTE: 
    // Sla de admin-status direct op in de sessie (het 'paspoort' van de gebruiker)
    $_SESSION['admin'] = $user['admin']; 

    header("Location: ../index.php");
    exit;
} else {
    // FOUT: Gebruiker bestaat niet of wachtwoord is onjuist
    echo "Gebruikersnaam of wachtwoord is onjuist.";
}
?>