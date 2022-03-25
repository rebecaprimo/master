<?php
require 'conexao.php';

$atualizar = $bd -> query('SELECT id, descricao FROM tarefa');

$atualizar -> execute();

echo "<table border='1'>
        <tr>
        <td>ID</td><td>DESCRIÇÃO</td></tr>";

while ($registro = $atualizar -> fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
          <td>{$registro['id']}</td>
          <td>{$registro['descricao']}</td>
          </tr>";
}

