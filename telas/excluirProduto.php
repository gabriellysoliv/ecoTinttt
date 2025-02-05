<?php
    namespace PHP\Modelo\Tela;
    require_once('..\dao\excluir.php');
    require_once('..\dao\conexao.php');
    use PHP\Modelo\dao\excluir;
    use PHP\Modelo\dao\conexao;
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
    <section class="container">
 <header>Cadastrar Produto</header>
  <form class="form" method="POST" >
    <div class="input-box">
          <label>Digite o codigo do produto:</label>
          <input type="text" class="form-control" id="tCodigo" name="tCodigo" placeholder="99999999999">

          </div>

        <button type="submit" class="btnn">Enviar</button>
        </form>
        <?php
            $conexao = new conexao();
            if(isset($_POST['tCodigo'])){
                $codigo = $_POST['tCodigo'];
                $excluir = new  Excluir();
                }
        ?>
       
        <?php
           
           if(isset($_POST['tCodigo'])){
            echo $excluir->excluirProduto($conexao,$codigo);
               
           }else{
            echo "Informe um código válido";
           }
        ?>
    
</section>

    
<video class="background-video" autoplay loop muted>
        <source src="../img/menu.mp4" type="video/mp4">
    </video>
</body>
</html>