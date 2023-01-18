<?php

include_once '../includes/conexao.php';

//definir quantos registros por vez queremos exibir por página
$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pag = (!empty($pagatual)) ? $pagatual : 1;

$limitereg = 3;

$inicio = ($limitereg * $pag) - $limitereg;

//se quiser buscar mais dados só incluir 
$busca = "SELECT CPF, nome, telefone, emailaluno FROM aluno LIMIT $inicio , $limitereg";

$resultado = $conn->prepare($busca); 
$resultado->execute();

if (($resultado) AND ($resultado->rowCount() != 0)){
    echo "<h1>Relatório de Alunos</h1><br>";
    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        //var_dump($linha);

//extract linha retorna os dados que estamos solicitando com variáveis, depois posso fazer com html no lugar do echo
        extract($linha);
        echo "<br> CPF = " . $CPF . "<br>";
        echo "nome = " . $nome . "<br>";
        echo "telefone = " . $telefone . "<br>";
        echo "emailaluno = " . $emailaluno . "<br>";
        
    }

}else{
    echo "Nenhum registro encontrado!";
}

?>

