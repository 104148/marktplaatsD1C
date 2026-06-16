<?php
// ... je sessie en admin-check ...
require("../dbconfig.php");
session_start();


if (!isset($_SESSION['ingelogd']) || $_SESSION['admin'] != 1) {
    header("Location: ../login/");
    exit;
}else {
// 1. Haal alle gebruikers op
$stmt = $conn->query("SELECT id, user, admin FROM login");
$gebruikers = $stmt->fetchAll();

// 2. Haal de invite code op
$stmt_settings = $conn->query("SELECT value FROM site_settings WHERE key_name = 'invite_code'");
$invite_code = $stmt_settings->fetchColumn();
include("index_view.php");
}
?>