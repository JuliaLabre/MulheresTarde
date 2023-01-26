<?php
include_once '../includes/conexao.php';
require '../includes/header.php';

session_start();
ob_start();

$id = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "Erro: Aluno não encontrado!";
    header("Location: relalunos.php");
    exit();
}

$sql =  "SELECT * FROM aluno WHERE matricula = $id AND status = 'A' LIMIT 1";
           
$resultado= $conn->prepare($sql); 
$resultado->execute();

if(($resultado) AND ($resultado->rowCount()!= 0)){
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
    //var_dump($linha);
    extract($linha);

}else{
    $_SESSION['msg'] = "Erro: Aluno não encontrado";
    header("Location: relalunos.php");
}
?>
<div class="wrap">
<h2 class="text-center">Controle Aluno</h2>
<form method="POST" action="controlealuno.php">
            <div class="form-row">
             <div class="col-md-2 mb-3">
                    <label for="validationDefault01">Matrícula</label>
                    <input name="matricula" type="text" class="form-control" id="validationDefault01" value="<?php echo $matricula; ?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault01">Nome Completo</label>
                    <input name="nome" type="text" class="form-control" id="validationDefault01"  value="<?php echo $nome; ?>" required>
                </div>
                <div class="col-md-2 mb-3 ">
                    <label for="telefone">Telefone</label>
                    <input name="telefone" type="text" class="form-control" value="<?php echo $telefone; ?>"
                        onkeypress="$(this).mask('(00)00000-0000')">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input name="email" type="email" class="form-control" id="validationDefaultUsername" 
                            aria-describedby="inputGroupPrepend2" value="<?php echo $emailaluno; ?>" required>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationDefault02">Data de Nascimento</label>
                    <input name="dn" type="date" class="form-control" id="validationDefault02" value="<?php echo $datanascimento; ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="custom-select">
                        <option selected>Sexo</option>
                        <option type="radio" value="F">Feminino</option>
                        <option type="radio" value="M">Masculino</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault03">CPF</label>
                    <input name="CPF" type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00'); "
                         required value="<?php echo $CPF; ?>">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">RG</label>
                    <input name="RG" type="text" class="form-control" id="validationDefault04" onkeypress="$(this).mask('00.000.000-0');"
                    value="<?php echo $RG; ?>" required>
                </div>
                <div class="col-md-4 mb-3"> 
                    <label>Foto de Perfil</label>
                    <input name="foto" type="text" class="form-control"  value="<?php echo $foto ?>" required>
                    </div>
            </div>
            <div class="form-row">
                <div class="col-md-2 mb-3">
                    <label for="cep">CEP</label>
                    <input class="form-control" placeholder="12345-67" name="cep" type="text" id="cep"
                        size="10" maxlength="9" onblur="pesquisacep(this.value);" value="<?php echo $CEP; ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault03">Endereço</label>
                    <input type="text" id="rua" size="60" class="form-control" placeholder="Rua" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationDefault05">Número</label>
                    <input name="num" type="text" class="form-control" id="validationDefault05" value="<?php echo $numerocasa; ?>" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault05">Complemento</label>
                    <input name="comple" type="text" class="form-control" id="validationDefault05" value="<?php echo $complemento; ?>" required>
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
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                               Confirmo as alterações.
                            </label>
                        </div>
                    </div>
                </div>

                <input class="btn btn-primary btn-lg btn-block" type="submit" value='Editar' name='btneditar' >
        </form>
    </div>
    </div>
    <!-- Footer -->
<?php
require '../includes/footer.php'
?>



