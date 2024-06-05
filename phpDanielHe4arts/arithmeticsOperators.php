<?php

/**
 * Aula sobre operadores aritméticos
 * 
 * Nessa aula é explicado como utilizar operadores aritméticos no php
 * e fazer contas simples
 * 
 * Operadores: +, -, /, * , %.
 */
// SOMA
 $itemA = 10;
 $itemB = 20;
 $itemC = ($itemA + $itemB + 10) + 10;
// Mostrando Resultado
 echo $itemC . PHP_EOL;

// SUBTRAÇÃO
 $itemA = 25;
 $itemB = 5;
 $itemC = ($itemB - $itemA) + 100 - 50;
// Mostrando Resultado
 echo $itemC. PHP_EOL;

 // DIVISÃO
$itemC = $itemA / $itemB;
// Mostrando Resultado
echo $itemC . PHP_EOL;

// MULTIPLICAÇÃO
$itemA = 15;
$itemB = 3;
$itemC = ($itemA * $itemB) - 20 + ($itemA - 5);
// Mostrando Resultado
echo $itemC . PHP_EOL;

//MÓDULO OU RESTO DA DIVISÃO
$itemA = 20;
$itemB = 2;
$itemC = $itemA % $itemB;
// Mostrando Resultado
echo $itemC . PHP_EOL;

 