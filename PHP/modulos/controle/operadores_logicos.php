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
?>