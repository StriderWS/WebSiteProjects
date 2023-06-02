<?php

class Produto{

    //Atributos
    protected $nome;
    protected $fabricante;
    protected $descricao;
    protected $valor;



    //=================================================================================================================================================



    //Construtor
    public function __construct($Nome, $Fabricante, $Descricao, $Valor)
    {
        $this->nome = $Nome;
        $this->fabricante = $Fabricante;
        $this->descricao = $Descricao;
        $this->valor = $Valor;
    }



    //=================================================================================================================================================



    //Getter e Setter
    public function getNome()
    {
        return($this->nome);
    }

    public function setNome($Nome)
    {
        $this->nome = $Nome;
    }

    //===============================================

    public function getFabricante()
    {
        return($this->fabricante);
    }

    public function setFabricante($Fabricante)
    {
        $this->fabricante = $Fabricante;
    }

    //===============================================

    public function getDescricao()
    {
        return($this->descricao);
    }

    public function setDescricao($Descricao)
    {
        $this->descricao = $Descricao;
    }

    //===============================================

    public function getValor()
    {
        return($this->valor);
    }

    public function setValor($Valor)
    {
        $this->valor = $Valor;
    }



    //=================================================================================================================================================



    //Métodos
    public function aplicarCupom($cupomTaxa)
    {
        $valorDesconto = ($this->valor*$cupomTaxa) / 100;
        $this->valor = $this->valor - $valorDesconto;
    }
    
}
?>