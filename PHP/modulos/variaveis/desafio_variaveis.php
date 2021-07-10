<div class="titulo">Desafio Variáveis</div>

<?php
$a = 'Nossa';
$Nossa = 'eu';
$eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo '$a = ', $a, '<br>';
echo '$Nossa = ', $Nossa, '<br>';
echo '$eu = ', $eu, '<br>';
echo '$consegui = ', $consegui, '<br>';
echo '$responder = ', $responder, '<br>';
echo '$esse = ', $esse, '<br> <br>';

echo '$a {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a} = ', "$a {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}";
?>