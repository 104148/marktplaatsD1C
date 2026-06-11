<?php
require 'dbconfig.php';

$query = "SELECT * FROM login";
$stmt = $conn->prepare($query);
$stmt->execute();

//Haal alle resultaten uit de array op
$resultaten = $stmt->fetchAll();

//Aantal resultaten tellen
$aantalRijen = count($resultaten);


include 'index_view.php';