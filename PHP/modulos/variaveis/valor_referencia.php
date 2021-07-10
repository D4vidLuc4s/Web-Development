<div class="titulo">Valor VS Referência</div>

<?php
echo '<h3>Atribuição por Valor</h3>';
$variavel = 'valor inicial';
$variavelValor = $variavel;
echo '$variavel = ', $variavel, '<br>';
echo '$variavelValor = ', $variavel, '<br>';
$variavelValor = 'novo valor';
echo '$variavelValor = ', $variavelValor, '<br>';
echo '$variavel = ', $variavel, '<br>';

echo '<h3>Atribuição por Referência</h3>';
$variavelReferencia = &$variavel;
echo '$variavelReferencia = &$variavel', '<br>';
$variavelReferencia = 'mesma referencia';
echo '$variavel = ', $variavel, '<br>';
echo '$variavelReferencia = ', $variavelReferencia, '<br>';
?>