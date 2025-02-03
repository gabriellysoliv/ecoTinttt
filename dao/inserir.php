<?php
    namespace PHP\Modelo\dao;
    require_once('conexao.php');
    use PHP\Modelo\dao\Conexao;
 
 
    class Inserir{

        function cadastrarProduto(Conexao $conexao,
                                string $codigo,
                                string $nome,
                                string $categoria,
                                string $data,
                                float $peso
        ){
        try{
            $conn = $conexao->conectar();
            $sql = "Insert into produto(codigo,nome,categoria,dataa, peso)
                    values('$codigo','$nome','$categoria','$data','$peso')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            
            if($result){
                return "<br><br> Inserido com sucesso!";
            }

            return "<br><br> Não inserido!";

        }

        catch(Except $erro)
        {
            return "<br><br>Algo deu errado".$erro;
        }
       
    }


    
            }
                                   
 
 
 
?>
 