<?php
    namespace PHP\Modelo\Tela;
    require_once('..\dao\excluir.php');
    require_once('..\dao\conexao.php');
    use PHP\Modelo\dao\excluir;
    use PHP\Modelo\dao\conexao;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <form method="POST">
        <label>Código:</label>
        <input type="text" name="tCodigo">

        <button type="submit">Excluir
        <?php
            $conexao = new conexao();
            if(isset($_POST['tCodigo'])){
                $codigo = $_POST['tCodigo'];
                $excluir = new  Excluir();
                }
        ?>
        </button>
        </form>
        <?php
           
           if(isset($_POST['tCodigo'])){
            echo $excluir->excluirProduto($conexao,$codigo);
               
           }else{
            echo "Informe um código válido";
           }
        ?>
    
    </button>
    </form>
</body>
</html>