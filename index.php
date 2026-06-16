<?php

session_start();

$loginbtn = "";
$href = "";

if ($_SESSION["ingelogd"] === true) {
    $loginbtn = $_SESSION["user"];
    
    if ($_SESSION['admin'] != 1) {
        $href = 'admin';
    } else {
            $href = 'account';
    
    }

} else {
$loginbtn = '          ';
}
include_once("index_view.php");

?>
