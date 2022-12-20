<!-- Cabeçalho -->
<?php
require '../includes/header.php'
?>

<!-- Conteudo -->
<div class="wrap">
    <h2 class='text-center'>Dados para a Matrícula:</h2>
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
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="Email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationDefault02">Data de Nascimento</label>
                    <input type="date" class="form-control" id="validationDefault02" placeholder="Data de Nascimento"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label>Sexo</label>
                    <select class="custom-select">
                        <option selected>Sexo</option>
                        <option value="1">Feminino</option>
                        <option value="2">Masculino</option>
                    </select>
                </div>
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
                <div class="col-md-4 mb-3">
                    <label>Foto de Perfil</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Carregue sua foto de perfil</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label for="cep">CEP</label>
                    <input class="form-control" placeholder="12345-67" name="cep" type="text" id="cep" value=""
                        size="10" maxlength="9" onblur="pesquisacep(this.value);">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault03">Endereço</label>
                    <input name="rua" type="text" id="rua" size="60" class="form-control" placeholder="Rua" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationDefault05">Número</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Nº" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault05">Complemento</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Complemento" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault03">Cidade</label>
                    <input name="cidade" type="text" id="cidade" size="40" class="form-control" placeholder="Cidade"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault04">Estado</label>
                    <input name="uf" type="text" id="uf" size="2" class="form-control" placeholder="Estado" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault04">Bairro</label>
                    <input name="bairro" type="text" id="bairro" size="2" class="form-control" placeholder="Bairro"
                        required>
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

            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
        </form>
    </div>
</div>
</div>
<!-- Footer -->
<?php
require '../includes/footer.php'
?>