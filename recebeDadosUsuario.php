<?php

//superglobais
//$_POST
//$_GET
//$_REQUEST

//echo "<pre>";

//var_dump($_POST);

//include não erro fatal
//require dá erro fatal
//requeire_once = verifica se o arquivo já possui include no código
include 'funcoesAluno.php';

$matricula = $_POST['matricula'];
$aluno = $_POST['aluno'];

if(cadastraAluno(['matricula' => $matricula, 'nome' => $aluno])){
    echo "$aluno, você foi matriculado(a) com sucesso!";
}else{
    echo "$aluno, alguma coisa deu errado! :-(";
}

echo "<br><br><a href='dadosUsuario.php'>cadastrar outro</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp
      <a href='listarUsuarios.php'>listar usuários</a>";

