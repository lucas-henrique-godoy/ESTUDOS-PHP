<?php
/**
 * Aula sobre repetição WHILE
 * 
 * Nessa aula é explicado sobre laço de repetição WHILE, onde
 * você só precisa que a condição seja verdadeira para que 
 * o laço continue repetindo.
 * 
 * while(condição) {}
 */

 #EX-01
//$estouEmpregado = true;
//$commitsZuados = 0;

//while ($estouEmpregado) {
//echo "Eu fiz " . $commitsZuados . " commits zoados e meu superior não curtiu " . PHP_EOL;
//    $commitsZuados++;
//    if ($commitsZuados == 8) {
//        $estouEmpregado = false;
//        echo "Pronto agora estou desempregado, tmabém conhecido como freelancer" . PHP_EOL;
// }
//}



$healthPoints = 100;                                                        // Define os pontos de vida inicial do personagem
$maxhealthPoints = 100;                                                     // Define o máximo de pontos de vida do personagem (não parece ser usado neste exemplo)
$monsterAttackDamage = 5;                                                   // Define o dano do ataque do monstro

while ($healthPoints > 0 ) {                                                // Loop enquanto os pontos de vida do personagem forem maiores que 0
    echo "HP:  $healthPoints/$maxhealthPoints" . PHP_EOL;                   // Exibe os pontos de vida atuais do personagem e o máximo de pontos de vida
    echo "Personagem atacado! -$monsterAttackDamage de HP! " . PHP_EOL;     // Exibe uma mensagem indicando que o personagem foi atacado e mostra o dano do ataque

    $healthPoints -= $monsterAttackDamage;                                  // Reduz os pontos de vida do personagem pelo dano do ataque do monstro

    if ($healthPoints <= 0) {                                               // Verifica se os pontos de vida do personagem chegaram a 0 ou menos
        echo "Personagem morreu infelizmente" . PHP_EOL;                    // Se sim, exibe uma mensagem indicando que o personagem morreu
    }
}
