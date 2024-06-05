<?php
/**
 * Aula sobre Operadores lógicos
 * 
 * Nesta aula é explicado como utilizar operadores lógicos, onde
 * tudo é convertido para booleano antes de checar a expressão.
 * 
 * OPERADORES: && , || , ^ , !
 * 
 */

 //OPERADOR 'E' AND &&   /Checa se ambas as  condições são verdadeiras.
 $empregado = true;
 $homeOffice = false;

 var_dump(value: $empregado && $homeOffice);


 //OPERADOR 'OU' OR ||  /Checa se pelo menos 1 condição é verdadeira. Ex: Validações e  casos onde uma coisa é estritamente necessária e a outra nem tanto.
 $empregado = true;  
 $homeOffice = true;

 var_dump(value: $empregado || $homeOffice);
 


//OPERADOR 'OU exclusivo' XOR ^   /Ex: Um dos casos seja true e o outro seja falso.
$empregado = false;
$homeOffice = true; 

var_dump(value: $empregado ^ $homeOffice);


//OPERADOR 'NÃO' NOT ! Casos onde você queira que o resultado seja o contrário.
$empregado = true;

var_dump(!$empregado);
 




