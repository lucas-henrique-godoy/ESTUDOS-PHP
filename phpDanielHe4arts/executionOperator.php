<?php
/**
 * Aula sobre operador de Execução
 * 
 * Nessa aula é explicado sobre o Operador de Execução.
 * Esse operador executa um comando a nivel SHELL na sua máquina.
 * equipando as  funções shell_exec(). exec(), shell_exec() e system().
 * 
 * FAVOR NÃO FAZER CAGADINHA COM ESSE OPERADOR, USE COM MODERAÇÃO <!DOCTYPE html>
 * 
 * OPERADOR  ``    /O operador de execução do PHP, representado pelos backticks (``), é usado para executar comandos do sistema operacional(TUDO QUE TIVER DENTRO DE ``), diretamente a partir de um script PHP. Por exemplo, você pode executar comandos de terminal ou shell e obter os resultados de volta no seu código PHP. No entanto, é importante usar essa funcionalidade com cuidado para evitar vulnerabilidades de segurança, especialmente ao lidar com entrada de usuário ou dados dinâmicos. Recomenda-se usar funções específicas de sistema, como exec(), shell_exec(), passthru()`, etc., para interagir com o sistema operacional de maneira mais segura.
 */

 $output = `echo 'eae Lucas'`;

 echo $output;