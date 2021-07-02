<div class="titulo">Desafio Equação</div>

<?php
$varA = (6 *(3 + 2)) ** 2;
$denA = 3 * 2;
$varB = (1 - 5) * (2 - 7);
$denB = 2;
$supA = $varA / $denA;
$supB = ($varB / $denB) ** 2;
$sup = ($supA - $supB) ** 3;
$inf = 10 ** 3;
$fim = $sup / $inf;

echo '$varA = (6 *(3 + 2)) ** 2 = ', $varA, '<br>';
echo '$denA = 3 * 2 = ', $denA, '<br>';
echo '$varB = (1 - 5) * (2 - 7) = ', $varB, '<br>';
echo '$denB = 2', '<br>';
echo '$supA = $varB / $denA = ', $supA, '<br>';
echo '$supB = ($varB / $denB) ** 2 = ', $supB, '<br>';
echo '$sup = ($supA - $supB) ** 3 = ', $sup, '<br>';
echo '$inf = 10 ** 3 = ', $inf, '<br>';
echo '$fim = $sup / $inf = ', $fim;
?>