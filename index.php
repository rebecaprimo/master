<?php

//comentário de linha

/*
comentário de bloco
*/

//define('XPTO', 'valor sempre igual'); 
//define serve para definir constantes; a ordem eh o nome da constante + o valor que não se altera

//echo XPTO;

$num = 2;

$var = '<br>' . "olá mundo! $num"; 
//o ponto eh o operador de concatenação;
//para interpolar dados eh necessário aspas duplas;
//aspas simples são apenas para strings sozinhas. 

//echo $var;

//var_dump($var);

//phpinfo(); informações importantes, como variavéis do ambiente

/*$domingo = 'domingo';
$segunda = 'segunda-feira';
$terca = 'terça-feira';
$quarta = 'quarta-feira';
$quinta = 'quinta-feira';
$sexta = 'sexta-feira';
$sabado = 'sábado';*/

$diaSemana = [1 => 'domingo', 
              2 => 'segunda-feira', 
              5 => 'terça-feira', 
              8 => 'quarta-feira', 
              10 => 'quinta-feira', 
              3 => 'sexta-feira', 
              4 => 'sábado'];

echo "<pre>";

//$contatos = ['carol', 'camilla', 'robson'];
//var_dump($contatos);

//echo "<br>hoje eh {$diaSemana[10]}"; //exemplo sem interpolação
//echo '<br>hoje eh ' . $diaSemana[2]; //exemplo com interpolação

$usuario[0] = ['nome' => 'Luiz', 'senha' => '123'];
$usuario[1] = ['nome' => 'Fer', 'senha' => '321'];
$usuario[2] = ['nome' => 'Bono', 'senha' => '627'];

echo "<pre>\n\n";

var_dump($usuario);