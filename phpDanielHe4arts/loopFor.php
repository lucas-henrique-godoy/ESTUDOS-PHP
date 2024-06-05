<?php
/**
 * Aula sobre Laço de Repetição FOR
 * 
 * Nessa aula é explicado sobre laço de repetição de um jeito bem
 * quinta série, para que você consiga entender mesmo não querendo entender.
 * 
 * for(valor inicial; condição; incremento/decremento) {}
 */

 //EX-01
 echo 'Lucas esta pretando atenção na aula' . PHP_EOL; 

for ($borrachada = 0; $borrachada <= 7 ; $borrachada++) { 
    echo 'O Lucas tomou' . ' ' . $borrachada . ' ' . 'borrachada do amiguinho!' . PHP_EOL;
}

echo 'Lucas esta extremamente puto neste momento o com amiguinho ' . PHP_EOL;


//EX-02-Tabuada
$tabuada = 1;
for ($i = 1; $i <= 10 ; $i++) { 
    echo " $tabuada  X $i = " . ($tabuada * $i) . PHP_EOL;    
}
