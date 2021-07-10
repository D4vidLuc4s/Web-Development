<div class="titulo">Variáveis variáveis</div>

<?php
$a = 'ValorA';
$$a = 'ValorAA';
echo '$a = ', $a, '<br>';
echo '$$a = ', $$a, '<br>';
echo '$a - {$$a} - ${$a} - $valorA = ', "$a - {$$a} - ${$a} - $valorA", '<br> <br>';

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo '$epa = ', $epa, '<br>';
echo '$opa = ', $opa, '<br>';
echo '$vish = ', $vish, '<br>';
echo '$epa - {$$epa} - {$$$epa} = ', "$epa - {$$epa} - {$$$epa}";
?>