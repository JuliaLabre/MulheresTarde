<!-- Cabeçalho -->
<?php
require 'includes/header.php'
?>
<!-- Conteudo -->
<div class="wrap">
<h2 class='text-center'>Roupas</h2>

<div class="row">
    <div class="col-md-3">
      <div class="card bg-light mb-3">
        <img class="card-img-top" src="imagens/roupa1.webp" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Top Branco</h5>
          <p class="card-text">Confortável e lindo.</p>
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#roupa1">
 Comprar
</button>

<!-- Modal -->
<div class="modal fade" id="roupa1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar esse Produto ao Carrinho?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/roupa1.webp" alt="Imagem de capa do card">
      Top Branco - R$20,00 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>

      <div class="col-md-3">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="imagens/roupa2.webp" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Top Vermelho</h5>
            <p class="card-text">Lindo e estiloso.</p>
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#roupa2">
 Comprar
</button>

<!-- Modal -->
<div class="modal fade" id="roupa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar esse Produto ao Carrinho?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/roupa2.webp" alt="Imagem de capa do card">
      Top Vermelho - R$ 25,00
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="imagens/roupa4.webp" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Top Cinza e verde</h5>
            <p class="card-text">O short não está a venda</p>
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#roupa4">
 Comprar
</button>

<!-- Modal -->
<div class="modal fade" id="roupa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar esse Produto ao Carrinho?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/roupa4.webp" alt="Imagem de capa do card">
      Top Cinza e verde - R$ 20,00
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<!-- Footer -->
<?php
require 'includes/footer.php'
?>