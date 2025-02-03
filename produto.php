<?php
    namespace PHP\Modelo;

    class Produto{
        protected int $codigo;
        protected string $nome;
        protected string $categoria;
        protected string $dataa;
        protected float $peso;


        public function __construct(
            int $codigo,
            string $nome,
            string $categoria,
            string $dataa,
            float $peso
        )
    { 
        //instanciar

        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->dataa = $dataa;
        $this->peso = $peso;
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
                "<br>Nome: ".$this->nome.
                "<br>Categoria: ".$this->categoria.
                "<br>data: ".$this->dataa.
                "<br>peso: ".$this->peso;
    }//fim do metodo



}//fim da classe




    ?>