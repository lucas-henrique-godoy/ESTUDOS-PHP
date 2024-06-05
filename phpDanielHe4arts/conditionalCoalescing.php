<?php
/**
 *  Aula sobre Condições de Coalescência nula.
 * 
 *  Nessa aula é explicado sobre Coalescência nula, onde você faz uma checagem
 *  de uma variável e vê se há um valor dentro da mesma (ou ele não existir), caso não você já retorna
 *  um valor padrão.
 * 
 *  valorPredefinido ?? retorno caso nao exista valor;      (Coalescência nula.)
 * 
 *                         V
 * 
 *  isset(valorPredefinido) ? valorPredefinido : retorno caso não exista valor; (TERNÁRIO)
 */
    
 
 //EX-01
 $user = [
    'name' => 'Lucas',      //Caso esse valor $name => 'Lucas' não seja colocado ou não exista o valor que sera exibido sera : 'Henrique'. Ou seja caso nehum desses tiver funcionando retorna o valor após 
    'age' => 26,
    'twich' => 'partner'
];

echo $user['name']  ?? 'Henrique';    
$user['name'] ?? $user['twich'] ?? 'Henrique';          //É possivel encadear as Coalescências nulas. Ex: echo 


//EX-02
$user = [
    'name' => 'Lucas',      
    'age' => 26,
    'twich' => 'partner'
];

echo $user['sub'] ?? 'deixa a sub no canal';  //Neste exemplo o professor fez uma brincadeira perguntando se o $user Lucas é um inscrito(sub), viu-se que não é entao o retorno padrão foi: 'deixa a sub no canal'.