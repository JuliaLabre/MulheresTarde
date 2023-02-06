<!-- Cabeçalho -->
<?php
require '../includes/header.php';
include_once '../includes/conexao.php';

$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dadoslogin['btnlogin'])) {

$buscalogin = "SELECT CPFfuncionario, nome, emailfunc, senha, foto, sexo, cargo
                        FROM funcionario
                        WHERE emailfunc =:usuario AND status = 'A'
                        LIMIT 1";
           
$resultado= $conn->prepare($buscalogin); 
$resultado->bindParam(':usuario', $dadoslogin['usuario'],PDO::PARAM_STR);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount()!= 0)){
    $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
    var_dump($resposta);
// salvando dados na variavel
    if(password_verify($dadoslogin['senha'],$resposta['senha'])){
      $_SESSION['nome'] = $resposta['nome'];
      $_SESSION['foto'] = $resposta['foto'];
      $_SESSION['sexo'] = $resposta ['sexo'];
      $_SESSION['cargo'] = $resposta['cargo'];

       header("location:../pages/admin.php");
    }else{
      $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
      Error: Usuário ou senha inválidos!
     </div>';
}
}   else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
  Error: Usuário ou senha inválidos!
 </div>';
}
}
if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}

?>

<!-- Conteudo -->
<div class="wrap">
<h2 class='text-center'>Administrativo</h2>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<form method="POST" id="login-form" class="form" action= "">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input name="usuario" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
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
</div>

<!-- Footer -->
<?php
require '../includes/footer.php'
?>