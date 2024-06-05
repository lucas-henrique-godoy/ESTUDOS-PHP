<?php
/**
 * Aula sobre Condições ternárias
 * 
 * Nessa aula é explicado sobre Estruturas Condicionais ternárias.
 * Usar operador ternário ajuda na escrita de condições if/else dimunuindo
 * para uma única linha. Ou seja, será algo para ser usado quando 
 * você tem uma fácil comparação e um retorno SIMPLES. Ex: uma validação bem rapida e que nao irá impactar no processo inteiro, não é para ser usado para tudo.
 * 
 * condição ? retorno verdadeiro : retorno falso
 */

 $underage = $age = 26;          //Pode ser assim tambem: echo $age >= 18 ? 'Sim você é maior de idade' : 'Não voce não é maior de idade';
                                 //Neste exemplo a variavle $underage nao era necessaria para que o código funcionasse, mas foi so um exemplo de como tambem poderia ser o uso do operador ternário   
 echo $age >= 18 
 ? 'Sim você é maior de idade'                                               
 : 'Não voce não é maior de idade';

 
 $name = 'Lucas';

 echo $name != 'Henrique' ? 'Sim é  bem diferente' : 'Não é diferente'; 