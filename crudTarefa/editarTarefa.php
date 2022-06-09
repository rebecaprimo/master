<?php
require 'controleDeAcesso.php';
require_once 'conexao.php'; //acessando esses arquivos

$id = preg_replace('/\D/', '', $_POST['id']);//Realiza uma pesquisa por uma expressão regular e a substitui.

//Atualiza o registro
if(isset($_POST['tarefa'])){//Informa se a variável foi iniciada

    $stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id');
    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':id', $id);//cria um parametro para uma variável específica

    if($stmt->execute()){
        echo "Tarefa atualizada";
    }else{
        echo "Erro ao atualizar a tarefa";
    }
}//FIM Atualiza o registro

$stmt = $bd->query("SELECT descricao FROM tarefas WHERE id = $id");
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);//Busca a próxima linha de um conjunto de resultados

echo "  <form method='post'>
            <label for='tarefa'>Tarefa</label>
            <input type='text' id='tarefa' name='tarefa' 
                value='{$tarefa['descricao']}'><br><br>
            <input type='hidden' name='id' value='$id'>
            <input type='submit' value='Atualizar'>
        </form><br><br><a href='listarTarefa.php'>Voltar</a>";  