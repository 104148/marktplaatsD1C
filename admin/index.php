<?php

require("../dbconfig.php");
session_start();

if (!isset($_SESSION['ingelogd']) || $_SESSION['admin'] != 1) {
    header("Location: ../login/");
    exit;
}

if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET['delete_id']]);
    header("Location: ../admin/");
    exit;
}

$stmt = $conn->query("SELECT id, user, admin FROM login");
$gebruikers = $stmt->fetchAll();

$stmt_settings = $conn->query("SELECT value FROM site_settings WHERE key_name = 'invite_code'");
$invite_code = $stmt_settings->fetchColumn();

$stmt_producten = $conn->query("SELECT p.*, l.user AS plaatser FROM products p JOIN login l ON p.user_id = l.id ORDER BY p.created_at DESC");
$producten = $stmt_producten->fetchAll();

include("index_view.php");

?>
