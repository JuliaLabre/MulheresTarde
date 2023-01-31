<?php
include_once '../includes/conexao.php';
require '../includes/header.php';

session_start();
ob_start();

$id = filter_input(INPUT_GET, "codigoproduto", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "Erro: Produto não encontrado!";
    header("Location: admin.php");
    exit();
}

$sql =  "SELECT * FROM produto,categoria WHERE codigoproduto = $id LIMIT 1";
           
$resultado= $conn->prepare($sql); 
$resultado->execute();
 

if(($resultado) AND ($resultado->rowCount()!= 0)){
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
    //var_dump($linha);
    extract($linha);

}else{
    $_SESSION['msg'] = "Erro: Produto não encontrado";
    header("Location: admin.php");
}
?>
<div class="wrap">
<h2 class="text-center">Edição de produtos da <strong>High Fit</strong>.</h2>
    <div class="container">
        <form method="post" action="controleproduto.php" enctype="multipart/form-data">

        <div class="form-row">        
                <div class="col-md-4">                
                <label for="Name">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do produto" value="<?php echo $nome; ?>">               
            </div>

            <div class="col-md-2">                
                <label for="Name">Cor</label>
                <input type="text" class="form-control" name="cor" placeholder="Cor do produto" value="<?php echo $cor; ?>">                
            </div>

            <div class="col-md-3">               
                <label for="Name">Tamanho</label>
                <input type="text" class="form-control" name="tamanho" placeholder="Tamanho do produto" value="<?php echo $tamanho ?>">                
            </div>

            <div class="col-md-3">               
                <label for="Name">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade do produto" value="<?php echo $quantidade ?>">               
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">                
                    <label for="Name">Preço</label>
                    <input type="text" class="form-control" name="valor" placeholder="Preço do produto"  value="<?php echo $valor ?>" onchange="this.value = this.value.replace(/,/g,'.')">                
            </div>

            <div class="col-md-4">                
                <label for="Name">Categoria</label>
                <select class="form-control" name="categoria">
                <option selected value<?php echo $idcategoria ?>><?php echo $nomecategoria?></option>
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
                <input type="file" class="form-control" name="foto"  value="<?php echo $foto ?>">                
            </div>
        </div>
        <br>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Editar" name="prodeditar" >
        </form>
    </div>
</div>
    <!-- Footer -->
<?php
require '../includes/footer.php'
?>



