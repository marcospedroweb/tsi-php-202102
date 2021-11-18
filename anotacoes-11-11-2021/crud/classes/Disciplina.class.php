<?php

class Disciplina {
    //cria objeto Disciplina
    var $bd;//variavel para receber o banco de dados

    function __construct($bd)
    {
        $this->bd = $bd;//recebe o banco de dados php my admin
    }

    function listar()
    {
        $sql = 'SELECT id, nome, professor, dia, descricao FROM disciplinas ORDER BY nome';
        // select para retornar todas as colunas da tabela disciplinas

        foreach ($this->bd->query($sql) as $registro) {
           //Com a instancia do banco, desse mesmo objeto, faz um query, executando o select acima
            $lista[$registro['id']] = $registro; 
            //Criar um array que recebe todo os registros daquele id especifico
        }

        return $lista;//Retorna o array com array, com cada registros do select, separada pelo seu respctivo id
    }

    function apagar($id)
    {

        $id = preg_replace( '/\D/', '', $id);  //Realiza uma pesquisa por uma expressão regular e a substitui.
        //retorna um array se o parâmetro subject é um array, caso contrário retorna uma string
        // \D Match a non-digit character

        //Acessando o banco, mando o sql com query, apagando aquele id
        if($this->bd->query("DELETE FROM disciplinas WHERE id = $id")){

            return true;

        }else{

            return false;
        }
    }

    function criar($dados)
    {

        $nome = $dados['nome'];
        $prof = $dados['prof'];
        $desc = $dados['desc'];
        $dia = $dados['dia'];

        //Prerar a consulta do bd

        //Executar a consulta no bd

        //retornar true ou false
    }
}