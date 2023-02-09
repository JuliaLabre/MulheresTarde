<?php
session_start();
ob_start();

include_once '../includes/conexao.php';


if($_POST["excluir"]){
    $codigoproduto = $_POST["excluir"];
    $sqlexcluir = "DELETE FROM carrinho WHERE codigoproduto = $codigoproduto";
    $resulexcluir = $conn -> prepare($sqlexcluir);
    $resulexcluir->execute();
    $_SESSION["quant"]-=1;
} else{
    if(!isset($_SESSION['nome'])){
        $_SESSION['carrinho'] = true;
        echo "<script>
        alert('Faça Login para finalizar suas compras!');
        parent.location = 'login.php';
        </script>";
    } else{
        //acessar metodo de pagamento desejado
        $data = date('y-m-d');
        $valor = $_SESSION['totalcompra'];
        $matricula = $_SESSION['matricula'];
        
        $sqlvenda = "INSERT INTO venda(data,valor,matricula)VALUES(:data,:valor,:matricula)";
        $salvarvenda = $conn->prepare($sqlvenda);
        $salvarvenda->bindParam(':data',$data, PDO::PARAM_STR);
        $salvarvenda->bindParam(':valor',$valor, PDO::PARAM_STR);        
        $salvarvenda->bindParam(':matricula', $matricula, PDO::PARAM_STR);        
        $salvarvenda->execute();

        $venda ="SELECT LAST_INSERT_ID()";
        $resulvenda=$conn->prepare($venda);
        $resulvenda->execute();

        $linhavenda = $resulvenda->fetch(PDO::FETCH_ASSOC);

        $idvenda = ($linhavenda['LAST_INSERT_ID()']);

        $busca = "SELECT * FROM carrinho";
        $resulbusca=$conn->prepare($busca);
        $resulbusca->execute();       
       

        if(($resulbusca) && ($resulbusca->rowCount()!=0)){
            while ($linha = $resulbusca->fetch(PDO::FETCH_ASSOC)) {
                extract($linha);
                //var_dump($linha);

                $sqlitem = "INSERT INTO item (idvenda, codigoproduto, quantidade, valor)
                VALUES(:idvenda,:codigoproduto,:quantidade,:valor)";
                $salvaritem=$conn->prepare($sqlitem);
                $salvaritem->bindParam(':codigoproduto', $codigoproduto, PDO::PARAM_INT);
                $salvaritem->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
                $salvaritem->bindParam(':quantidade', $quantcompra, PDO::PARAM_INT);
                $salvaritem->bindParam(':valor', $valor, PDO::PARAM_STR);
                $salvaritem->execute();

                //atualiza o estoque
                $estoque = "UPDATE produto SET quantidade = (quantidade - $quantcompra) WHERE codigoproduto = $codigoproduto";
                $atualiza = $conn -> prepare($estoque);
                $atualiza->execute();

                $sqllimpa = "DELETE FROM carrinho";
                $limpa = $conn->prepare($sqllimpa);
                $limpa->execute();
                $_SESSION['quant'] = 0;
                echo "<script>
                alert('Obrigado por sua compra!!');
                parent.location = '../index.php';
                </script>";

                unset($_SESSION['carrinho']);


            }

        }
        
      
    }

}

?>