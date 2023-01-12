<?php
session_start();
ob_start();

unset($_SESSION['nome'],$_SESSION['foto']);
$_SESSION['msg'] = "Sessão Encerrada, nos vemos em breve!";
header("location:login.php");
