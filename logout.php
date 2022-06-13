



<?php session_start();
include "header.php";
echo"<h1>  Logout page </h1> ";

unset($_SESSION['is_valid']);

session_destroy();

header('Location:client_login.php');

?>