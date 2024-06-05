<?php
/**
 * AULA SOBRE CONDIÇÕES IF/ELSE, ELSE/IF
 * 
 * Nessa aula é explicado  sobre Estruturas Condicionais de controle.
 * O resultado final é você conseguir fazer checagens para caso algo
 * for VERDADEIRO ou FALSO, dando um fim diferente paara cada uma
 * das condições.
 * 
 * SE (CONDIÇÃO) {
 *    diga 'eae Lucas'; *  
 * } SENAO {
 *     diga 'tchau Lucas'; 
 * }
 */

 $name = 'Henrique';
 $employed = true;
 $age = 26;

 if ($name == 'Lucasheriquegodoy') {
    echo 'Acessa o canal do Lucas no youtube' . PHP_EOL;
 } else if ($name == 'Henriquevsvs') {
    //  echo 'O Henrique que esta editando esses vídeos' . PHP_EOL;
 } else {
     echo'Puts voce ainda não é sub do Lucas' . PHP_EOL;
 }


 $name = 'Henrique';
 $employed = false;
 $age = 26;

 if (($age >= 18 ) || $employed ) {
    echo 'Cara voce é maior de idade passa o sub porque talvez você tenha emprego';
 } else {
    echo 'Mano você não é maior de idade OU você não tem emprego';
 }