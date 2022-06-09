<?php

function cadastraAluno(array $aluno):bool
{
    $f = fopen('alunos.csv', 'a');//Abre um arquivo ou URL
    $escreveu = fwrite($f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");//fwrite() escreve o conteúdo da string para o stream de arquivo apontado 
    fclose($f);//Fecha um arquivo aberto

    if($escreveu){
        return true;
    }else{
        return false;
    }
}

$funcionou = cadastraAluno(['matricula' => 326224, 'nome' => 'maria']);//atribuindo valores dentro da função


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