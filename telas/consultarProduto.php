<?php
    namespace PHP\Modelo\Tela;
    require_once('..\dao\consultar.php');
    require_once('..\dao\conexao.php');
    use PHP\Modelo\dao\consultar;
    use PHP\Modelo\dao\conexao;
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produto</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<form method="POST" class="form">
  <div class="title">Consultar Produto<br><span>Informe o código</span></div>
  <input class="input" name="tCodigo" placeholder="tCodigo" type="text" >
 
 
  </div>
  <button type="submit" class="button-confirm">Consultar →
      <?php
        $conexao = new Conexao();
        $codigo = $_POST['tCodigo'];
        $consultar = new Consultar();
      ?>
  </button>
</form>
<?php
    if(isset($_POST['tCodigo'])){
        echo $consultar->consultarProdutoIndividual($conexao,$codigo);
       
    }else{
        echo "Preencha o campo código";
    }

?>
</body>
</html>
 