<!-- Cabeçalho -->
<?php
require 'includes/header.php'
?>

<!-- Conteudo -->
<div class="wrap">
    <h2 class='text-center'>Dados Pessoais:</h2>
    <div class="container">
        <form>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Nome Completo</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" required>
                </div>
                <div class="col-md-2 mb-3 ">
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="(99) 99999-9999" class="form-control"
                        onkeypress="$(this).mask('(00)00000-0000')">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="Email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault02">Data de Nascimento</label>
                    <input type="date" class="form-control" id="validationDefault02" placeholder="Data de Nascimento"
                        required>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Feminino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Masculino</label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Cidade</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="Cidade" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Estado</label>
                    <input type="text" class="form-control" id="validationDefault04" placeholder="Estado" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationDefault05">CEP</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="CEP" required>
                </div>
                <div class="col-md-1 mb-3">
                    <label for="validationDefault05">Número</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Nº" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Complemento</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Complemento" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault03">CPF</label>
                    <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00'); "
                        placeholder="123.456.789-10" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">RG</label>
                    <input type="text" class="form-control" id="validationDefault04" placeholder="12.345.678-9"
                        required>
                </div>
            </div>
    
    <!-- ta dando erro a partir daqui: -->
    <div class="form-row">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Carregue sua foto de perfil</label>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <select class="custom-select">
                <option selected>Selecione seu Cargo</option>
                <option value="1">Professor</option>
                <option value="2">Funcionário</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <select class="custom-select">
                <option selected>Selecione suas aulas</option>
                <option value="1">Hidroginástica</option>
                <option value="2">Jump</option>
                <option value="3">Pilates</option>
                <option value="4">Spinning</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                Declaro que todas as informações prestadas são verdadeiras.
            </label>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>
</div>
</div>
<!-- Footer -->
<?php
require 'includes/footer.php'
?>