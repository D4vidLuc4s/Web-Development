<div class="titulo">Operador Ternario</div>

<?php
$idade = 70;
$status;

echo '$idade = ', $idade, '<br> <br>';
echo 'if($idade >= 18){<br>
    $status = \'Maior de idade\';<br>
} else {<br>
    $status = \'Menor de idade\';<br>
}<br>';

if($idade >= 18){
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo '$status = ', $status, '<br><br>';

$idade = 15;
echo '$idade = ', $idade, '<br>';
echo '$status = $idade >= 18 ? \'Maior de idade\' : \'Menor de idade\'<br>';
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo '$status = ', $status, '<br>';

echo '<h3>Mais de um cálculo no mesmo operador ternário: </h3>';
$idade = 67;
echo 'Ex 1: <br>';
echo '$idade = ', $idade, '<br>';
echo '$Aposentar = $idade >= 65 ? \'Aposentado\' : \'Maior idade\';<br>
$status = $idade >= 65 ? $Aposentar : \'Menor de idade\';<br><br>';
$Aposentar = $idade >= 65 ? 'Aposentado' : 'Maior idade';
$status = $idade >= 65 ? $Aposentar : 'Menor de idade';
echo '$status = ', $status, '<br><br>';

echo 'Ex 2: <br>';
echo '$status = $idade >= 18 ? $idade >= 65 ? \'Aposentado\' : \'Maior de idade\' : \'Menor de idade\';<BR>';
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';
echo '$status = ', $status;