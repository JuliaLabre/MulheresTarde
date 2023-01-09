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
                <button  type="button" class="btn btn-outline-dark btn-block" data-toggle="modal"
        data-target="#ExemploModalCentralizado">Selecionar</button>
              </div>
              <ul>
                 <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Seus Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                    <label for="validationDefault01">Nome Completo</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="(99) 99999-9999" class="form-control"
                        onkeypress="$(this).mask('(00)00000-0000')">
                </div>
                <div class="form-group">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="Email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div>
                <input class="form-control" type="text" placeholder="Entraremos em contato para a finalização do plano escolhido" readonly>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Escolher Plano</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
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
                <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal"
        data-target="#ExemploModalCentralizado" >Selecionar</button>
              </div>
              <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Seus Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                    <label for="validationDefault01">Nome Completo</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="(99) 99999-9999" class="form-control"
                        onkeypress="$(this).mask('(00)00000-0000')">
                </div>
                <div class="form-group">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="Email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div>
                <input class="form-control" type="text" placeholder="Entraremos em contato para a finalização do plano escolhido" readonly>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Escolher Plano</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal"
        data-target="#ExemploModalCentralizado">Selecionar</button>
              </div>
              <ul>
                 <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Seus Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                    <label for="validationDefault01">Nome Completo</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="(99) 99999-9999" class="form-control"
                        onkeypress="$(this).mask('(00)00000-0000')">
                </div>
                <div class="form-group">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="Email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div>
                <input class="form-control" type="text" placeholder="Entraremos em contato para a finalização do plano escolhido" readonly>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Escolher Plano</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
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
 
<!-- Footer -->
<?php
require '../includes/footer.php'
?>