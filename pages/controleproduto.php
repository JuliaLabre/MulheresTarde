<?php
include_once '../includes/conexao.php';

try{
$formproduto = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica a foto para o salvamento
if(isset($_FILES['foto'])){
    $arquivo = ($_FILES['foto']);
    //var_dump($arquivo);
    if($arquivo['error']){
        echo 'Erro ao carregar arquivo';
        header("Location: formproduto.php");
    }
   
    // o erro ao carregar a foto era o caminho, como estou em pastas, precisei acrescentar os ../
    $pasta = "../fotosprodutos/"; //Salva nessa pasta    
    $nomearquivo = $arquivo['name']; //pega o nome do arquivo da array que é criada automaticamente no envio do formulario    
    $novonome = uniqid(); //nome unico, para não haver duplicidade e substituição  
    $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION)); //Coloca o nome do arquivo com a sua extensão
    
    if($extensao != "jpg" && $extensao != "png" && $extensao != "webp" && $extensao != "avif"){
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

if (!empty($formproduto['cadprod'])) {

    $vazio = false;

    $formproduto = array_map('trim', $formproduto);
    if (in_array("", $formproduto)) {
        $vazio = true;
        echo  "<script>
            alert('Preencher todos os campos!!!');
            parent.location = 'admin.php';
            </script>";
       }
    if (!$vazio) {

    $sql = "INSERT INTO produto (nome, foto, cor, valor, tamanho, quantidade,idcategoria )
    values(:nome, :foto, :cor, :valor, :tamanho, :quantidade, :idcategoria)";

    $salvar= $conn ->prepare($sql);
    $salvar -> bindParam(':nome', $formproduto['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':foto', $path,PDO::PARAM_STR);
    $salvar -> bindParam(':cor', $formproduto['cor'],PDO::PARAM_STR);
    $salvar -> bindParam(':valor', $formproduto['valor'], PDO::PARAM_STR);
    $salvar -> bindParam(':tamanho', $formproduto['tamanho'], PDO::PARAM_STR);
    $salvar -> bindParam(':quantidade', $formproduto['quantidade'], PDO::PARAM_INT);
    $salvar -> bindParam(':idcategoria', $formproduto['categoria'], PDO::PARAM_STR);
    $salvar -> execute();


    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Produto cadastrado com sucesso!!');
        parent.location = 'formproduto.php';
        </script>";

        unset($formproduto);
    } else {
        echo "<script>
        alert('Produto não cadastrado!');
        parent.location = 'formproduto.php';
        </script>";
        
    }

}

}

if (!empty($formproduto['prodeditar'])){
    
    $formproduto = array_map('trim', $formproduto);

    $sql = "UPDATE produto 
    set nome=:nome, foto=:foto, cor=:cor, valor=:valor, tamanho=:tamanho, quantidade=:quantidade, idcategoria=:idcategoria, 
    WHERE codigoproduto = ";

    $salvar= $conn ->prepare($sql);
    $salvar -> bindParam(':nome', $formproduto['nome'],PDO::PARAM_STR);
    $salvar -> bindParam(':foto', $path,PDO::PARAM_STR);
    $salvar -> bindParam(':cor', $formproduto['cor'],PDO::PARAM_STR);
    $salvar -> bindParam(':valor', $formproduto['valor'], PDO::PARAM_STR);
    $salvar -> bindParam(':tamanho', $formproduto['tamanho'], PDO::PARAM_STR);
    $salvar -> bindParam(':quantidade', $formproduto['quantidade'], PDO::PARAM_INT);
    $salvar -> bindParam(':idcategoria', $formproduto['categoria'], PDO::PARAM_STR);
    $salvar -> execute();


    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Dados atualizados com sucesso!!');
        parent.location = 'matricula.php';
        </script>";

        unset($formproduto);
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