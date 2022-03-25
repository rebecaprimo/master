<?php
//SELECT coluna1, coluna2 FROM tabela WHERE colunaX = valor; -> chamar tabelas
//UPDATE tabela SET coluna1 = valor, coluna2 = valor WHERE colunaX = valor; -> atualizar tabelas
//INSERT INTO coluna 1 = valor, coluna2 = valor WHERE colunaX = valor; -> inserir valores nas tabelas
//DELETE FROM tabela WHERE coluna = valor; -> excluir dados das tabelas

//conecta no banco de dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass); //ligando o php ao banco de dados
//FIM conecta no banco de dados

//INSERT
$inseriu = $bd -> exec ('INSERT INTO tarefa (descricao) VALUES ("mais uma tarefa inserida")'); //atribuindo variável para INSERT

if ($inseriu){
    echo  "gravou!";
}else{
    echo  "ai meu deus!";
}
//fim INSERT 

$apagou = $bd -> exec ('DELETE FROM tarefa WHERE id = 18');
//variável DELETE

if ($apagou){
    echo  "<br> apagou!";
}else{
    echo  "<br> ai meu deus, não apagou!";
}
//fim DELETE

