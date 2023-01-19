<!--parte administrativa, cadastrar alunos e etc...-->

<?php
require_once '../includes/header.php';
require_once '../includes/conexao.php';

session_start();
ob_start();

?>
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
<div class="wrap">
<h2 class='text-center'>Olá, <?php echo $_SESSION['nome']?>! Seja bem 
<?php 
if($_SESSION['sexo'] == 'M'){
   echo 'vindo'; 
  }else{
     echo 'vinda';
    }     
     ?>
   </h2>
   <div class="perfil">
<img src="<?php echo $_SESSION['foto'] ?>">
<ul>
<li>Nome: <?php echo $_SESSION['nome'] ?></li>
<li><?php echo $_SESSION['cargo'] ?></li>
</ul>
</div>
</div>
<hr>
<a href="../pages/matricula.php"><button type="submit" class="btn btn-outline-dark">Cadastro de Aluno</button></a>
<a href="../pages/relalunos.php"><button type="submit" class="btn btn-outline-dark">Relatório de Alunos</button></a>
<hr>

</div>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>