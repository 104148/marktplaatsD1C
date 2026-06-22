<?php

require("../dbconfig.php");
session_start();

if (!empty ($_SESSION["ingelogd"]) && $_SESSION["ingelogd"] === true) {
    $loginbtn = $_SESSION["user"];
    if ($_SESSION['admin'] == 1) {
        $href = '../admin';
    } else {
        $href = '../account';
    }
} else {
    $href = '../login';
    $loginbtn = 'Login';
}

$zoekterm = isset($_GET['zoek']) ? trim($_GET['zoek']) : '';

if ($zoekterm !== '') {
    $stmt = $conn->prepare("SELECT p.*, l.user AS plaatser FROM products p JOIN login l ON p.user_id = l.id WHERE p.title LIKE ? ORDER BY p.created_at DESC");
    $stmt->execute(['%' . $zoekterm . '%']);
} else {
    $stmt = $conn->query("SELECT p.*, l.user AS plaatser FROM products p JOIN login l ON p.user_id = l.id ORDER BY p.created_at DESC");
}
$producten = $stmt->fetchAll();

include("index_view.php");
