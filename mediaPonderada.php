<?php
class Aluno
{
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;

    public function calcularMedia()
    {

    }
    public function verificarAprovacao()
    {

    }
}

function exibirDados()
{
    $aluno = new Aluno();
    $aluno->nome = "Luan";
    $aluno->idade = "17";
    $aluno->matricula = "Matriculado";
    $aluno->nota1 = 10;
    $aluno->nota2 = 9;
    $aluno->peso1 = 1;
    $aluno->peso2 = 2;
    
}



?>