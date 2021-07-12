<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    - Dois trabalhos
    - Se os dois derem certo -> TV 50 e sorvete
    - Se só um der certo -> TV 32 e sorvete
    - Se nenhum der certo -> Ficar em casa
-->

<form action="#" method="post">
        <div>
            <label for="t1">Trabalho 1: </label>
            <select name="t1" id="t1">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
            </select>
        </div>
        <div>
            <label for="t2">Trabalho 2</label>
            <select name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
            </select>
        </div>
        <button>Executar</button>
</form>

<style>
    button, select {
        font-size:1.5rem;
    }
</style>

<?php

$caso1 = !!$_POST['t1'] === true && !!$_POST['t2'] === false;
$caso2 = !!$_POST['t1'] === false && !!$_POST['t2'] === true;
echo '<br>';

if(!!$_POST['t1'] === true && !!$_POST['t2'] === true){
    echo 'Comprar TV 50 polegadas e tomar sorvete';
} elseif($caso1 || $caso2){
    echo 'Comprar TV 32 polegadas e tomar sorvete';
} else {
    echo 'Ficar em casa';
}
?>