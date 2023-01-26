<?php
include_once '../includes/conexao.php';
require '../includes/header.php';

session_start();
ob_start();

$id = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);


if (empty($id)) {
    $_SESSION['msg'] = "Erro: Aluno não encontrado!";
    header("Location: relalunos.php");
    exit();
}
/* Exclusão permanente
Quando o aluno está ligado a alguma outra tabela, vai dar erro porque por padrão a chave primaria vem com essa restrição. 
tem que colocar no modo cascade para poder fazer exclusão ou alteração em cascata (cascade)*/
//$sql =  "DELETE FROM aluno WHERE matricula = $id"; 

// Mudança de status
$sql = "UPDATE aluno set status = 'I' WHERE matricula = $id LIMIT 1";
           
$resultado= $conn->prepare($sql); 
$resultado->execute();

if(($resultado) AND ($resultado->rowCount()!= 0)){

    echo  "<script>
    alert('Aluno excluido com sucesso!!');
    parent.location = 'relalunos.php';
    </script>";

}else{

    echo  "<script>
    alert('Erro: Tente novamente!!');
    parent.location = 'relalunos.php';
    </script>";
}



?>