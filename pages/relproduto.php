<?php

include_once '../includes/conexao.php';
include '../includes/header.php';

//definir quantos registros por vez queremos exibir por página
$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pag = (!empty($pagatual)) ? $pagatual : 1;

$limitereg = 3;

$inicio = ($limitereg * $pag) - $limitereg;

//se quiser buscar mais dados só incluir 
$busca = "SELECT * FROM produto ";

$resultado = $conn->prepare($busca); 
$resultado->execute();
?>

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
        <p class="card-text"> <?php echo $nome ?> - R$<?php echo $valor ?></p>         
        <?php echo "<a href='editprod.php?idproduto=$codigoproduto'>"; ?>
        <input type="submit" class="btn btn-primary" value="Editar"> </a>
        <?php echo "<a href='excluirprod.php?idproduto=$codigoproduto'>" ?>
        <input type="submit" class="btn btn-danger" name="excluir" value="Excluir"> </a>
        </div>
      </div>
  </div> 

  <?php
  }

}


        
     
 
