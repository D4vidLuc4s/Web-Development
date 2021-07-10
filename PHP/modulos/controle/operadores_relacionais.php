<div class="titulo">Operadores Relacionais</div>

<?php
echo 'var_dump(1 == 1) = ', var_dump(1 == 1), '<br>';
echo 'var_dump(1 < 1) = ', var_dump(1 > 1), '<br>';
echo 'var_dump(1 >= 1) = ', var_dump(1 >= 1), '<br>';
echo 'var_dump(4 < 23) = ', var_dump(4 < 23), '<br>';
echo 'var_dump(1 <= 7) = ', var_dump(1 <= 7), '<br>';
echo 'var_dump(1 != 1) = ', var_dump(1 != 1), '<br>';
echo 'var_dump(1 <> 1) = ', var_dump(1 <> 1), '<br>';

echo '<br> <br>';

echo 'var_dump(111 == \'111\') = ', var_dump(111 == '111'), '<br>';
echo 'var_dump(111 === \'111\') = ', var_dump(111 === '111'), '<br>';
echo 'var_dump(111 != \'111\') = ', var_dump(111 != '111'), '<br>';
echo 'var_dump(111 !== \'111\') = ', var_dump(111 !== '111'), '<br>';

echo '<h3>Relacionais no If\Else</h3>';
$idade = 75;
echo '$idade = 75<br>
if($idade < 18) {<br>
    echo "Menor de idade = $idade anos";<br>
} else if($idade < 65) {<br>
    echo "Adulto = $idade anos";<br>
} else {<br>
    echo "Terceira idade = $idade anos";<br>
}<br><br>';
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo '<h3>Spaceship</h3>';
echo 'var_dump(5 <=> 3) = ', var_dump(5 <=> 3), '<br>';
echo 'var_dump(50 <=> 50) = ', var_dump(50 <=> 50), '<br>';
echo 'var_dump(5 <=> 50) = ', var_dump(5 <=> 50), '<br>';

echo '<h3>Valores podem ser V ou F</h3>';
echo 'var_dump(!!5) = ', var_dump(!!5), '<br>';
echo 'var_dump(!!0) = ', var_dump(!!0), '<br>';
echo 'var_dump(!!"") = ', var_dump(!!""), '<br>';
echo 'var_dump(!!" ") = ', var_dump(!!" "), '<br>';
?>