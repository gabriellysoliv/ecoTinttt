<?php
    namespace PHP\Modelo;
    require_once('produto.php');
    use PHP\Modelo\produto;


    //criando objeto
    $produto1 = new Produto("55555",
                        "Esmalte",
                        "Reciclavel",
                        "09/01",
                        12);


    echo $produto1->imprimir();