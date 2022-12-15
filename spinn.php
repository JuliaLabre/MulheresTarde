<!-- Cabeçalho -->
<?php
require 'includes/header.php'
?>

<!-- Conteudo -->
<div class="wrap">

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Spinning</h1>
    <p class="lead">Os principais benefícios do spinning para quem pratica são: trabalhar todo o 
        condicionamento físico e muscular, principalmente das pernas e glúteos; ajudar a tonificar as 
        veias e melhorar os movimentos, o que contribui para a redução da pressão arterial, diminuindo os 
        riscos de doenças cardíacas;
</p>
  </div>
</div>

<!-- Botão para acionar modal -->
<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#ExemploModalCentralizado">
  Matricule-se Aqui
</button>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Escolha o seu horário:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <form>
        <input type="text" name="nome" placeholder="Nome">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="radio" name="horario1" id="horario1">
        <label for="horario1">Terças e Quintas de 15h as 16h</label>
        <br>
        <input type="radio" name="horario2" id="horario2">
        <label for="horario2">Segundas e Quartas de 15h as 16h</label>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Fazer matrícula</button>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container">
  <div class="row imagens" >
    <div class="col-md-4"><img src="imagens/spinning.jpg" alt="Foto de Spinning"></div>
    <div class="col-md-4"><img src="imagens/spinning2.webp" alt="Foto de Spinning"></div>
    <div class="col-md-4"><img src="imagens/spinning3.webp" alt="Foto de Spinning"></div>
  </div>
</div>
</div>
 
<!-- Footer -->
<?php
require 'includes/footer.php'
?>