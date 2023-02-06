<!-- Cabeçalho -->
<?php
require '../includes/header.php'
?>

<!-- Conteudo 
link de onde peguei bootstrap
https://ordinarycoders.com/blog/article/bootstrap-pricing-table-example

-->
<div class="wrap">

    <h2 class='text-center'>Conheça nossos Planos</h2>
   
  <div class="container-fluid">
    <div class="container p-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">        
          <div class="card card1 h-100">
            <div class="card-body">
             
              <h5 class="card-title">Basic</h5>
              <small class='text-muted'>Individual</small>
              <br><br>
              <span class="h2">R$80</span>/mês
              <br><br>
              <div class="d-grid my-3">
                <button name="planoBasic" class="btn btn-outline-dark btn-block">Selecionar</button>
              </div>
              <ul>
                <li>Área de musculação e aeróbicos</li>
                <li>Treinos Online</li>
                <li>Sem Fidelidade</li>                
              </ul>
            </div>            
          </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card1 h-100">
            <div class="card-body">             
              <h5 class="card-title">Premium</h5>
              <small class='text-muted'>Individual</small>
              <br><br>
              <span class="h2">R$100</span>/mês
              <br><br>
              <div class="d-grid my-3">
              <button name="planoPremium" class="btn btn-outline-dark btn-block">Selecionar</button>
              </div>
              <ul>
                <li>Acesso a academias da rede</li>
                <li>Cadeira de massagem</li>
                <li>+Tudo do plano Basic</li>                
              </ul>
            </div>            
          </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card1 h-100">
            <div class="card-body">             
              <h5 class="card-title">Gold</h5>
              <small class='text-muted'>Grupo</small>
              <br><br>
              <span class="h2">R$250</span>/mês
              <br><br>
              <div class="d-grid my-3">
              
                <button name="planoGold" class="btn btn-outline-dark btn-block">Selecionar</button>
               
              </div>
              <ul>
                <li>Até 2 Pessoas</li>
                <li>Tem direito a 1 atividade</li>
                <li>+Tudo do plano Premium</li>
                
              </ul>
            </div>            
          </div>
        </div>

      </div>    
    </div>
</div>
</div>
 
<!-- Footer -->
<?php
require '../includes/footer.php'
?>