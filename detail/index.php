<?php

require("../dbconfig.php");
session_start();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: ../");
    exit;
}

$stmt = $conn->prepare("SELECT p.*, l.user AS plaatser FROM products p JOIN login l ON p.user_id = l.id WHERE p.id = ?");
$stmt->execute([$_GET['id']]);
$product = $stmt->fetch();

if (!$product) {
    header("Location: ../");
    exit;
}

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

include("index_view.php");
