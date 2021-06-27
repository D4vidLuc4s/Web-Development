<div class="titulo">Operações Aritméticas</div>

<?php
echo '1 + 1 = ', 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo '1 + 2.5 = ', 1 + 2.5, '<br>';
var_dump(1 + 2.5);
echo '<br>';
echo '10 - 2 = ', 10 - 2, '<br>';
echo '2 * 5 = ', 2 * 5, '<br>';
echo '7 / 4 = ', 7 / 4, '<br>', '<br>';

echo 'Função "intdiv" utilizada para remover o decimal de uma divisão',  '<br>';
echo 'Ex: ';
echo 'intdiv(7, 4) = ', intdiv(7, 4), '<br>';
echo 'O resultado correto seria "1,75". Porém a função intdiv removeu o decimal.', '<br>', '<br>';

echo 'Função "round" utilizada para arredondar um resultado', '<br>';
echo 'Ex: ';
echo 'round(7 / 4) = ', round(7 / 4), '<br>';
echo 'O resultado dessa divisão seria "1,75". Porém com o arredondamento ele vai para "2".', '<br>', '<br>';

echo '7 % 4 = ', 7 % 4, '<br>';
echo '7 / 0 = ', 7 / 0, '<br>';
echo '7 / 0.000001 = ', 7 / 0.000001, '<br>';
echo ' 4 ** 2 = ', 4 ** 2, '<br>';

echo '<h3> Precedência de operadores: </h3>';
echo '() => ** => / => * => % => + -', '<br>', '<br>';
echo '2 + 3 * 4 = ', 2 + 3 * 4, '<br>';
echo '(2 + 3) * 4 = ', (2 + 3) * 4, '<br>';
echo '2 + 3 * 4 ** 2 = ', 2 + 3 * 4 ** 2, '<br>';
echo ' ((2 + 3) * 4) ** 2 = ', ((2 + 3) * 4) ** 2, '<br>';''
?>