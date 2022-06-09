<?php
require 'conexao.php';//atribuindo conteúdo do arquivo conexao.php

$atualizar = $bd -> query('SELECT id, descricao FROM tarefa');//atribuindo variavel ao comando SQL

$atualizar -> execute();

echo "<table border='1'>
        <tr>
        <td>ID</td><td>DESCRIÇÃO</td></tr>";

while ($registro = $atualizar -> fetch(PDO::FETCH_ASSOC)){//fetch: Busca a próxima linha de um conjunto de resultados.
    echo "<tr>
          <td>{$registro['id']}</td>
          <td>{$registro['descricao']}</td>
          </tr>";
}

