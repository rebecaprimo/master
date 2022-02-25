<?php

function cadastraAluno(array $aluno):bool
{
    $f = fopen('alunos.csv', 'a');
    $escreveu = fwrite($f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
    fclose($f);

    if($escreveu){
        return true;
    }else{
        return false;
    }
}

$funcionou = cadastraAluno(['matricula' => 326224, 'nome' => 'maria']);


if($funcionou){
    echo "<br>aluno cadastrado com sucesso!";
}
else
{
    echo "<br>erro ao cadastrar o aluno!";
} 

$var = 10;

function soma($var){
    return $var + 10;
}

echo "<br> variável antes: $var";

soma($var);