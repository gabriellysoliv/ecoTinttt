<?php
    namespace PHP\Modelo\dao;
    require_once('conexao.php');
    use PHP\Modelo\dao\conexao;
    
    class Excluir{
        function excluirProduto(
            conexao $conexao,
            int $codigo)
            
        {
            $conn = $conexao->conectar();
            $sql = "delete from produto where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if ($result){
                echo "Deletado com sucesso";

            }else{
                    echo "Não deletado";
            }
            
        }
     
    }//fim da classe
?>