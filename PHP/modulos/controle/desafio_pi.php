<div class="titulo">Desafio PI</div>

<?php
$pi = 3.14;
$piErrado = 2.8;
echo 'pi() =', pi(), '<br>';
echo '$piErrado = ', $piErrado, '<br>';
echo '$pi = ', $pi, '<br> <br>';

echo 'if($pi === pi()) {<br>
    echo "Iguais!";<br>
} else {<br>
    echo "Diferentes!;<br>
}';

if($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

echo '<h3>Resposta</h3>';
echo '($pi - pi()) = ', ($pi - pi()), '<br>';
echo '($pi - $piErrado) = ', ($pi - $piErrado), '<br> <br>';

echo 'if($pi - pi() <= 0.01) {<br>
    echo "Praticamemte iguais!";<br>
} else {<br>
    echo "Valor errado!!";<br>
}<br>';

if($pi - pi() <= 0.01) {
    echo 'Praticamente iguais!';
} else {
    echo 'Valor errado!!';
}

echo '<br> <br>';

echo 'if($pi - $piErrado <= 0.01) {<br>
    echo "Praticamente iguais!;<br>
} else {<br>
    echo "Valor errado";<br>
}<br>';

if($pi - $piErrado <= 0.01) {
    echo 'Praticamente iguais';
} else {
    echo 'Valor errado!!';
}
?>