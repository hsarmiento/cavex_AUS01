<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/cavex_AUS01/'.'routes.php');
require_once($aRoutes['paths']['config'].'bs_login.php');

$oLogin = new BSLogin();
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/cavex_AUS01/'.'log_leave_website.php');
$oLogin->Logout();
header('Location: index.php');
?>