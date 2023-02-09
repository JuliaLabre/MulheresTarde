<?php
require '../includes/header.php';
include_once '../includes/conexao.php';


//ta bugando o dropdown e não consigo apertar e finalizar

$totalcompra = 0;
//coloca um if pra verificar se o carrinho está vazio, se estiver vazio mostrar alguma coisa
$sql = "SELECT * FROM carrinho";

$resultado = $conn->prepare($sql);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount()!= 0)){
?>

<h2 class='text-center'>Seu Carrinho</h2>

<form action="finaliza.php" method="post">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php
    while($resposta = $resultado->fetch(PDO::FETCH_ASSOC)){
        extract($resposta);      
?>
            <tr>              
              <td scope="row"><img src="<?php echo $foto ?>" class="produtos"></td>
              <td> <?php echo $nome ?> </td>
              <td><?php echo $valor ?></td>             
              <td>
              <div class="quantity">
                <!-- Fazer a página d edição -->
                <!-- https://pt.stackoverflow.com/questions/471686/atualiza%C3%A7%C3%A3o-de-quantidade-com-update-carrinho-de-compras -->
              <!--<a href="alterarquantidade.php?a=<?//=$id?>&o=plus" class="qty-plus">-->
              <i class="fa-solid fa-minus"></i>
              <!-- </a> -->
              <input type="text" readonly="" name="quantidade_produto" value="<?php echo $quantcompra?>" style=width:45px;>
              <!-- <a href="alterarquantidade.php?a=<?//=$id?>&o=minus" class="qty-plus"> -->
              <i class="fa-solid fa-plus"></i>
              <!-- </a> -->
              </div>
              
            </td> 
              <td><?php echo $total = $quantcompra * $valor; 
              $totalcompra += $total              
              ?></td>                          
              <td>
              <a href="finaliza.php"><button type="submit" class="btn btn-danger" name="excluir" value="<?php echo $codigoproduto ?>">Excluir</button></a>
              </td>
            </tr>
      
<?php
    }      
?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>          
          <td>
             <?php  echo "Total de compras: R$".$totalcompra.",00" ?>
          </td>          
        </tr>   
      
        </tbody>
       </table>
  
<?php 
$_SESSION['totalcompra'] = $totalcompra 
?>

       <input type="submit" class="btn btn-success btn-lg btn-block" name="finalizar" value="Finalizar Compra">
       
       </form>

<?php      
} else{
        echo "Você ainda não tem compras!";
      }

?>
<div class=" container-fluid wrap">
  <div class="row justify-content-end">
<a href="/"><input type="submit" class="btn btn-secondary" value="Voltar para Página Inicial"></a>
</div>
    </div>





<?php
require '../includes/footer.php'
?>