<?php

//conecta no banco de dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass); //ligando o php ao banco de dados
//FIM conecta no banco de dados

$consulta = $bd -> query('SELECT id, descricao FROM tarefa'); //consulta
$consulta -> execute(); //executa a consulta
$registro = $consulta -> fetch(PDO::FETCH_ASSOC); //recupera registros, quanto mais vezes repetir, vai mudando o id

//fetch() -> retorna a próxima linha dos resultados
//var_dump($registro); -> mostra no navegador a tabela

echo "<table border='1'>
        <tr>
        <td>ID</td><td>DESCRIÇÃO</td></tr>";

while ($registro = $consulta -> fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
          <td>{$registro['id']}</td>
          <td>{$registro['descricao']}</td>
          </tr>";
}

echo "</table>";
