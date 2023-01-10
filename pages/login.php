<!-- Cabeçalho -->
<?php
require '../includes/header.php';
include_once '../includes/conexao.php';

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

?>

<!-- Conteudo -->
<div class="wrap">
<h2 class='text-center'>Faça Login</h2>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<form method="post" id="login-form" class="form" action= "">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="useremail" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="userpass" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<div class="text-center"> Ainda não é um aluno ? <a href="aluno.php">Cadastre-se aqui</a></div>
</div>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>