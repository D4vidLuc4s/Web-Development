<div class="titulo">Atribuições</div>

<?php
echo '$title = ', $title = 'Atribuições', '<br>';
echo '$numero = ', $numero = 10, '<br>';
echo '$numero = $numero - 6 = ', $numero = $numero - 6, '<br>';
echo '$numero = $numero + 1.5 = ', $numero = $numero + 1.5, '<br>';
$numero--;
echo '$numero-- = ', $numero, '<br>';
--$numero;
echo '--$numero = ', $numero, '<br>';
$numero++;
echo '$numero++ = ', $numero, '<br>';
++$numero;
echo '++$numero = ', $numero, '<br>';
echo '$numero -= 5 = ', $numero -= 5, '<br>';
echo '$numero += 5 = ', $numero += 5, '<br>';
echo '$numero *= 10 = ', $numero *= 10, '<br>';
echo '$numero /= 2 = ', $numero /= 2, '<br>';
echo '$numero %= 6 = ', $numero %= 6, '<br>';
echo '$numero **= 4 = ', $numero **= 4, '<br> <br>';

$texto = 'Esse é um texto';
echo '$texto = ', $texto, '<br>';
$texto = $texto . ' de teste';
echo '$texto = $texto . \' de teste\' = ', $texto, '<br>';

$variavelInexistente = 'valor existente';
echo '$variavelInexistente = \'valor existente\'', '<br>';
$valor = $variavelInexistente ?? 'valor default';
echo '$valor = $variavelInexistente ?? \'valor default\' = ', $valor, '<br>';
?>