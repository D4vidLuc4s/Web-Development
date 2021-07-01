<div class="titulo">Booleanos</div>

<?php
echo 'TRUE = ', TRUE;
echo '<br>';
echo 'FALSE = ', FALSE, '<br>';

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo 'is_bool(false) = ' . is_bool(false);

echo '<h3>Regras de conversões para booleano</h3>';
echo '<p>Regras:</p>';
echo '<br> var_dump((bool) 0) = ', var_dump((bool) 0);
echo '/ Apenas zero é false';
echo '<br>';
echo 'var_dump((bool) 20) = ', var_dump((bool) 20), '<br>';
echo 'var_dump((bool) -1) = ', var_dump((bool) -1), '<br>';
echo 'var_dump((bool) 0.0) = ', var_dump((bool) 0.0), '<br>';
echo 'var_dump((bool) 0.0000001) = ', var_dump((bool) 0.0000001), '<br>';
echo 'var_dump((bool) "") = ', var_dump((bool) ""), '<br>';
echo 'var_dump((bool) " ") = ', var_dump((bool) " "), '<br>';
echo 'var_dump((bool) "0") = ', var_dump((bool) "0"), '<br>';
echo 'var_dump((bool) "00") = ', var_dump((bool) "00"), '<br>';
echo 'var_dump((bool) "false") = ', var_dump((bool) "false"), '<br>';
?>