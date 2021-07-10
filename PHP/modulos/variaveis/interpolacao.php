<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo '$numero = ', $numero, '<br>';
echo '\'$numero\' = ', '$numero', '<br>';
echo '"$numero" = ', "$numero", '<br>';
echo 'Como pode ser visto, adicionando a variável entre aspas simples, ela é reconhecida como uma string. Porém ao adiciona-lá entre aspas duplas, é reconhecido como variável e mostrado o resultado.', '<br> <br>';

echo '$texto = A sua nota é: "$numero" = ', $numero, '<br>'; 
$objeto = 'caneta';
echo '$objeto = ', $objeto, '<br>';
echo '"Eu tenho 5 $objetos = "', $objetos, '<br>';
echo '"Eu tenho 5 {$objeto}s = "', "{$objeto}s", '<br>';
echo 'Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s = ', "Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s.", '<br>';
?>