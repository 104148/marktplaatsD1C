<?php

session_start();



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
include_once("index_view.php");

?>
