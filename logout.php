<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
header("Location:form1.php");
?>