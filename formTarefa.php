<?php
require 'conexao.php'; //chamando arquivo que conecta ao banco

$tarefa = $_POST['tarefa']; //tarefa recebe o dado do usuário / dado inseguro

$atualizar = $bd -> prepare('INSERT INTO tarefa (descricao) VALUES (:tarefa)'); //prepara a consulta SQL para ser executada e retorna um objeto statement

$atualizar -> bindParam (':tarefa', $tarefa); //impede que dados do usário ($tarefa) sejam interpretados como comandos SQL e se tornam apenas texto comum no BD

if ($atualizar -> execute()){ //inserindo dados recebidos do formulário HTML
    echo "$tarefa adicionada com sucesso!";
}else{
    echo "tarefa não adicionada, tente novamente! :(";
}

echo "<table><br><a href='formulario.html'>Volte para o formulário</a>";
