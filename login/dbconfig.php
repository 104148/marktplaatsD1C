<?php


$db = 'login.sqlite';
try {
    $conn = new PDO("sqlite:$db");
    echo 'Connected to database! <br><br>';
} catch (PDOException $e) {
    echo $e->getMessage();
}

//Foutmeldingen zichtbaar maken
ini_set('display_errors', 1);
error_reporting(E_ALL);
