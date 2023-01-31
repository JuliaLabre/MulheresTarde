<!-- Cabeçalho -->
<?php
include_once '../includes/conexao.php';
require '../includes/header.php';

session_start();
ob_start();

$produtos = "SELECT * FROM produto WHERE idcategoria = 1 ";
           
$resultado= $conn->prepare($produtos); 
$resultado->execute();

?>
<!-- Conteudo -->
<div class="wrap">
<h2 class='text-center'>Roupas</h2>

<div class="row">
<?php

if(($resultado) AND ($resultado->rowCount()!= 0)){
  while($resposta = $resultado->fetch(PDO::FETCH_ASSOC)){

  extract($resposta);

?>


    <div class="col-md-3">
      <div class="card bg-light mb-3">
        <img class="card-img-top" src="<?php echo $foto ?>" alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title"><?php echo $nome ?></h5>
        <p class="card-text"> <?php echo $nome ?> - R$<?php echo $valor ?>,00</p>         
        <input type="submit" class="btn btn-primary"  value=" Comprar">
        </div>
      </div>
  </div> 

  <?php
  }

}
?>
 </div>
 
<!-- Footer -->
<?php
require '../includes/footer.php'
?>