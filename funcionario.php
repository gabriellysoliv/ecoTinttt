<?php
    namespace PHP\Modelo;

    
    class funcionario{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;
        protected float  $salario;

        public function __construct(
            string $cpf,
            string $nome,
            string $telefone,
            string $endereco,
            string $salario
        )
    { 
        //instanciar

        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->salario = $salario;
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
        return  "<br><br><br>CPF: ".$this->cpf.
                "<br>Nome: ".$this->nome.
                "<br>Telefone: ".$this->telefone.
                "<br>Endereço: ".$this->endereco.
                "<br>Salario: ".$this->salario;
    }//fim do metodo



}//fim da classe




    ?>
