<?php

session_start();

$_SESSION['login'] = $_POST['login'];
$_SESSION['login'] = $_POST['login'];

header('location:site.php');

?>