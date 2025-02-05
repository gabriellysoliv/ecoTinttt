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
        <link rel="stylesheet" href="../css/estilo.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">
                <img src="../img/senac_logo.png" alt="">
                </div>

            <ul class="links">
            <li><a href="hero">INÍCIO</a></li>
                <li><a href="hero">PESAGEM</a></li>
                <li><a href="hero">CONTATO</a></li>
                </ul>
            <a href="#" class="action_btn">Cadastro</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>         
            </div>
    </header>

    <form method="POST">
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
  <input type="text" class="form-control" id="tCpf" name="tEndereco" placeholder="Insira seu endereco">
</div>

<div class="mb-3">
  <label for="lSalario" class="form-label">Salario</label>
  <input type="text" class="form-control" id="tSalario" name="tSalario" placeholder="Informe seu Salario">
</div>

    <button type="submit">Cadastrar
        <?php
           $conexao = new conexao();
           if(isset($_POST['tCpf'])){
            $cpf = $_POST ['tCpf'];
            $nome = $_POST ['tNome'];
            $telefone = $_POST ['tTelefone'];
            $endereco = $_POST ['tEndereco'];
            $salario = $_POST ['tSalario'];

            
            $inserir = new  inserir();
            echo $inserir->cadastrarFuncionario(
                                            $conexao,
                                            $cpf,
                                            $nome,
                                            $telefone,
                                            $endereco,
                                            $salario);
            echo "<p>$mensagem</p>";

            }

        ?>


    </button>
</form>

<video class="background-video" autoplay loop muted>
        <source src="../img/menu.mp4" type="video/mp4">
    </video>

    </body>
</html>