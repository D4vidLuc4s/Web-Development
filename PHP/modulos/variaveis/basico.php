<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo '$numeroA = ', $numeroA, '<br>';
echo 'var_dump($numeroA) = ', var_dump($numeroA), '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo '$a = 3', '<br>';
echo '$b = 16',  '<br>';
echo '$soma = $a + $b', '<br>';
echo '$soma = ', $soma, '<br>';
echo 'isset($soma) = ', isset($soma), '<br> <br>';
unset($soma);
echo 'unset($soma) / unset remove o que está setado na variavel!', '<br>';
echo 'isset($soma) = ', isset($soma), '<br>';
echo 'var_dump($soma) = ', var_dump($soma), '<br> <br>';

$variavel = 10;
echo '$variavel = ', $variavel, '<br>';
$variavel = "Agora sou uma string!";
echo '$variavel = ', $variavel, '<br>';

echo '<p>Nomes de Variáveis</p>';
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vãr5 = 'valida // Procure evitar variaveis com acentuação';
echo '$var = ', $var, '<br>';
echo '$var2 = ', $var2, '<br>';
echo '$VAR3 = ', $VAR3, '<br>';
echo '$_var_4 = ', $_var_4, '<br>';
echo '$vãr5 = ', $vãr5, '<br>';
echo '$6var = invalida // variaveis não podem começar com números', '<br>';
echo "$%var7 = invalida // variaveis não podem começar com caracteres especiais", '<br>';
echo '$var8% = invalida // variaveis com caracteres especiais no final tambem são invalidas', '<br> <br>';
echo 'var_dump($_SERVER["HTTP_HOST"]) = ', var_dump($_SERVER["HTTP_HOST"]), '<br>', '$_SERVER é uma variavel pré-definida do PHP'; 
?>