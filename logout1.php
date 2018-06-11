<?php
session_start();
unset($_SESSION['uname']);
unset($_SESSION['email']);
header("Location:adm.php");
?>