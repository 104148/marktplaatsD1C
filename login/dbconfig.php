<?php


$db = 'login.sqlite';
try {
    $conn = new PDO("sqlite:$db");
//    echo 'Connected to database! <br><br>';
    echo "<script>console.log('Connected to database!');</script>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

//Foutmeldingen zichtbaar maken
ini_set('display_errors', 1);
error_reporting(E_ALL);
