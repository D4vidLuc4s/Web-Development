<div class="titulo">Operadores Lógicos</div>

<?php
echo '<h3>V ou F</h3>';
echo 'var_dump(true) = ', var_dump(true), '<br>';
echo 'var_dump(!true) = ', var_dump(!true), '<br>';
echo 'var_dump(!!true) = ', var_dump(!!true), '<br>';

echo '<h3>Tabela Verdade "AND"(E)</h3>';
echo 'var_dump(true && true) = ', var_dump(true && true), '<br>';
echo 'var_dump(true && false) = ', var_dump(true && false), '<br>';
echo 'var_dump(false && true) = ', var_dump(false && true), '<br>';
echo 'var_dump(false && false) = ', var_dump(false && false), '<br>';

echo '<h3>Tabela Verdade "OR"(OU)</h3>';
echo 'var_dump(true || true) = ', var_dump(true || true), '<br>';
echo 'var_dump(true || false) = ', var_dump(true || false), '<br>';
echo 'var_dump(false || true) = ', var_dump(false || true), '<br>';
echo 'var_dump(false || false) = ', var_dump(false || false), '<br>';

echo '<h3>Tabela Verdade "XOR"(OU Exclusivo)</h3>';
echo 'var_dump(true xor true) = ', var_dump(true xor true), '<br>';
echo 'var_dump(true xor false) = ', var_dump(true xor false), '<br>';
echo 'var_dump(false xor true) = ', var_dump(false xor true), '<br>';
echo 'var_dump(false xor false) = ', var_dump(false xor false), '<br>';

echo '<h3>Exemplo</h3>';
$idade = 62;
$sexo = M;
$pagouPrevidencia = true;
$criterioHomem = $idade >= 65 && $sexo === 'M';
$criterioMulher = $idade >= 60 && $sexo === 'F';
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;  
echo '$idade = ', $idade, '<br>';
echo '$sexo = ', $sexo, '<br>';
echo '$pagouPrevidencia = true <br>';
echo '$criterioHomem = $idade >= 65 && $sexo === "M" <br>';
echo '$criterioMulher = $idade >= 60 && $sexo === "F" <br>';
echo '$atingiuCriterio = $criterioHomem || $criterioMulher <br>';
echo '$podeAposentar = $pagouPrevidencia && $atingiuCriterio <br> <br>';

echo 'if($idade >= 60 && $sexo === "F") {<br>
    echo "Pode se aposentar";<br>
} elseif ($idade >= 65 && $sexo === "M") {<br>
    echo "Pode se aposentar";<br>
} else {<br>
    "echo Vai ter que continuar trabalhando";<br>
}<br>';

echo 'Resultado = ';

if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar';
} elseif ($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que continuar trabalhando';
}
?>