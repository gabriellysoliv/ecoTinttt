<?php
namespace PHP\Modelo\Tela;

require_once('../dao/conexao.php');
require_once('../dao/consultar.php');
use PHP\Modelo\dao\conexao;
use PHP\Modelo\dao\login;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php
session_start();

// Credenciais fixas (NÃO RECOMENDADO PARA PRODUÇÃO)
$usuario_correto = "gabrielly@gmail.com";
$senha_correta = "gaby22";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email === $usuario_correto && $senha === $senha_correta) {
        $_SESSION["usuario"] = $email;
        header("Location: cadastrarProduto.php"); // Redireciona para a página desejada
        exit();
    } else {
        $erro = "Email ou senha incorretos!";
    }
}
?>

<header>
    <div class="navbar">
        <div class="logo">
            <img src="../img/senac_logo.png" alt="Logo">
        </div>

        <ul class="links">
            <li><a href="inicio.php">INÍCIO</a></li>
            <li><a href="hero">LOGIN</a></li>
        </ul>
        <a href="#" class="action_btn">Cadastro</a>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>         
    </div>
</header>

<?php if (isset($erro)) echo "<div class='alert alert-danger text-center'>$erro</div>"; ?>

<section class="container">
    <form class="form" method="POST">
        <div class="input-box">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>

            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
        
            <button type="submit" class="btn btn-primary w-100 mt-3">Entrar</button>
            <p><a class="link-opacity-10" href="cadastrarFuncionario.php">Ainda não tem login? Faça seu cadastro</a></p>
        </div>
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
