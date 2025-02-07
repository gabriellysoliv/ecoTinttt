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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script>
        // Função de validação do formulário
        function validarFormulario() {
            var codigo = document.forms["produtoForm"]["tCodigo"].value;
            var categoria = document.forms["produtoForm"]["tCategoria"].value;
            var data = document.forms["produtoForm"]["tData"].value;
            var peso = document.forms["produtoForm"]["tPeso"].value;
            var local = document.forms["produtoForm"]["tlocal"].value;
            var entregue = document.forms["produtoForm"]["tEntregue"].value;

            // Exibir mensagem de erro caso algum campo não seja preenchido
            if (codigo == "" || categoria == "" || data == "" || peso == "" || local == "" || entregue == "") {
                document.getElementById("erroMensagem").innerHTML = "Por favor, preencha todos os campos.";
                document.getElementById("erroMensagem").style.display = "block";
                return false; // Impede o envio do formulário
            }

            // Caso tudo esteja correto, esconde a mensagem de erro
            document.getElementById("erroMensagem").style.display = "none";
            return true;
        }
    </script>

</head>
<body>

<header>
    <div class="navbar">
        <div class="logo">
            <img src="../img/senac_logo.png" alt="Logo">
        </div>

        <ul class="links">
            <li><a href="inicio.php">INÍCIO</a></li>
            <li><a href="login.php">LOGIN</a></li>

        </ul>
        <a href="#" class="action_btn">Cadastro</a>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>         
    </div>
</header>

<section class="container">
    <header>Cadastrar Produto</header>

    <!-- Exibe a mensagem de erro caso algum campo não tenha sido preenchido -->
    <div id="erroMensagem" class="alert alert-danger text-center" style="display:none;"></div>

    <form name="produtoForm" class="form" method="POST" onsubmit="return validarFormulario()">
        <div class="input-box">
            <label>CÓDIGO:</label>
            <input type="text" class="form-control" id="tCodigo" name="tCodigo" placeholder="99999999999">
        </div>

        <div class="input-box address">
            <label>Produto a cadastrar</label>
            <div class="column">
                <div class="select-box" id="Categoria" name="tCategoria">
                    <select name="tCategoria">
                        <option hidden>Selecione o produto a cadastrar</option>
                        <option value="Reciclável">Reciclável</option>
                        <option value="Óleo">Óleo</option>
                        <option value="Tampinhas plásticas">Tampinhas plásticas</option>
                        <option value="Lacres de alumínio">Lacres de alumínio</option>
                        <option value="Tecidos">Tecidos</option>
                        <option value="meias">Meias</option>
                        <option value="Material de escrita">Material de escrita</option>
                        <option value="Esponjas">Esponjas</option>
                        <option value="Eletrônicos">Eletrônicos</option>
                        <option value="Pilhas e baterias">Pilhas e baterias</option>
                        <option value="Infectante">Infectante</option>
                        <option value="Químicos">Químicos</option>
                        <option value="Lâmpada fluorescente">Lâmpada fluorescente</option>
                        <option value="Tonners de impressora">Tonners de impressora</option>
                        <option value="Esmaltes">Esmaltes</option>
                        <option value="Cosméticos">Cosméticos</option>
                        <option value="Cartela de medicamento">Cartela de medicamento</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="input-box">
            <label for="tData" class="form-label">Data:</label>
            <input type="date" class="form-control" id="tData" name="tData" placeholder="Informe a data">
 
            <label for="tPeso" class="form-label">Peso:</label>
            <input type="text" class="form-control" id="tPeso" name="tPeso" placeholder="Insira o peso do produto">
 
            <label for="tlocal" class="form-label">Local Enviado:</label>
            <input type="text" class="form-control" id="tlocal" name="tlocal" placeholder="Insira o nome do local">
 
            <label for="tEntregue" class="form-label">Entregue por:</label>
            <input type="text" class="form-control" id="tEntregue" name="tEntregue" placeholder="Insira o nome de quem entregou">
        </div>

        <button type="submit" class="btnn">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $conexao = new conexao();
            $codigo = $_POST['tCodigo'];
            $categoria = $_POST['tCategoria'];
            $data = $_POST['tData'];
            $peso = $_POST['tPeso'];
            $localEnviado = $_POST['tlocal'];
            $entreguePor = $_POST['tEntregue'];

            $inserir = new inserir();
            $mensagem = $inserir->cadastrarProduto(
                $conexao,
                $codigo,
                $categoria,
                $data,
                $peso,
                $localEnviado,
                $entreguePor
            );
            echo "<p>$mensagem</p>";
        }
    ?>

</section>

<video class="background-video" autoplay loop muted>
    <source src="../img/menu.mp4" type="video/mp4">
</video>
    
</body>
</html>
