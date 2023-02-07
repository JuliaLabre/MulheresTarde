<?php
session_start();
ob_start();

include_once '../includes/conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$codigoproduto = $dados["codigo"];

if(!empty($dados["excluir"])){

    $sqlexcluir = "DELETE FROM carrinho WHERE codigoproduto =$codigoproduto";
    $resulexcluir = $conn -> prepare($sqlexcluir);
    $resulexcluir->execute();
    $_SESSION["quant"]-=1;
} else{
    if(!isset($_SESSION['nome'])){
        $_SESSION['carrinho'] = true;
        echo "<script>
        alert('Faça Login pa finalizar suas compras!');
        parent.location = 'login.php';
        </script>";
    } else{
        //acessar metodo de pagamento desejado
        $data = date('y-m-d');
        $valor = $_SESSION['totalcompra'];
        $matricula = $_SESSION['matricula'];



        $sqlvenda = "INSERT INTO venda (data,valor,matricula)
        VALUES(:data,:valor,:matricula)";
        $salvarvenda = $conn->prepare($sqlvenda);
        $salvarvenda->bindParam(':data',$data, PDO::PARAM_STR);
        $salvarvenda->bindParam(':valor',$valor, PDO::PARAM_STR);
        $salvarvenda->bindParam(':matrcula',$matricula, PDO::PARAM_STR);
        $salvarvenda->execute();
    }

}

?>