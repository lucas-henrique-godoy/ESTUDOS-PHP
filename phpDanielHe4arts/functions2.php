<?php
/**
 * Como declarar funções de um jeito que todos vão te agradecer:
 */
#EX-01
 function calculoBaseX(float $x, int $y) {

 }; 
 
 //Colocar nomes explicativos e tipar os parâmetros. o PHP aceita que os tipos dos parâmetros sejam diferentes. Você pode definir os tipos dos parâmetros em uma função para ajudar a garantir que os tipos de dados corretos sejam passados quando a função é chamada, mas não é obrigatório que os tipos dos parâmetros sejam os mesmos.A partir do PHP 7, você pode definir tipos de parâmetros, mas é importante notar que isso não impede que você passe tipos diferentes quando a função é chamada. Se o tipo passado não corresponder ao tipo definido na função, o PHP tentará converter o valor para o tipo correto, se possível, ou emitirá um aviso (ou erro, dependendo das configurações do PHP). Então, sim, sua função calculoBaseX funcionaria mesmo com tipos de parâmetros diferentes, como no exemplo em que $x é um int e $y é um float. O PHP fará a conversão automática do tipo, se necessário.
   

 
#______________________________________________________________________________________________________________
 
 #EX-02
 function sendMessageToTwitch(string $user, string $message){ //Foi recomendado pelo Danielhe4rt usar esse padrão.

}

/**
 * Camel Case
 * Primeira palavra sempre sem capitalização e todas as próximas com capitalização. Lower Camel Case (ou camelCase): Na Lower Camel Case, a primeira letra da identificação é minúscula e cada palavra subsequente tem sua primeira letra maiúscula, sem espaços ou caracteres especiais entre as palavras. Exemplo: nomeDaVariavel, calculoBaseX, estaEhUmaFrase. 
 */


#EX-03
/**
 * Snake Case
 * palavras sem capitalização e divididas por underlines.
 */

 function send_message(string $nickname, string $message) 
{
    echo "[" . date( format: 'Y-m-d H:i:s') . "] $nickname:" . strtoupper($message) . PHP_EOL;           
}
 

#EX-04 
/**
 * Pascal Case
 * Palavras com capitalização.
*/
 
 function SendMessage(string $nickname, string $message) 
{
    echo "[" . date( format: 'Y-m-d H:i:s') . "] $nickname:" . strtoupper($message) . PHP_EOL;           
}


#EX-05 Rtorno de função

function sendMessage(string $nickname, string $message): string //Tipo do retorno.
{
    return "[" . date( format: 'Y-m-d H:i:s') . "] $nickname:" . strtoupper($message) . PHP_EOL;           
}

 $result = sendMessage(nickname: 'Lucas', message: 'EAE'); //A variavel result tem o conteúdo do retorno da função.
 echo $result; //Mostrando o conteúdo da função contido pela variável $result.
 