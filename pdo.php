<?php
//conecta no banco de dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass); //ligando o php ao banco de dados
//FIM conecta no banco de dados

//INSERT
$inseriu = $bd -> exec ('INSERT INTO tarefa (descricao) VALUES ("tarefa inserida via PHP")'); //atribuindo variável para INSERT

if ($inseriu){
    echo  "gravou!";
}else{
    echo  "ai meu deus!";
}
//fim INSERT 

$apagou = $bd -> exec ('DELETE FROM tarefa WHERE id = 13');
//variável DELETE

if ($apagou){
    echo  "<br> apagou!";
}else{
    echo  "<br> ai meu deus, não apagou!";
}
//fim DELETE

