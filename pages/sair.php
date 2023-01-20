<?php
session_start();
ob_start();

unset($_SESSION['nome'],$_SESSION['foto']);
$_SESSION['msg'] = '<div class="alert alert-secondary" role="alert">
Sessão Encerrada, nos vemos em breve!
</div>';
header("location:login.php");
