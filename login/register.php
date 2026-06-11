<?php
//Haal de gegevens op uit je formulier
$gebruikersnaam = $_POST['user'];
$wachtwoord = $_POST['password'];

//Hash het wachtwoord
$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

//Sla het op in je database
//Gebruik een prepared statement om SQL-injectie te voorkomen
$sql = "INSERT INTO login (username, password) VALUES (:username, :password)";
$stmt = $conn->prepare($sql);
$stmt->execute([
    'username' => $gebruikersnaam,
    'password' => $hash
]);

echo "Registratie is voltooid!";