<?php
/**
 * Aula sobre tipos de dados
 * 
 * Nessa aula é explicado os tipos de dados que sao utilizados pelo php
 * 
 * Os tipos comentados: String, Boolean, Integer, Double e Array.
 * 
 */

 var_dump(value:"Salve"); //String
 var_dump(value:true); //Boolean
 var_dump(value:false); //Boolean
 var_dump(value:123456);//Integer o uInt
 var_dump(value:123456752727.134565275275375); //Double ou Float
 
 $dados = ["name" => "Lucas",26,"Jundiaí"]; //Array
 var_dump(value:$dados["name"]); //Array


 /**
  * var_dump() é uma função em PHP usada para exibir informações detalhadas sobre uma ou mais variáveis, incluindo o tipo de dado e seu valor. É útil para depurar e entender o conteúdo das variáveis durante o desenvolvimento de um programa PHP. Ao usar var_dump(), você pode ver informações como o tipo de dado (string, integer, array, etc.), o tamanho (no caso de strings e arrays), e o valor da variável. Isso pode ser especialmente útil ao lidar com variáveis complexas, como arrays multidimensionais ou objetos.
  */