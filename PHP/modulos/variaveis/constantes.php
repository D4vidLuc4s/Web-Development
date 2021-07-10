<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo 'define(\'TAXA_DE_JUROS\', 5.9)', '<br>';
echo 'TAXA_DE_JUROS = ', TAXA_DE_JUROS, '<br>';

const NOVA_TAXA = 2.5;
echo 'const NOVA_TAXA = 2.5', '<br>';

$valorVariavel = 2.8;
echo '$valorVariavel = ', $valorVariavel, '<br>';
echo 'define(\'NOVISSIMA_TAXA\', $valorVariavel)', '<br>';
define('NOVISSIMA_TAXA', $valorVariavel);
echo 'NOVISSIMA_TAXA = ', NOVISSIMA_TAXA, '<br> <br>';

echo 'PHP_VERSION = ', PHP_VERSION, '<br>';
echo 'PHP_INT_MAX = ', PHP_INT_MAX, '<br>';
echo '__LINE__ = ', __LINE__, '<br>';
echo '__FILE__ = ', __FILE__, '<br>';
echo '__DIR__ = ', __DIR__, '<br>';r
?>