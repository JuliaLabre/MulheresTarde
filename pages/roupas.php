<!-- Cabeçalho -->
<?php
include_once '../includes/conexao.php';
require '../includes/header.php';

$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 6;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT p.codigoproduto,p.nome,p.valor,p.foto
    FROM produto p,categoria c WHERE 
    c.idcategoria = p.idcategoria and
    c.nomecategoria = 'roupas' and
    p.quantidade > 0 LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
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
    <div class="col-md-2 text-center">
      <div class="card bg-light mb-2">
        <img class="card-img-top" src="<?php echo $foto ?>" alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title"><?php echo $nome ?></h5>
        <p class="card-text"> <?php echo $nome ?> - R$<?php echo $valor ?>,00</p> 
        <form method="post" action="carrinho.php">
        <h6>   
        <label>Quant</label>
        <input type="number" name="quantcompra" value="1" style=width:45px;>
        </h6> 
        <input type="hidden" value="<?php echo $codigoproduto ?>" name="codigoproduto">            
        <input type="submit" class="btn btn-primary" name="carrinho" value="Comprar">
        </form>
        </div>
      </div>
  </div> 

  <?php
  }

}
?>
 </div>
 
 <?php
//Contar os registros no banco
     $qtregistro = "SELECT COUNT(codigoproduto) AS registros FROM produto";
     $resultado = $conn->prepare($qtregistro);
     $resultado->execute();
     $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

     //Quantidade de página que serão usadas - quantidade de registros
     //dividido pela quantidade de registro por página
     $qnt_pagina = ceil($resposta['registros'] / $limitereg);

      // Maximo de links      
      $maximo = 2;

      echo "<a href='roupas.php?page=1'>Primeira</a> ";
    // Chamar página anterior verificando a quantidade de páginas menos 1 e 
    // também verificando se já não é primeira página
    for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
        if ($anterior >= 1) {
            echo "  <a href='roupas.php?page=$anterior'>$anterior</a> ";
        }
    }

    //Mostrar a página ativa
    echo "$pag";

    //Chamar próxima página, ou seja, verificando a página ativa e acrescentando 1
    // a ela
    for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
        if ($proxima <= $qnt_pagina) {
            echo "<a href='roupas.php?page=$proxima'>$proxima</a> ";
        }
    }

    echo "<a href='roupas.php?page=$qnt_pagina'>Última</a> ";


?>
</div>
 
<!-- Footer -->
<?php
require '../includes/footer.php'
?>