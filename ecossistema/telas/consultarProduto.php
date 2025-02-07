<?php
    namespace PHP\Modelo\Tela;
    require_once('..\dao\consultar.php');
    require_once('..\dao\conexao.php');
    use PHP\Modelo\dao\consultar;
    use PHP\Modelo\dao\conexao;
 
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
    <header>Consultar Produto</header>
    <form method="POST" class="form">
  <div class="title">Consultar Produto<br><span>Informe o código</span></div>
  <input class="input" name="tCodigo" placeholder="Codigo" type="text" >
        
  </div>

  <button type="submit" class="btnn">Enviar</button>
  </form>
      <?php
        $conexao = new Conexao();
        $codigo = $_POST['tCodigo'];
        $consultar = new Consultar();
      ?>

<?php
    if(isset($_POST['tCodigo'])){
        echo $consultar->consultarProdutoIndividual($conexao,$codigo);
       
    }else{
        echo "Preencha o campo código";
    }

?> 



</section>

<video class="background-video" autoplay loop muted>
        <source src="../img/menu.mp4" type="video/mp4">
    </video>
</body>
</html>
 