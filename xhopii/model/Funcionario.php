<?php

class Funcionario{

    //Atributos
    protected $cpf;
    protected $nome;
    protected $sobrenome;
    protected $dataNasc;
    protected $telefone;
    protected $email;
    protected $salario;

    //Construtor
    public function __construct($Cpf, $Nome, $Sobrenome, $DataNasc, $Telefone, $Email, $Salario)
    {
        $this->cpf = $Cpf;
        $this->nome = $Nome;
        $this->sobrenome = $Sobrenome;
        $this->sobrenome = $DataNasc;
        $this->telefone = $Telefone;
        $this->email = $Email;
        $this->salario = $Salario;

    }

    //Getter e Setter
    public function get_Nome()
    {
        return($this->nome);
    }

    public function set_Nome($Nome)
    {
        $this->nome = $Nome;
    }



    public function get_Sobrenome()
    {
        return($this->sobrenome);
    }

    public function set_Sobrenome($Sobrenome)
    {
        $this->sobrenome = $Sobrenome;
    }



    public function get_DataNasc()
    {
        return($this->dataNasc);
    }

    public function set_DataNasc($DataNasc)
    {
        $this->dataNasc = $DataNasc;
    }



    public function get_Telefone()
    {
        return($this->telefone);
    }

    public function set_Telefone($Telefone)
    {
        $this->telefone = $Telefone;
    }



    public function get_Email()
    {
        return($this->email);
    }

    public function set_Email($Email)
    {
        $this->email = $Email;
    }



    public function get_Salario()
    {
        return($this->salario);
    }

    public function set_Salario($Salario)
    {
        $this->salario = $Salario;
    }
    
}
?>