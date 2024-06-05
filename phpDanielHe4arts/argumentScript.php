<?php
/**
 * Aula sobre argumentos em Scripts PHP
 * 
 * Saber como criar scripts em PHP pode te salvar um bom tempo
 * enquanto faz algum tipo de tarefa cotidiana, porem saber usar 
 * seus argumentos de forma simples, pode ajudar ainda mais.
 * 
 * Executando scripts sem argumentos:
 * php argumentScript.php
 * 
 * Executando scripts com argumentos:
 * php argumentScript.php variavel1 variavel2
 *  
 */

 #EX-01
 //var_dump($argv);       // $argv é uma variável especial em PHP que contém uma matriz (array) dos argumentos passados para o script PHP quando ele é executado a partir da linha de comando. 
                        //var_dump($argv); exibe detalhes sobre os argumentos passados para um script PHP via linha de comando, representados como uma matriz, sendo útil para depurar e entender os dados recebidos.


#EX-02     
if (!isset($argv[1])){       //isset serve para verificar se uma posição de um array ou objeto existe.
    die('Preencha um argumento. EX: php argumentScript.php 23' . PHP_EOL);
}

$age = $argv[1];

if (!is_numeric($age)){
    die('cara manda um número');
}


if ($age >= 18) {
    echo 'Cara parabens, você é maior de idade! ';    
} else {
    echo 'Mano você não é maior de idade você tem ' . $age. ' anos ';
}
    
/**↑Este trecho de código PHP verifica se um argumento foi passado para o script via linha de comando e, em seguida, verifica se esse argumento é um número e se é maior ou igual a 18. Vou explicar linha por linha:

if (!isset($argv[1])) {: Esta linha verifica se o primeiro argumento ($argv[1]) não está definido. Se não estiver definido, significa que nenhum argumento foi passado para o script. Nesse caso, o script é encerrado e uma mensagem de erro é exibida, pedindo para preencher um argumento.

$age = $argv[1];: Esta linha atribui o valor do primeiro argumento passado para a variável $age.

if (!is_numeric($age)) {: Esta linha verifica se o valor de $age não é um número. Se não for, significa que o argumento passado não é um número válido. Nesse caso, o script é encerrado e uma mensagem de erro é exibida, solicitando que um número seja passado como argumento.

if ($age >= 18) {: Esta linha verifica se o valor de $age é maior ou igual a 18. Se for, significa que a pessoa é maior de idade. Nesse caso, uma mensagem de parabéns é exibida.

else {: Se a condição anterior não for verdadeira (ou seja, se a pessoa não for maior de idade), esta linha é executada.

echo 'Mano você não é maior de idade você tem ' . $age . ' anos ';: Aqui é exibida uma mensagem informando que a pessoa não é maior de idade e mostra a idade dela.

Este trecho de código é útil para scripts PHP que precisam validar e lidar com argumentos passados via linha de comando, realizando diferentes ações com base nesses argumentos. */