<?php
include_once '../includes/conexao.php';

try{
$dadosmatricula = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dadosmatricula['btncad'])) {

    $vazio = false;

    $dadosmatricula = array_map('trim', $dadosmatricula);
    if (in_array("", $dadosmatricula)) {
        $vazio = true;
        echo  "<script>
            alert('Preencher todos os campos!!!');
            parent.location = 'matricula.php';
            </script>";
   

    } else if(!filter_var($dadosmatricula['email'], FILTER_VALIDATE_EMAIL)) {
        $vazio = true;
        echo  "<script>
            alert('Informe um e-mail válido!!!');
            parent.location = 'matricula.php';
            </script>";
    }

    if (!$vazio) {

    $senha = password_hash($dadosmatricula['senha'], PASSWORD_DEFAULT);   


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
    $salvar->bindParam(':senha', $senha, PDO::PARAM_STR);
    $salvar -> execute();


    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Usuário cadastrado com sucesso!!');
        parent.location = 'matricula.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Usuário não cadastrado!');
        parent.location = 'matricula.php';
        </script>";
        
    }

}
}
}
catch(PDOException $erro){
    echo $erro;

}