<?php
//SELECT coluna1, coluna2 FROM tabela WHERE colunaX = valor; -> chamar tabelas
//UPDATE tabela SET coluna1 = valor, coluna2 = valor WHERE colunaX = valor; -> atualizar tabelas
//INSERT INTO coluna 1 = valor, coluna2 = valor WHERE colunaX = valor; -> inserir valores nas tabelas
//DELETE FROM tabela WHERE coluna = valor; -> excluir dados das tabelas

require 'conexao.php';

//UPDATE - atualizar um registro
$atualizar = $bd -> exec ('UPDATE tarefa SET descricao = "to mudando" WHERE id = 9');

//condição: mensagem para o usuário
if ($atualizar){
    echo  'atualizou!';
}else{
    echo  'ai meu deus!';
}
// fim UPDATE

