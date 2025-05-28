<?php
// Array e verificar repetidos

$array = array('Fabiano', 'Joao','Lucas','Fabiano', 'Matheus', 'Gustavo'); 

$arrayRepetido = array();

for($i = 0; $i < count($array); $i++) {
    $valorAutal = $array[$i]; // Pega o valor atual do array
    if(!isset($arrayRepetido[$valorAutal])){ // Verifica se o valor atual já existe no array $arrayRepetido
        $arrayRepetido[$valorAutal] = 0; // Se não existir, cria o valor com 0
    } else {
        $arrayRepetido[$valorAutal]++; // Se existir, incrementa o valor em 1

    }
}

foreach($arrayRepetido as $key => $value) {
    echo $key;
    echo $value;
    echo '<br>';
}
?>