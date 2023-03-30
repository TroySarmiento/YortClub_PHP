<?php
include 'config.php';


session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
session_abort();
header('Location:/Kodego_MP2/index.php');
?>