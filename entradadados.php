<?php

$dado = $_POST['nome'];//método de entrada no form
$numero = $_POST['num'];//metodo de entrada no form

echo "$dado, seja bem vindo (a)."; //impressão inicial



for ($i = 0 ; $i < $numero && $numero < 1000 ; $i++){//repetição de vezes a ser impressa, dependendo do que o usuário digitou
    echo "<br>$dado";
}

$f = fopen( 'nomes.csv' , 'a'); // grava no arquivo csv o que é inserido
$recebeu = fwrite($f, "$dado, $numero\n");
fclose($f);