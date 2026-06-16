<?php
session_start();
$_SESSION["ingelogd"] = "false";
// 1. Maak de sessie-array leeg (verwijder alle gegevens zoals user, admin status, etc.)
$_SESSION = array();

// 2. Als er een sessie-cookie is, verwijder deze dan ook uit de browser
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
$_SESSION['ingelogd'] = false;
// 3. Vernietig de sessie op de server
session_destroy();

// 4. Stuur de gebruiker terug naar het inlogscherm
header("Location: ../login/");
exit;
?>