<?php
namespace PHP\Modelo\Tela;
require_once('..\dao\conexao.php');
require_once('..\dao\atualizar.php');
use PHP\Modelo\dao\conexao;
use PHP\Modelo\dao\atualizar;
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
 <header>Cadastrar Produto</header>
  <form class="form" method="POST" >
    <div class="input-box">
          <label>Digite o codigo do produto:</label>
          <input type="text" class="form-control" id="tCodigo" name="tCodigo" placeholder="99999999999">
 
        <div class="input-box address">
        <label> Produto a atualizar</label>
        <div class="column">
          <div class="select-box" placeholder="Selecione o produto a atualizar">
            <select name="tCampo" >
                <option value="nome">Nome</option>
                <option value="categoria">Categoria</option>
                <option value="data">Data</option>
                <option value="peso">Peso</option>
                <option value="Entreguepor">Entregue por</option>
                <option value="localenviado">local enviado</option>
            </select><br><br>
          </div></div>
        
        <label>Novo dado:</label>
        <input type="text" name="tNovoDado"/><br><br> 
    </div>
</div>


 
        <button type="submit" class="btnn">Atualizar

            <?php 
                $conexao = new Conexao();
                if(isset($_POST['tCodigo'])){
                    $atualizar = new atualizar();
                    $codigo = $_POST['tCodigo'];
                    $campo = $_POST['tCampo'];
                    $novoDado = $_POST['tNovoDado'];
                }

            ?>
         

        <?php
            if(isset($_POST['tCodigo'])){
                echo $atualizar->atualizarProduto(
                $conexao,
                $campo,
                $novoDado,
                $codigo
            ); 
        }
        ?>
       

  </section> </button></form></div>
<video class="background-video" autoplay loop muted>
        <source src="../img/menu.mp4" type="video/mp4">
    </video>
</body>
</html>