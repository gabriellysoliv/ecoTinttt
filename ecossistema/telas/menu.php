<?php
namespace PHP\Modelo\Telas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            

            <!-- From Uiverse.io by e-coders --> 


            <div class="button-container">
        <a href="cadastrarProduto.php"><button>Cadastrar Produto</button></a>
        <a href="atualizarProduto.php"><button>Atualizar Produto</button></a>
        <a href="consultarProduto.php"><button>Consultar Produto</button></a>
        <a href="excluirProduto.php"><button>Excluir Produto</button></a>
    </div>

    
        
   
    <video class="background-video" autoplay loop muted>
        <source src="../img/menu.mp4" type="video/mp4">
    </video>
    
</body>
</html>