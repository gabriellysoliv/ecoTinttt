<?php
 
namespace PHP\Modelo\DAO;
 
class conexao{
    function conectar(){
        try{
        $conn = mysqli_connect('localhost', 'root', '', 'ecoTint');
        if($conn){
            return $conn;
        }
        echo "<br>Algo deu errado!";
        }catch(except $erro)
        {
            return "Algo deu errado!<br><br>".$erro;
        }
    }//fim do conectar
 
}//fim da classe
?>
 