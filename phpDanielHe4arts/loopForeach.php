<?php
/**
 * Aula sobre repetoção ForEach
 * 
 * Nessa aula é explicado sobre o laço de repetição ForEach, onde
 * você passará algum dado que seja iterável como uma stdClass ou
 * array, podendo separar por chave e valor.
 * 
 * foreach(dadoIteravel as  dado) {} 
 */

 #EX-01
 $user = [                    
  'name' => 'Lucas',               //Este código cria um array associativo chamado $user com três chaves: 'name', 'age' e 'employed', cada uma associada a um valor. Em seguida, ele percorre o array usando um loop foreach e imprime cada chave e seu valor correspondente. O PHP_EOL é usado para adicionar uma quebra de linha após cada impressão. Funcionamento:
   'age' => 26,                    //Funciona corretamente.
  'employed' => true               //Neste exemplo ele esta iterando sobre as chaves ex: 'name', 'age', e os valores (são os que ficam de pois de =>).
 ];

 foreach ($user  as $key => $value) {
   echo $key . " " .  $value. PHP_EOL;
 }



 #EX-02- Array Associativo Multidimensional.
 $users = [
   [                             
   'name' => 'Lucas',
   'age' => 26,
   'employed' => true
   ],

   [
   'name' => 'Carlos',
   'age' => 40,
   'employed' => true
   ],

   [
      'name' => 'Julia',
   'age' => 18,
   'employed' => true
   ],

   [
   'name' => 'Ana',
   'age' => 50,
   'employed' => true
   ],

   [
   'name' => 'Rita',
   'age' => 96,
   'employed' => true
   ]

 ];

 foreach ($users  as $key) {
   echo $key . " " . $value['name'] . PHP_EOL; //Posso colocoar qualquer um dos valores de chave do array para pegar os valores. Seja name, age, ou employed. Assim eele me retorna seus respectivos valores. 
 }

//Este código cria um array multidimensional chamado $users, onde cada elemento é um array associativo representando um usuário com as mesmas chaves ('name', 'age', 'employed'). Em seguida, ele percorre o array $users usando um loop foreach, mas há um problema com a impressão dentro do loop. 
//Problema:
//$key é um array associativo, e não uma string ou um valor escalar.
//Tentar imprimir um array diretamente resultará em um erro.
//Este código não funcionará conforme esperado.
//Diferenças:
//O primeiro código usa um array associativo simples, enquanto o segundo usa um array multidimensional.
//O primeiro código percorre o array usando foreach ($user as $key => $value), onde $key representa a chave e $value representa o valor correspondente, enquanto o segundo código percorre o array usando foreach ($users as $key), onde $key representa cada elemento do array (que é um array associativo de usuário). Além do que não é possivel converter um array para string.


#EX-03- Standart Class.
$user = new stdClass;   // Criando um objeto stdClass vazio

$user -> name = "Lucas"; // Adicionando a propriedade 'name' ao objeto e definindo o valor como "Lucas"
$user -> age = 26;    // Adicionando a propriedade 'age' ao objeto e definindo o valor como 26

foreach ($user as $key => $value) {
  echo $key . " " . $value . PHP_EOL; // Imprime o nome da propriedade seguido de seu valor
}


#EX-04- Iterando valores.
$names = ['Lucas', 'Julia', 'Ana', 'Carlos', 'Wendel', 'Gabriel', 'Henrique'];

foreach ($names as $key => $name) {   //LEMBRETE: NÃO SE PRENDA A NOMES DE VARIÁVEIS, ELES PODEM SER WUALQUER COISA, MAS COLOQUE NOEMS QUE FAÇAM SENTIDO PARA ENTENDER O  SEU CÓDIGO.
  echo $key. " ".  $name .PHP_EOL;
};

//O loop foi criado com a variável $names para representar um array contendo uma lista de nomes. O nome singular $name é usado dentro do loop para representar cada nome individualmente durante cada iteração.

//Essa prática é bastante comum em programação quando se trabalha com arrays. A variável no plural ($names, no caso) geralmente é usada para denotar uma coleção de elementos, enquanto a variável no singular ($name, no caso) é usada dentro do loop para representar cada elemento individual da coleção.

// Por exemplo, se tivermos um array de nomes, podemos iterar sobre cada nome individualmente usando um loop foreach. Dentro do loop, a variável singular $name contém o valor do nome atual, enquanto a variável $key contém o índice associado a esse nome dentro do array $names, se o array estiver indexado numericamente.

