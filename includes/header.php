<?php
session_start();
ob_start();

if(!isset($_SESSION["quant"])){
  $_SESSION["quant"]=0;
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="../style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="icon" href="/../imagens/favicon.png">

  <title>High Fit</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00ffb6;">
    <a class="navbar-brand" href="../index.php"><i class="fa-solid fa-dumbbell"></i> High Fit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
      aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Página Inicial<span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../pages/sobre.php">Nossa Academia</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Atividades
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../pages/spinn.php">Spinning</a>
            <a class="dropdown-item" href="../pages/jump.php">Jump</a>
            <a class="dropdown-item" href="../pages/hidro.php">Hidroginástica</a>
            <a class="dropdown-item" href="../pages/pilates.php">Pilates</a>

          </div>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
           Nossa Loja
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../pages/roupas.php">Roupas</a>
            <a class="dropdown-item" href="../pages/suplementos.php">Suplementos</a>
            <a class="dropdown-item" href="../pages/diversos.php">Diversos</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../pages/planos.php">Conheça nossos Planos</a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <li>
        <a class="navbar-brand" href="../pages/frmcarrinho.php" >
        <i class="fa-solid fa-bag-shopping fa-fw">
            </i><?php
            if($_SESSION["quant"]>0){
           echo $_SESSION["quant"];}
            ?></a></li> 
           
      <!-- botão de pesquisar comentado, pois achei desnecessário no momento
        
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form> -->

      <!-- Area do cliente  -->
      <li><a class="navbar-brand" href="../pages/login.php"><i class="fa-solid fa-arrow-right-to-bracket fa-fw"></i>Login</a></li>
      </ul>
    </div>
  </nav>
