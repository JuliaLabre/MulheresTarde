<?php

include_once '../includes/conexao.php';
require '../includes/header.php';

//coloca um if pra verificar se o carrinho está vazio, se estiver vazio mostrar alguma coisa
$sql = "SELECT * FROM carrinho";

$resultado = $conn->prepare($busca);
$resultado->execute();

?>

<h2 class='text-center'>Seu Carrinho</h2>

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

if(($resultado) AND ($resultado->rowCount()!= 0)){
    while($resposta = $resultado->fetch(PDO::FETCH_ASSOC)){
        extract($resposta);
      
      ?>
            <tr>
              <td scope="row"><img src="<?php echo $foto ?>" class="carrinho"></td>
              <td> <?php echo $nome ?> </td>
              <td><?php echo $valor ?></td>             
              <td><?php echo $quantcompra ?></td> 
              <td><?php echo $total = $quantcompra * $valor ?></td>            
              <td>
              <?php echo "<a href=''>"; ?>
              <input type="submit" class="btn btn-primary" name="editar" value="Editar">
              </td>
              <td>
              <?php echo "<a href=''>" ?>
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



?>