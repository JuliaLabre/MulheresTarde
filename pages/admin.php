<!--parte administrativa, cadastrar alunos e etc...-->

<?php
require_once '../includes/header.php';
require_once '../includes/conexao.php';


session_start();
ob_start();
//tem que colocar que só pode acessar logado


?>
<div class="wrap">

<h2 class='text-center'>Seja bem 
    <?php 
      if($_SESSION['sexo'] == 'M'){
               echo 'vindo'; 
      }else{
              echo 'vinda';
       }     
     ?>, 
     <?php echo $_SESSION['cargo'] ?> 
          <?php echo $_SESSION['nome'] ?>
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
<a href="matricula.php"><button type="submit" class="btn btn-outline-dark">Cadastro de Aluno</button></a>
<a href="relalunos.php"><button type="submit" class="btn btn-outline-dark">Relatório de Alunos</button></a>
<a href="formproduto.php"><button type="submit" class="btn btn-outline-dark">Cadastrar Produtos</button></a>
<a href="relproduto.php"><button type="submit" class="btn btn-outline-dark">Editar Produtos</button></a>
<hr>

</div>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>