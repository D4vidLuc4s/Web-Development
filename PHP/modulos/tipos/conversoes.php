<div class="titulo">Conversões</div>

<?php
echo 'is_int(PHP_INT_MAX) = ', is_int(PHP_INT_MAX), '<br>';
echo '<p>Int para float</p>';
echo 'var_dump(PHP_INT_MAX + 1) = ', var_dump(PHP_INT_MAX + 1), '<br>';
echo 'var_dump(1 + 1.0) = ', var_dump(1 + 1.0), '<br>';
echo 'var_dump((float) 3) = ', var_dump((float) 3), '<br>';

echo '<p>FLoat para Int</p>';
echo 'var_dump((int) 2.8) = ', var_dump((int) 2.8), '<br>';
echo 'var_dump(intavl(2.8, 10)) = ', var_dump(intval(2.8, 10)), '<br>';
echo 'var_dump((int) round(2.8)) = ', var_dump((int) round(2.8)), '<br>';

echo '<p>Operações com string</p>';
echo 'var_dump(3 + "2") = ', var_dump(3 + "2"), '<br>';
echo 'var_dump("3" + 2) = ', var_dump("3" + 2), '<br>';
echo 'var_dump("3" . 2) = ', var_dump("3" . 2), '<br>';
echo 'is_string("3" . 2) = ', is_string("3" . 2), '<br>';
echo 'is_string("3" + 2) = ', is_string("3" + 2), '<br>';
echo 'var_dump(1 + "cinco") = ', var_dump(1 + "cinco"), '<br>';
echo 'var_dump(1 + "5 cinco") = ', var_dump(1 + '5 cinco'), '<br>';
echo 'var_dump(1 + "cinco 5") = ', var_dump(1 + "cinco 5"), '<br>';
echo 'var_dump(1 + "2+5") = ', var_dump(1 + "2+5"), '<br>';
echo 'var_dump(1 + "3.2") = ', var_dump(1 + "3.2"), '<br>';
echo 'var_dump(1 + "-3.2e2") = ', var_dump(1 + "-3.2e2"), '<br>';
echo 'var_dump((int) "10.5") = ',var_dump((int) "10.5"), '<br>';
echo 'var_dump((float) "10.5") = ', var_dump((float) "10.5");
?>