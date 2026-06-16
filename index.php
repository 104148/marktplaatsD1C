<?php


$loginbtn = "";

if ($_SESSION["ingelogged"] === "true") {
    $loginbtn = '<?= $_SESSION["user" ?>';
} else {
$loginbtn = '                            <div class="col-md-3"><a class="dropdown-item text-center rounded bg-light py-2" href="./login">Login</a></div>
                            <div class="col-md-3"><a class="dropdown-item text-center rounded bg-light py-2" href="#">Register</a></div>';
}
include_once("index_view.php");

?>