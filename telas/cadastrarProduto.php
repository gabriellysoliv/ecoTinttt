<?php
    namespace PHP\Modelo\Telas;
    require_once ('..\produto.php');
    require_once ('..\dao\conexao.php');
    require_once ('..\dao\inserir.php');
    use PHP\Modelo\dao\produto;
    use PHP\Modelo\dao\conexao;
    use PHP\Modelo\dao\inserir;
?>

<!doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Produto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="../css/style.css">
         
    </head>
    <body>

  <!-- From Uiverse.io by mi-series --> 
<section class="container">
  <header>Registration Form</header>
  <form class="form" >
      <div class="input-box">
          <label>CÓDIGO:</label>
          <input type="text" class="form-control" id="tCodigo" name="tCodigo" placeholder="99999999999">

          <label for="lnome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu Nome">
      </div>

          <div class="input-box address">
        <label> Produto a cadastrar</label>

       
        <div class="column">
          <div class="select-box"class="select-box" id="tCategoria" name="tCategoria" placeholder="Selecione o produto a cadastrar">
            <select>
              <option hidden="Selecione o produto a cadastrar"></option>
              <option>Reciclável</option>
              <option>Óleo</option>
              <option>Tampinhas plásticas</option>
              <option>Lacres de alumínio</option>
              <option>Tecidos</option>
              <option>meias</option>
              <option>Material de escrita</option>
              <option>Esponjas</option>
              <option>Eletrônicos</option>
              <option>Pilhas e baterias</option>
              <option>Infectante</option>
              <option>Químicos</option>
              <option>Lâmpada fluorescente</option>
              <option>Tonners de impressora</option>
              <option>Esmaltes</option>
              <option>Cosméticos</option>
              <option>Cartela de medicamento</option>
            </select>
          </div>
        </div>
          <div class="input-box">
          <label for="tData" class="form-label">Data:</label>
            <input type="date" class="form-control" id="tData" name="tData" placeholder="Informe a data">

            <label for="tPeso" class="form-label">Peso</label>
      <input type="text" class="form-control" id="tPeso" name="tPeso" placeholder="Insira o peso do produto">
          </div>

      </div>
      </div>


    <button type="submit">Cadastrar
        <?php
            $conexao = new conexao();
            if(isset($_POST['tCodigo'])){
              $codigo = $_POST['tCodigo'];
              $nome = $_POST['tNome'];
              $categoria = $_POST['tCategoria'];
              $data = $_POST['tData'];
              $peso = $_POST['tPeso'];

              $inserir = new Inserir();
              echo $inserir->cadastrarProduto(
                                              $conexao,
                                              $codigo,
                                              $nome,
                                              $categoria,
                                              $data,
                                              $peso);

            }
        ?>


    </button>
</form>



    </body>
</html>