<?php
    namespace PHP\Modelo;
 
    class Produto{
        protected int $codigo;
        protected string $categoria;
        protected string $dataa;
        protected float $peso;
        protected string $localEnviado;
        protected string $entreguePor;
 
 
        public function __construct(
            int $codigo,
            string $categoria,
            string $dataa,
            float $peso,
            string $localEnviado,
            string $entreguePor
        )
    {
        //instanciar
 
        $this->codigo = $codigo;
        $this->categoria = $categoria;
        $this->dataa = $dataa;
        $this->peso = $peso;
        $this->localEnviado = $localEnviado;
        $this->entreguePor = $entreguePor;
    }//fim do construtor
 
    public function __get(string $variavel ):mixed
    {
        return $this->variavel;
    }//fim do get
 
    public function __set(string $variavel, string $novoDado):void
    {
        $this->variavel = $novoDado;
    }//fim do set
 
    public function imprimir():string
    {
        return  "<br>Codigo: ".$this->codigo.
                "<br>Categoria: ".$this->categoria.
                "<br>data: ".$this->dataa.
                "<br>peso: ".$this->peso.
                "<br>Local Enviado: ".$this->localEnviado.
                "<br>Entregue Por: ".$this->entreguePor;
    }//fim do metodo
 
 
 
}//fim da classe
 
 
 
 
    ?>




