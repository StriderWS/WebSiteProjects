<?php

require_once "../model/BancoDeDados.php";

class Controlador{


    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }



    //=================================================================================================================================================

    //Produtos
    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){

        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos))
        {
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
    }



    //=================================================================================================================================================



    //Funcionarios
    public function cadastrarFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario)
    {
        $funcionario = new Funcionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function visualizarFuncionarios(){
        
        $listaFuncionarios = $this->bancoDeDados->retornarFuncionarios();
        while($funcionario = mysqli_fetch_assoc($listaFuncionarios))
        {
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $funcionario["nome"] . "</h2>" .
                   "<p>sobrenome: " . $funcionario["sobrenzome"] . "</p>" .
                   "<p>CPF: " . $funcionario["cpf"] . "</p>" . 
                   "<p>dataNasc: " . $funcionario["dataNascimento"] . "</p>" .
                   "<p>telefone: " . $funcionario["telefone"] . "</p>" .
                   "<p>email: " . $funcionario["email"] . "</p>" .
                   "<p>salario: " . $funcionario["salario"] . "</p>" .
                   "</section>";
        }
    }



    //=================================================================================================================================================
    


    //Clientes
    public function cadastrarCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha)
    {
        $cliente = new Cliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }

    public function visualizarClientes()
    {
        
        $listaClientes = $this->bancoDeDados->retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaClientes))
        {
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $cliente["nome"] . "</h2>" .
                   "<p>sobrenome: " . $cliente["sobrenome"] . "</p>" .
                   "<p>CPF: " . $cliente["cpf"] . "</p>" . 
                   "<p>dataNasc: " . $cliente["dataNascimento"] . "</p>" .
                   "<p>telefone: " . $cliente["telefone"] . "</p>" .
                   "<p>email: " . $cliente["email"] . "</p>" .
                   "<p>senha: " . $cliente["senha"] . "</p>" .
                   "</section>";
        }
    }

}

?>