<!-- Cabeçalho -->
<?php
require '../includes/header.php'
?>

<!-- Conteudo -->
<div class="wrap">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Jump</h1>
            <p class="lead"> Muitas pessoas procuram o Jump para fortalecer as pernas e os glúteos, mas, mais do que
                essas regiões,
                ele trabalha muito bem a região do abdômen, e muitos dos exercícios são localizados para cuidar também
                dos músculos das costas e dos braços.
            </p>
        </div>
    </div>

    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal"
        data-target="#ExemploModalCentralizado">
        Matricule-se Aqui
    </button>
    <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Escolha o seu horário:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Seu email">
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Terças e Quintas de 15h às
                                16h</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Segundas e Quartas de 15h às
                                16h</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Fazer matrícula</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="container">
        <div class="row imagens">
            <div class="col-md-4"><img src="../imagens/jump.jpg" alt="Foto de hidroginástica"></div>
            <div class="col-md-4"><img src="../imagens/jump2.webp" alt="Foto de hidroginástica"></div>
            <div class="col-md-4"><img src="../imagens/jump3.webp" alt="Foto de hidroginástica"></div>
        </div>
    </div>
</div>
 
<!-- Footer -->
<?php
require '../includes/footer.php'
?>