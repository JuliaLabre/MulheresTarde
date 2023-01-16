<?php
include_once '../includes/conexao.php';

try{
$dadosmatricula = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dadosmatricula['btncad'])) {
    $sql = "INSERT INTO aluno (nome, telefone, emailaluno, CPF, RG, sexo, datanascimento, CEP, numerocasa, complemento, foto, senha)
    values(:nome, :telefone, :emailaluno,:CPF, :RG, :sexo, :datanascimento, :CEP, :numerocasa, :complemento, :foto, :senha)";

    $salvar= $conn ->prepare($sql);
    $salvar -> bindParam(':nome', $dadosmatricula['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':telefone', $dadosmatricula['telefone'],PDO::PARAM_STR);
    $salvar -> bindParam(':emailaluno', $dadosmatricula['email'],PDO::PARAM_STR);
    $salvar -> bindParam(':CPF', $dadosmatricula['CPF'], PDO::PARAM_STR);
    $salvar -> bindParam(':RG', $dadosmatricula['RG'], PDO::PARAM_STR);
    $salvar -> bindParam(':sexo', $dadosmatricula['sexo'], PDO::PARAM_STR);
    $salvar -> bindParam(':datanascimento', $dadosmatricula['dn'], PDO::PARAM_STR);
    $salvar -> bindParam(':CEP', $dadosmatricula['CEP'], PDO::PARAM_STR);
    $salvar -> bindParam(':numerocasa', $dadosmatricula['num'], PDO::PARAM_INT);
    $salvar -> bindParam(':complemento', $dadosmatricula['comple'], PDO::PARAM_STR);
    $salvar -> bindParam(':foto', $dadosmatricula['foto'], PDO::PARAM_STR);
    $salvar -> bindParam(':senha', $dadosmatricula['senha'], PDO::PARAM_STR);
    $salvar -> execute();


    if ($salvar -> rowCount()){
        echo "Usuário cadastrado com sucesso!";
        unset($dadosmatricula);
    } else {
        echo "Usuário não cadastrado, tente novamente!";
    }
}
}
catch(PDOException $erro){
    echo $erro;
}