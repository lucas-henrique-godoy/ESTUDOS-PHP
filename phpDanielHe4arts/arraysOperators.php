<?php
/**
 * Aula sobre operadores de array
 * 
 * Nessa aula é explicado como utilizar operadores para trabalhar
 * com arrays. Os operadores servem tanto para junção quanto para
 * a checagem de arrays.
 * 
 * Operadores: +, =, === 
 */
 
 //OPERADOR DE UNIAO +   Junta 2 arrays em 1 só.
 $user = [
 'name' => 'Lucas',
 'age' => 26
 ];

 $workplace = [
  'companyName' => 'Faacg BRA',
  'role' => 'Backend Dveloper'
 ];

 $all = $user + $workplace;

 print_r($all); //A função print_r() em PHP é usada para imprimir informações sobre uma variável de forma legível para humanos. Ela é frequentemente usada para depuração e visualização de estruturas de dados complexas, como arrays e objetos. Quando você passa um array para a função print_r(), ela exibe o conteúdo do array de forma formatada, tornando mais fácil entender sua estrutura e conteúdo.


 //IGUALDADE == Verifica se os valores de dois operandos são iguais, independentemente de seus tipos de dados.

 $userOne = [
  'name' => 'lucas',
  'age' => 26
 ];

 $userTwo =[
    'name' => 'henrique', 
    'age' => 26
 ];

 var_dump (value: $userOne == $userTwo);


 //IDENTICO === Verifica se os valores e os tipos de dados de dois operandos são idênticos.
 $userOne = [
    'name' => 'lucas',
    'age' => '26'
   ];
  
   $userTwo =[
      'name' => 'lucas', 
      'age' => '26'
   ];
  
   var_dump (value: $userOne === $userTwo);


   //DIFERENÇA != Verifica se os valores de dois operandos são diferentes, independentemente de seus tipos de dados.
   $userOne = [
    'name' => 'lucas',
    'age' => 26
   ];
  
   $userTwo =[
      'name' => 'henrique', 
      'age' => 26
   ];
  
   var_dump (value: $userOne != $userTwo);


   //NÃO IDENTICO !== verifica se os valores e os tipos de dados de dois operandos são diferentes.
   $userOne = [
    'name' => 'lucas',
    'age' => 26
   ];
  
   $userTwo =[
      'name' => 'lucas', 
      'age' => '26'
   ];

   var_dump(value: $userOne !== $userTwo);