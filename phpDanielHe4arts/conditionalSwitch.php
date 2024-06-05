<?php


/**
 * Aula sobre Condicionais de caso.
 * A idéia é fazer condições com uma lista pré definida de valores
 * que podem retornar verdadeiro, tendo uma única opção para retornar
 * falso, sendo ela a default: (padrão).
 * 
 * TROQUE (CONDIÇÃO) {             É como uma lista de posibilidades, se acontecer isso aqui, retorne isso daqui.      
 *    caso VALOR1:
 *          diga 'se inscreva';
 *          pare;
 *    caso VALOR2:
 *          diga 'se inscreva no canal';
 *          pare;
 *    caso não:
 *          diga 'imediatamente';
 *  }
 */


 $name = 'lucas';

 switch($name) {
    case 'lucas':
        echo 'Salve Lucas!';   
        break;             //====> serve para que a linha debaixo não seja executada erroneamente.
    case 'pessoa-da-udemy':
        echo 'Tudo bom? Prazer em te conhecer, sou a pessoa da udemy.';
        break;            
    default:
        echo 'Salve para você que não esta listado acima.';
 }
 