<div class="titulo">Desafio String</div>

<?php
echo 'Enunciado: <br>';
echo 'Analisando os métodos da documentação da string, qual o método que a posição do texto "abc" na string "!AbcaBcabc" retorne 1? <br> <br>';

echo'Metodo "strpos" diferencia caracteres maiusculos de minusculos. <br>';
echo "strpos('!AbcaBcabc', 'abc') a string 'abc' está no indice = ", strpos('!AbcaBcabc', 'abc'), '<br> <br>';

echo 'Metodo "stripos" não diferencia maiusculas de minusculas.<br>';
echo "stripos('!AbcaBcabc', 'abc') a string 'abc' está no indice = ", stripos('!AbcaBcabc', 'abc'), '<br> <br>';

echo 'Metodo aletrnativo: <br>';
echo "strpos(strtolower('!AbcaBcabc'), 'abc') = ", strpos(strtolower('!AbcaBcabc'), 'abc');
?>