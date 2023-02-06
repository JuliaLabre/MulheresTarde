<?php

include_once '../includes/conexao.php';
require '../includes/menuadmin.php';
//ta dando erro
//definir quantos registros por vez queremos exibir por página
$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pag = (!empty($pagatual)) ? $pagatual : 1;

$limitereg = 5;

$inicio = ($limitereg * $pag) - $limitereg;

//se quiser buscar mais dados só incluir 
$busca = "SELECT  p.codigoproduto, p.nome, p.valor,p.tamanho,p.cor,p.quantidade,p.foto,c.nomecategoria
          FROM produto p, categoria c
          WHERE quantidade >0 AND
          c.idcategoria = p.idcategoria
          LIMIT $inicio , $limitereg";

$resultado = $conn->prepare($busca); 
$resultado->execute();

?>

<h2 class='text-center'>Produtos em Estoque</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Cor</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Categoria</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php

if(($resultado) AND ($resultado->rowCount()!= 0)){
  while($resposta = $resultado->fetch(PDO::FETCH_ASSOC)){

  extract($resposta);

?>
      <tr>
        <td scope="row"><a title="Editar foto" <?php echo "href='edftprod.php?idproduto=$codigoproduto'"?> ><img src="<?php echo $foto ?>" class="produtos"></a></td>
        <td> <?php echo $nome ?> </td>
        <td><?php echo $valor ?></td>
        <td><?php echo $tamanho ?></td>
        <td><?php echo $cor ?></td>
        <td><?php echo $quantidade ?></td>
        <td><?php echo $nomecategoria ?></td>
        <td>
        <?php echo "<a href='editprod.php?idproduto=$codigoproduto'>"; ?>
        <input type="submit" class="btn btn-primary" name="editar" value="Editar">
        </td>
        <td>
        <?php echo "<a href='excluirprod.php?idproduto=$codigoproduto'>" ?>
        <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
        </td>
      </tr>

  <?php
  }

  ?>

  </tbody>
 </table>
 <?php

}

else{
  echo "Nenhum registro encontrado!";
}

//Contar os registros no BD

$qtregistro = "SELECT COUNT(codigoproduto) AS registros FROM produto";
$resultado = $conn->prepare($qtregistro);
$resultado->execute();
$resposta = $resultado->fetch(PDO::FETCH_ASSOC);

//Quantidade de página que serão usadas - quantidade de registros
//dividido pela quantidade de registro por página

$qnt_pagina = ceil($resposta['registros'] / $limitereg); //ceil retorna um valor inteiro

//Máximo de links que aparecem na página
$maximo = 2;

echo "<a href='relproduto.php?page=1'> Primeira </a> ";


//variavel $pag que foi criada na linha 7 para receber página atual, ela diminui a anterior, inicia no número, se tiver 
//na 3 diminui 1 e volta pra página 2
//Chamar página anterior verificando a qntd de pág menos 1 e verifica se já não é a primeira pág
for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
  if ($anterior >= 1) {
      echo "<a href='relproduto.php?page=$anterior'>$anterior</a> ";
  }
}

//página que aparece no url, ativa 
echo "$pag";

//chama próxima página, ou seja, verificando a página ativa e acrescentando mais 1
for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
  if ($proxima <= $qnt_pagina) {
      echo "<a href='relproduto.php?page=$proxima'>$proxima</a> ";
  }
}

echo "<a href='relproduto.php?page=$qnt_pagina'> Última </a> ";

?>

        
     
 
