<?php

/**
 * Aula sobre operadores de comparação
 * 
 * Nessa aula é explicado sobre como utilizar operadores de comparação
 * onde conseguirei retornar expressões boleanas para meu código.
 * 
 * Operadores: ==, ===, !=, !==.
 * Operadores: >, >=, <, <=.
 */

 // OPERADOR DE IGUALDADE ==  usado para comparar se dois valores são iguais, sem levar em consideração o tipo dos valores. Ele retorna true se os valores comparados forem iguais, mesmo que sejam de tipos diferentes. Caso contrário, retorna false.
 var_dump( 1 == 1);
 var_dump( '1' == 1);  //transforma a string em inteiro e compara, não verifica o tipo do dado e ve se é possivel converter para um tipo expecífico.
 var_dump( 1 == 2);
 $password = 'secret';
 var_dump( $password == 'secret123');

 
 // OPERADOR DE DIFERENÇA !=
 var_dump( 1 != 1);
 $password = 'lalala';
 var_dump( $password != 'secret123');



 //OPERADOR IDENTICO ===          Leva em consideração tanto o valor quanto o tipo.
 var_dump( '1' === 1);    //Checa o tipo do dado. Uma string sendo comparado a um tipo inteiro, neste operador o resultado sera false.
 var_dump( 1 === 1);      //Neste exemplo sera true.


 //OPERADOR NÃO IDENTICO !==
 var_dump( '1' !== 1);    
 var_dump( 1 !== 1); 

  //OPERADOR MAIOR >
 $number = 6;
 var_dump( $number > 5);

  //OPERADOR MAIOR OU IGUAL >=
  $number = 2;
  var_dump($number >= 1); 


   //OPERADOR MENOR <
   $number = 2;
   var_dump($number < 3);


   //OPERADOR MENOR  OU IGUAL <=
   $number = 2;
   var_dump($number <= 1);



   

