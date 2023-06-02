<?php

class BancoDeDados{

    //Atributos
    private $host;
    private $login;
    private $senha;
    private $dataBase;



    //=================================================================================================================================================



    //Construtor
    public function __construct($Host, $Login, $Senha, $DataBase)
    {
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }



    //=================================================================================================================================================



    //Métodos
    public function conectarBD()
    {
        $conexao = mysqli_connect($this -> host, $this -> login, $this -> senha, $this -> dataBase);
        return($conexao);
    }
    


    //=================================================================================================================================================



    public function inserirCliente($cliente)
    {
        $conexao = $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                     VALUES ('".$cliente->getCpf()."', '".$cliente->getNome()."', '".$cliente->getSobrenome()."', '".$cliente->getDataNasc()."', '".$cliente->getTelefone()."', '".$cliente->getEmail()."', '".$cliente->getSenha()."')";
        mysqli_query($conexao,$consulta);
    }
    
    public function inserirProduto($produto)
    {
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor)
                     VALUES ('".$produto->getNome()."', '".$produto->getFabricante()."', '".$produto->getDescricao()."', '".$produto->getValor()."')";
        mysqli_query($conexao,$consulta);
    }
    
    public function inserirFuncionario($funcionario)
    {
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO funcionario (cpf, nome, sobrenome, dataNascimento, telefone, email, salario) 
                     VALUES ('".$funcionario->getcpf()."','".$funcionario->getnome()."','".$funcionario->getsobrenome()."','".$funcionario->getdataNasc()."','".$funcionario->gettelefone()."','".$funcionario->getemail()."','".$funcionario->getsalario()."')";
        mysqli_query($conexao,$consulta);
    }
    


    //=================================================================================================================================================



    public function retornarClientes()
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }

    public function retornarFuncionarios()
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM funcionario";
        $listaProdutos = mysqli_query($conexao,$consulta);
        return $listaProdutos;
    }
    
    public function retornarProdutos()
    {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao,$consulta);
        return $listaProdutos;
    }

}

?>