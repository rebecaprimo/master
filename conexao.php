<?php

//conecta no banco de dados
$dsn = 'mysql:dbname=php;host=localhost';//definindo o nome do bd e host
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass); //ligando o php ao banco de dados
//FIM conecta no banco de dados
