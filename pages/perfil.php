<?php
include_once '../includes/conexao.php';
include_once '../includes/header.php'

?>

<!-- Conteudo -->
<div class="wrap">
<h2 class='text-center'>Área do Aluno</h2>
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
<li>Data de Nascimento: <?php echo $_SESSION['datanascimento'] ?></li>
</ul>
</div>
</div>

<!-- Colocar as opções de aulas e etc -->

<?php
if(!isset($_SESSION['nome'])){
  $_SESSION['msg'] = "Erro: Necessário realizar login";
  header("Location: login.php");
}
?>

<a href=sair.php><button type="submit">Sair</button></a>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>