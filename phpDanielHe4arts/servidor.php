<?php
/**
 * Aula sobre servidores WEB PHP
 * 
 * A facilide de se criar um servidor web com php se resume a 1 comando
 * onde você não precisa baixar nenhum app terceiro que ja venha
 * com Apache (XAMPP, WAMP ou até emsmo o Apache 2) pois o PHP faz
 * isso pra você.
 * 
 * Comando sem diretório específico:
 * php -S localhost:8000      // php -S Siginifica Start Server no ip e porta que eu quiser. E posso deixar localhost(na minha máquina local ou exposto para toda a minha rede). Exposto: php -S 0.0.0.0:8000. Será o meu localhost absoluto, só que exposto para a minha rede local, ou seja quem tiver o meu ip dentro da minha rede pode acessar o meu servidor sem estar no meu pc. ESSE 8000 no final, siginifica que eu tenho que setar uma porta, Danielhe4art sempre usa a 8000.
 * 
 * Comando com diretório específico:
 * php -S localhost:8000 -t /diretorio/que/vc/escolher
 * 
 * OBS: A arquivo index tem esse nome porque ele é o primeiro arquivo a ser interpretado pelo servidor web.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<marquee> <?= microtime() ?></marquee>
</body>
</html>




