<?php
include_once '../includes/conexao.php';
require '../includes/header.php';


session_start();
ob_start();


$sql = "SELECT * FROM categoria";

$resultado=$conn->prepare($sql);
$resultado->execute();   

?>

<div class="wrap">
<h2 class="text-center">Cadastro de produtos da <strong>High Fit</strong>.</h2>
    <div class="container">
        <form method="post" action="controleproduto.php" enctype="multipart/form-data">

        <div class="form-row">        
                <div class="col-md-4">                
                <label for="Name">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do produto">               
            </div>

            <div class="col-md-2">                
                <label for="Name">Cor</label>
                <input type="text" class="form-control" name="cor" placeholder="Cor do produto">                
            </div>

            <div class="col-md-3">               
                <label for="Name">Tamanho</label>
                <input type="text" class="form-control" name="tamanho" placeholder="Tamanho do produto">                
            </div>

            <div class="col-md-3">               
                <label for="Name">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade do produto">               
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">                
                    <label for="Name">Preço</label>
                    <input type="text" class="form-control" name="valor" placeholder="Preço do produto" onchange="this.value = this.value.replace(/,/g,'.')">                
            </div>

            <div class="col-md-4">                
                <label for="Name">Categoria</label>
                <select class="form-control" name="categoria">
                <option selected>Escolha a Categoria...</option>
    <?php if(($resultado)&&($resultado->rowCount()!=0)) { 
            while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
                extract($linha);

    ?>                
                <option value="<?php echo $idcategoria ?>"><?php echo $nomecategoria?></option>
    <?php
            }
        }
    ?>
                 </select>        
            </div>

            <div class="col-md-4">                
                <label for="Name">Imagem</label>
                <input type="file" class="form-control" name="foto">                
            </div>
        </div>
        <br>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value='Cadastrar' name='cadprod' >
</form>
</div>  
</div>


<?php
     require_once '../includes/footer.php';
?>