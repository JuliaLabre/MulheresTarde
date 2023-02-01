<?php
include_once '../includes/conexao.php';
require '../includes/menuadmin.php';

session_start();
ob_start();

$id = filter_input(INPUT_GET, "idproduto", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "Erro: Produto não encontrado!";
    header("Location: admin.php");
    exit();
}

$sql =  "SELECT * FROM produto WHERE codigoproduto = $id LIMIT 1;";
           
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
<h2 class="text-center">Edite sua foto.</h2>
    <div class="container">

        <form method="post" action="controleproduto.php" enctype="multipart/form-data">
        <input name="id" type="hidden" value="<?php echo $id ?>">
                <div class="col-md-4">                
                <label for="Name">Imagem</label>
                <input type="file" class="form-control" name="foto"  value="<?php echo $foto ?>">                
            </div>
        </div>
        <br>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Editar" name="edftprod" >
        </form>
    </div>
</div>
    <!-- Footer -->
<?php
require '../includes/footer.php'
?>



