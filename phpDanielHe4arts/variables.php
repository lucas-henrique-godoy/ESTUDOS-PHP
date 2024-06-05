<?php

/**
 * Aula sobre variaveis
 * 
 * Nessa aula é explicado como declarar variaveis no PHP
 * e quais sao as regras que devo seguir para que isso aconteça
 */


 $name = "Lucas"; 

 echo  $name . PHP_EOL;

 $name = "Lucas programador";
 
 echo  $name . PHP_EOL;

 $age = 26;
 echo $age . PHP_EOL;

 $data = [
    'name' => 'Lucas',
    'age' => 26,
   'city' => 'Jundiaí',
   'status' => true
 ];

 echo $data['name'] . PHP_EOL;

 define('google', 'https://www.google.com.br'); //gera uma constante 
 echo google;












