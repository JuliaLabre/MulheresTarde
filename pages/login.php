<!-- Cabeçalho -->
<?php
require '../includes/header.php';
include_once '../includes/conexao.php';

$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//echo "senha".password_hash(123,PASSWORD_DEFAULT);

if (!empty($dadoslogin['btnlogin'])) {

$buscalogin = "SELECT matricula, nome, emailaluno, senha
                        FROM aluno
                        WHERE emailaluno =:usuario
                        LIMIT 1";
           
$resultado= $conn->prepare($buscalogin); 
$resultado->bindParam(':usuario', $dadoslogin['usuario'],PDO::PARAM_STR);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount()!= 0)){
    $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
    var_dump($resposta);

    if(password_verify($dadoslogin['senha'],$resposta['senha'])){
  header("location:../pages/perfil.php");
}   else{
  echo 'Usuário ou senha inválidos';
}
}else{
  echo 'Usuário ou senha inválidos';
}
}

?>
<!-- Conteúdo -->
<div class="wrap">
<h2 class='text-center'>Faça Login</h2>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<form method="POST" id="login-form" class="form" action= "">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
  </div>
  <input type="submit" class="btn btn-primary" name="btnlogin" value="Enviar">
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<hr>
<div class="text-center"> Ainda não é um aluno ? <a href="../pages/matricula.php">Cadastre-se aqui</a></div>
</div>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>