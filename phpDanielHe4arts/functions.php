<?php
/**
 * Aula sobre funções
 * 
 * Nessa aula é explicado sobre funções
 * A idéia de função é criar um bloco de código reutilizável
 * onde você pode aplicar  tanto para utilizar em outras partes do código 
 * quanto para melhorar sua legibilidade.
 * 
 * Sintaxe de criação de uma função:
 * 
 * function NOME_DA_FUNÇÃO(argumentos) {} 
 */

 #EXEMPLO Você está demonstrando como uma função pode simplificar o código, eliminando a necessidade de repetir várias vezes o mesmo trecho de código. Em vez de escrever várias linhas para exibir mensagens com nomes diferentes, você criou uma função sendMessage que recebe um apelido (nickname) e uma mensagem (message) como parâmetros e imprime a mensagem formatada com a data e hora atual.Após definir a função sendMessage, você a chama uma vez passando os valores específicos para o apelido e a mensagem desejada. Isso simplifica muito o código e torna mais fácil adicionar ou alterar mensagens no futuro, se necessário.A única observação é que a função date deve ser chamada sem o parâmetro format, já que esse parâmetro não existe na função date. Então, a chamada correta seria: date('Y-m-d H:i:s').

#No geral, a abordagem está correta e demonstra uma boa prática de programação para simplificar e reutilizar código.
//echo "[" . date( format: 'Y-m-d H:i:s') . "] lucas :" . strtoupper(string: "salve lucas") . PHP_EOL;
//echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;
//echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;
//echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;
//echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;
///echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;
//echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;
//echo "[" . date( format: 'Y-m-d H:i:s') . "] henrique :" . strtoupper(string: "salve henrique") . PHP_EOL;


function sendMessage(string $nickname, string $message) // Dentro dos () você esta passando parâmetros para a função.
{
    echo "[" . date( format: 'Y-m-d H:i:s') . "] $nickname:" . strtoupper($message) . PHP_EOL;           
}

//Chmando a função e passnado os parâmetros necessários ↓ 
sendMessage(nickname:'Lucas', message: ' Salve udemy');
sendMessage(nickname:'udemy-user', message: ' Salve Lucas');



