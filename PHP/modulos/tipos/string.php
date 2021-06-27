<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

echo '<h3>Concatenação</h3>';
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", " virgulas", '<br>';

echo"'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" ", '<br>';

print("<br> Também existe a função print <br>");


print "<h3>Algumas funções</h3>";

echo 'Colocar tudo em maiusculo com a função "strtoupper": ', '<br>';
echo 'strtoupper(\'maximizado\') = ', strtoupper('maximizado'); 

echo '<br> <br>', 'Colocar tudo em minusculo com a função strtolower: <br>';
echo 'strtolower(\'MAXIMIZADO\') = ', strtolower('MAXIMIZADO');

echo '<br> <br> Somente a primeira letra em maiusculo com a função "ucfirst": <br>';
echo 'ucfirst(\'apenas a primeira\') = ', ucfirst('apenas a primeira');

echo '<br> <br> Todas as primeiras letras em maiusculo com a função "ucwords": <br>';
echo 'ucwords(\'só as primeiras letras\') = ', ucwords('só as primeiras letras');

echo '<br> <br> Saber o tamanho da string com a função "strlen": <br>';
echo 'strlen(\'Qual o meu tamanho?\') = ', strlen('Qual o meu tamanho?'), '<br>';
echo 'Obs: Os espaços em branco e acentos também são contados. <br> <br>';

echo 'Caso não queira que os acentos entrem na contagem, basta adicionar o "mb_" na frente. <br>';
echo 'Ex: <br>';
echo 'strlen(\'Só um teste\') = ', strlen('Só um teste'), '<br>';
echo 'mb_strlen(\'Só um teste\') = ', mb_strlen('Só um teste'), '<br> <br>';

echo 'Selecionar apenas um trecho com a função "substr": <br>';
echo 'substr(\'Só uma parte mesmo, 7, 6\') = ', substr('Só uma parte mesmo', 7, 6), '<br>';
echo 'Nos parãmetros passados, ele irá selecionar a partir do 7° caractere os próximos 6 caracteres.', '<br> <br>';

echo 'Substituir uma palavra numa frase com a função "str_replace": <br>';
echo 'str_replace(\'queijo\', \'frango\', \'Quero pastel de queijo\') = ', str_replace('queijo', 'frango', 'Quero pastel de queijo.'), '<br>';
echo 'Nessa função o primeiro parâmetro é a palavra que será substituida. O segundo parâmetro é a palavra que irá substituir e o terceiro parâmetro é a frase na qual será procurada a palavra para substituir. <br>'; 
?>