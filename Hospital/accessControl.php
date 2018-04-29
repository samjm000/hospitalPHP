<?php // accesscontrol.php
include_once 'common.php';
include_once 'db.php';

session_start();

$username = isset($_POST['uid']) ? $_POST['uid'] : $_SESSION['uid'];
$password = isset($_POST['pwd']) ? $_POST['pwd'] : $_SESSION['pwd'];


if(!isset($uid)) { header('Location:/login.php'); }