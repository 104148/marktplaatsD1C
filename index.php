<?php

session_start();
require("dbconfig.php");

if (!empty ($_SESSION["ingelogd"]) && $_SESSION["ingelogd"] === true) {
    $loginbtn = $_SESSION["user"];
    
    if ($_SESSION['admin'] == 1) {
        $href = 'admin';
    } else {
        $href = 'account';
    }

} else {
    $href = './login';
    $loginbtn = 'Login';
}

$stmt = $conn->query("SELECT p.*, l.user AS plaatser FROM products p JOIN login l ON p.user_id = l.id ORDER BY p.created_at DESC");
$producten = $stmt->fetchAll();

$stmt_grid = $conn->query("SELECT p.*, l.user AS plaatser FROM products p JOIN login l ON p.user_id = l.id ORDER BY p.created_at DESC LIMIT 6");
$grid_producten = $stmt_grid->fetchAll();

include_once("index_view.php");

?>
