<?php
    namespace PHP\Modelo;
    require_once('produto.php');
    require_once('funcionario.php');
    use PHP\Modelo\produto;
    use PHP\Modelo\funcionario;


    //criando objeto
    $produto1 = new Produto("55555",
                        "Esmalte",
                        "Reciclavel",
                        "09/01",
                        12);


    echo $produto1->imprimir();

    $funcionario1 = new Funcionario("11111111111",
    "Pedro Oliveira",
    "3333-88484",
    "Rua , 15",
    1800);                       




    echo $funcionario1->imprimir();