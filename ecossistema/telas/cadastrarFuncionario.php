<?php 
namespace PHP\Modelo\Tela;
require_once ('..\funcionario.php');
require_once ('..\dao\conexao.php');
require_once ('..\dao\inserir.php');
use PHP\Modelo\dao\Funcionario;
use PHP\Modelo\dao\conexao;
use PHP\Modelo\dao\inserir;

?>

<!doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Produto</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
        <header>Faça seu cadastro</header>
        <form class="form" method="POST" onsubmit="return validarFormulario()">
            <div class="input-box">
                <div class="mb-3">
                    <label for="lCpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="99999999999">
                </div>

                <div class="mb-3">
                    <label for="lnome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu Nome">
                </div>

                <div class="mb-3">
                    <label for="lTelefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99)999999999">
                </div>

                <div class="mb-3">
                    <label for="lendereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="tEndereco" name="tEndereco" placeholder="Insira seu endereço">
                </div>

                <div class="mb-3">
                    <label for="lSalario" class="form-label">Salário</label>
                    <input type="text" class="form-control" id="tSalario" name="tSalario" placeholder="Informe seu Salário">
                </div>

                <button type="submit" class="btnn">Cadastrar</button>
                <p><a class="link-opacity-10" href="login.php">Já possui cadastro? Faça seu login</a></p>
            </div>
        </form>

        <?php
            $conexao = new conexao();
            $erro = '';

            if (isset($_POST['tCpf'])) {
                $cpf = $_POST['tCpf'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTelefone'];
                $endereco = $_POST['tEndereco'];
                $salario = $_POST['tSalario'];

                // Validação PHP
                if (empty($cpf) || empty($nome) || empty($telefone) || empty($endereco) || empty($salario)) {
                    $erro = "Todos os campos devem ser preenchidos!";
                } else {
                    $inserir = new inserir();
                    echo $inserir->cadastrarFuncionario(
                        $conexao,
                        $cpf,
                        $nome,
                        $telefone,
                        $endereco,
                        $salario
                    );
                    if ($inserir) {
                        header("Location: menu.php");
                    }
                }
            }

            if (!empty($erro)) {
                echo "<div class='alert alert-danger'>$erro</div>";
            }
        ?>
    </section>

    <script>
        function validarFormulario() {
            var cpf = document.getElementById('tCpf').value;
            var nome = document.getElementById('tNome').value;
            var telefone = document.getElementById('tTelefone').value;
            var endereco = document.getElementById('tEndereco').value;
            var salario = document.getElementById('tSalario').value;

            if (cpf === "" || nome === "" || telefone === "" || endereco === "" || salario === "") {
                alert("Todos os campos devem ser preenchidos!");
                return false; // Impede o envio do formulário
            }
            return true; // Permite o envio do formulário
        }
    </script>

    <video class="background-video" autoplay loop muted>
        <source src="../img/menu.mp4" type="video/mp4">
    </video>
    
    </body>
</html>

