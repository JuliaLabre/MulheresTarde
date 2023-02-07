<?php
require_once '../includes/conexao.php';

session_start();
ob_start();

$_SESSION["quant"]+=1;

$cesta = filter_input_array(INPUT_POST,FILTER_DEFAULT);

$codigoproduto = $cesta["codigoproduto"];
$quantcompra = $cesta["quantcompra"];

$sql = "SELECT codigoproduto, nome, valor, quantidade, foto FROM produto
WHERE codigoproduto = $codigoproduto LIMIT 1";

//tava chamando a variavel errada no prepare
$resultado = $conn->prepare($sql);
$resultado->execute(); 

if(($resultado) AND ($resultado->rowCount()!= 0)){
    $linha=$resultado->fetch(PDO::FETCH_ASSOC);
    extract($linha);
    var_dump($linha);

    if($quantidade<$quantcompra){
        //o ideal aqui é voltar pro carrinho com uma notificação e a opção de excluir do carrinho
        header("Location:index.php");

    } else{
        $sql2= "INSERT INTO carrinho (codigoproduto,nome,quantcompra,valor,foto)
        VALUES(:codigoproduto,:nome,:quantcompra,:valor,:foto)";

        $salvar2 = $conn->prepare($sql2);
        $salvar2->bindParam(':codigoproduto',$codigoproduto, PDO::PARAM_INT);
        $salvar2->bindParam(':nome',$nome, PDO::PARAM_STR);
        $salvar2->bindParam(':quantcompra',$quantcompra, PDO::PARAM_INT);
        $salvar2->bindParam(':valor',$valor, PDO::PARAM_STR);
        $salvar2->bindParam(':foto',$foto, PDO::PARAM_STR);
        $salvar2->execute();

    }
}


?>