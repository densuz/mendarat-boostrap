<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['username']='';
$_SESSION['nama']='';
$_SESSION['email']='';
$_SESSION['level']='';

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['level']);

session_unset();
session_destroy();

// mengalihkan halaman ke halaman Index
header('Location:../index.php');

?>
