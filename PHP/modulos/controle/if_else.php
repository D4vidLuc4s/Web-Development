<div class="titulo">If Else</div>

<?php
echo 'if(false) { <br>
    echo "You win!";<br>
} else { <br>
    echo \'You lose!\';<br>
} <br> <br>';
if(false) {
    echo "You win!";
} else {
    echo 'You lose!';
}

echo '<br> <br>';

echo "if(true) {  <br>
    echo 'Passo A'; <br>
} else if(false) { <br>
    echo 'Passo B'; <br>
} else { <br>
    echo 'Último Passo'; <br>
} <br> <br>";

if(true) {
    echo 'Passo A';
} else if(false) {
    echo 'Passo B';
} else {
    echo 'Último Passo';
}
?>