<?php
include_once '../includes/conexao.php';

try{
$dadosmatricula = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica a foto para o salvamento
if(isset($_FILES['foto'])){
    $arquivo = ($_FILES['foto']);
    var_dump($arquivo);
    if($arquivo['error']){
        echo 'Erro ao carregar arquivo';
        header("Location: matricula.php");
    }
   
    // o erro ao carregar a foto era o caminho, como estou em pastas, precisei acrescentar os ../
    $pasta = "../fotos/"; //Salva nessa pasta    
    $nomearquivo = $arquivo['name']; //pega o nome do arquivo da array que é criada automaticamente no envio do formulario    
    $novonome = uniqid(); //nome unico, para não haver duplicidade e substituição  
    $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION)); //Coloca o nome do arquivo com a sua extensão
    
    if($extensao != "jpg" && $extensao != "png" && $extensao != "webp"){
        echo "<script>
        alert('Essa extensão de arquivo não é aceita');
        </script>";

    } else {
        
        $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao );

        if($salvaimg){
            $path = $pasta.$novonome.".".$extensao;
        }
       
    }

}


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
    values(:nome, :telefone, :emailaluno,:CPF, :RG, :sexo, :datanascimento, :cep, :numerocasa, :complemento, :foto, :senha)";

    $salvar= $conn ->prepare($sql);
    $salvar -> bindParam(':nome', $dadosmatricula['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':telefone', $dadosmatricula['telefone'],PDO::PARAM_STR);
    $salvar -> bindParam(':emailaluno', $dadosmatricula['email'],PDO::PARAM_STR);
    $salvar -> bindParam(':CPF', $dadosmatricula['CPF'], PDO::PARAM_STR);
    $salvar -> bindParam(':RG', $dadosmatricula['RG'], PDO::PARAM_STR);
    $salvar -> bindParam(':sexo', $dadosmatricula['sexo'], PDO::PARAM_STR);
    $salvar -> bindParam(':datanascimento', $dadosmatricula['dn'], PDO::PARAM_STR);
    $salvar -> bindParam(':cep', $dadosmatricula['cep'], PDO::PARAM_STR);
    $salvar -> bindParam(':numerocasa', $dadosmatricula['num'], PDO::PARAM_INT);
    $salvar -> bindParam(':complemento', $dadosmatricula['comple'], PDO::PARAM_STR);
    $salvar -> bindParam(':foto', $path, PDO::PARAM_STR);
    $salvar-> bindParam(':senha', $senha, PDO::PARAM_STR);
    $salvar -> execute();


    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Usuário cadastrado com sucesso!!');
        parent.location = 'matricula.php';
        </script>";

        unset($dadosmatricula);
    } else {
        echo "<script>
        alert('Usuário não cadastrado!');
        parent.location = 'matricula.php';
        </script>";
        
    }

}

}
if (!empty($dadosmatricula['btneditar'])){
    
    $dadosmatricula = array_map('trim', $dadosmatricula);

    if(!filter_var($dadosmatricula['email'], FILTER_VALIDATE_EMAIL)) {
        $vazio = true;
        echo  "<script>
            alert('Informe um e-mail válido!!!');
            parent.location = 'matricula.php';
            </script>";
    }
    $sql = "UPDATE aluno 
    set nome=:nome, telefone=:telefone, emailaluno=:emailaluno, CPF=:CPF, RG=:RG, sexo=:sexo, datanascimento=:datanascimento, 
    CEP=:cep, numerocasa=:numerocasa, complemento=:complemento, foto=:foto WHERE matricula = :matricula";

    $salvar= $conn ->prepare($sql);
    $salvar -> bindParam(':nome', $dadosmatricula['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':telefone', $dadosmatricula['telefone'],PDO::PARAM_STR);
    $salvar -> bindParam(':emailaluno', $dadosmatricula['email'],PDO::PARAM_STR);
    $salvar -> bindParam(':CPF', $dadosmatricula['CPF'], PDO::PARAM_STR);
    $salvar -> bindParam(':RG', $dadosmatricula['RG'], PDO::PARAM_STR);
    $salvar -> bindParam(':sexo', $dadosmatricula['sexo'], PDO::PARAM_STR);
    $salvar -> bindParam(':datanascimento', $dadosmatricula['dn'], PDO::PARAM_STR);
    $salvar -> bindParam(':cep', $dadosmatricula['cep'], PDO::PARAM_STR);
    $salvar -> bindParam(':numerocasa', $dadosmatricula['num'], PDO::PARAM_INT);
    $salvar -> bindParam(':complemento', $dadosmatricula['comple'], PDO::PARAM_STR);
    $salvar -> bindParam(':foto', $path, PDO::PARAM_STR);
    $salvar -> bindParam(':matricula', $dadosmatricula['matricula'], PDO::PARAM_INT);
    $salvar -> execute();


    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Dados atualizados com sucesso!!');
        parent.location = 'matricula.php';
        </script>";

        unset($dadosmatricula);
    } else {
        echo "<script>
        alert('Aluno não cadastrado!');
        parent.location = 'matricula.php';
        </script>";
        
    }

}
}
catch(PDOException $erro){
    echo $erro;

}