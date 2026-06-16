<?php
session_start();

if ($_SESSION['ingelogd'] === true) {
    include("index_view.php");


}else{
    header("Location: ../login/");
    exit;
}


?>