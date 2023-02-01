<!--parte administrativa, cadastrar alunos e etc...-->

<?php
require_once '../includes/menuadmin.php';
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
<a href=""><button type="submit" class="btn btn-outline-dark">Editar meu perfil</button></a>
<hr>

</div>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>