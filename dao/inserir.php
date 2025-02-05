<?php
    namespace PHP\Modelo\dao;
    require_once('conexao.php');
    use PHP\Modelo\dao\conexao;
    use PHP\Modelo\dao\inserir;
 
 
    class inserir{
 
        function cadastrarProduto(conexao $conexao,
                                string $codigo,
                                 string $categoria,
                                string $data,
                                float $peso,
                                string $localEnviado,
                                string $entreguePor
        ){
        try{
            $conn = $conexao->conectar();
            $sql = "Insert into Produto(codigo,categoria,dataa, peso,localEnviado,
            entreguePor)
                    values('$codigo','$categoria','$data','$peso','$localEnviado','$entreguePor')";
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
 
 
   
            

              
    function cadastrarFuncionario(Conexao $conexao,
    string $cpf,
    string $nome,
    string $endereco,
    string $telefone,
    string $salario
    ){
try{
$conn = $conexao->();
$sql = "Insert into funcionario(codigo,nome,telefone,endereco, salario)
values('$cpf','$nome','$telefone','$endereco','$salario')";
$result = mysqli_query($conn,$sql);
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

                                   
 
 
 
 
 