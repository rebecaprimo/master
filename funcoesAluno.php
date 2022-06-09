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


function listarAlunos():array
{
    $alunos = [];

    $f = fopen('alunos.csv', 'r');

    while($linha = fgets($f)){//fgets = Retorna uma linha do arquivo.
        var_dump($linha);//Mostra informações sobre a variável, printa possíveis erros.
        echo "<br>";
    }

    return $alunos;
}