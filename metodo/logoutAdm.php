<?php 
session_start();

unset($_SESSION['admUser']);

header("Location: ../administrador/homeadm.php");
?>