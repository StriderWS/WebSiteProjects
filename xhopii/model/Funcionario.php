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



    //=================================================================================================================================================



    //Construtor
    public function __construct($Cpf, $Nome, $Sobrenome, $DataNasc, $Telefone, $Email, $Salario)
    {
        $this->cpf = $Cpf;
        $this->nome = $Nome;
        $this->sobrenome = $Sobrenome;
        $this->dataNasc = $DataNasc;
        $this->telefone = $Telefone;
        $this->email = $Email;
        $this->salario = $Salario;

    }



    //=================================================================================================================================================



    //Getter e Setter
    public function getCpf()
    {
        return($this->cpf);
    }

    public function setCpf($Cpf)
    {
        $this->cpf = $Cpf;
    }

    //===============================================

    public function getNome()
    {
        return($this->nome);
    }

    public function setNome($Nome)
    {
        $this->nome = $Nome;
    }

    //===============================================

    public function getSobrenome()
    {
        return($this->sobrenome);
    }

    public function setSobrenome($Sobrenome)
    {
        $this->sobrenome = $Sobrenome;
    }

    //===============================================

    public function getDataNasc()
    {
        return($this->dataNasc);
    }

    public function setDataNasc($DataNasc)
    {
        $this->dataNasc = $DataNasc;
    }

    //===============================================

    public function getTelefone()
    {
        return($this->telefone);
    }

    public function setTelefone($Telefone)
    {
        $this->telefone = $Telefone;
    }

    //===============================================

    public function getEmail()
    {
        return($this->email);
    }

    public function setEmail($Email)
    {
        $this->email = $Email;
    }

    //===============================================

    public function getSalario()
    {
        return($this->salario);
    }

    public function setSalario($Salario)
    {
        $this->salario = $Salario;
    }
    
}
?>