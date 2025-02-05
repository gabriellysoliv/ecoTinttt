<?php
    namespace PHP\Modelo\DAO;
    require_once('conexao.php');
    use PHP\Modelo\dao\conexaoo;

    class Consultar{
        function consultarProdutoIndividual(
            Conexao $conexao,
            int $codigo
        )

        {
            try{
                $conn = $conexao->conectar();
                $sql = "select *from produto where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while ($dados = mysqli_fetch_Array($result)){
                    if ($dados['codigo' == $codigo]){
                        return "<br><br>CODIGO:".$dados['codigo'].      
                        "<br><br>CATEGORIA:".$dados['categoria'].
                        "<br><br>DATA:".$dados['dataa'].
                        "<br><br>PESO:".$dados['peso'];
                    
                            
                    }
                    return "Codigo digitado invalido!";
                } return "  Digite um codigo válido";

            }catch(Except $erro)
            {
                echo $erro;
            }
        }

    }
    
?>