<?php

require("../dbconfig.php");
session_start();

if (!isset($_SESSION['ingelogd']) || $_SESSION['ingelogd'] !== true) {
    header("Location: ../login/");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $bio = trim($_POST['bio']);
    $price = trim($_POST['price']);
    $user_id = $_SESSION['user_id'];

    if (empty($title) || empty($bio) || empty($price) || empty($_FILES['photo']['name'])) {
        $error = "Vul alle velden in.";
    } elseif (!is_numeric($price) || $price <= 0) {
        $error = "Voer een geldige prijs in.";
    } else {
        $target_dir = "../uploads/";
        $filename = time() . "_" . basename($_FILES["photo"]["name"]);
        $target_file = $target_dir . $filename;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (!in_array($imageFileType, $allowed)) {
            $error = "Alleen JPG, JPEG, PNG, GIF & WEBP bestanden zijn toegestaan.";
        } elseif ($_FILES["photo"]["size"] > 5000000) {
            $error = "Bestand is te groot (max 5MB).";
        } elseif (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("INSERT INTO products (title, photo, bio, price, user_id) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$title, "uploads/" . $filename, $bio, $price, $user_id]);
            $success = "Advertentie geplaatst!";
            header("refresh:2;url=../");
        } else {
            $error = "Er ging iets mis bij het uploaden.";
        }
    }
}

include("index_view.php");
