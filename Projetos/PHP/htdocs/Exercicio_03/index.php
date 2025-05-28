<?php
// 2 Arrays e verificar os números em comum

$array_0 = array(0, 1, 3, 4, 6, 8, 'Fabiano'); 
$array_1 = array(10, 90, 23, 8, 6, 'Fabiano', 'Matheus');


//Rodar um looping e verificar se existe em um array o número do outro

$em_comum = [];
for($i = 0; $i < count($array_0); $i++) { // Percorre o primeiro array
    // Verifica se o número do primeiro array existe no segundo array
    // Se existir, adiciona ao array $em_comum
    // Se não existir, continua para o próximo número
    for($n = 0; $n < count($array_1); $n++) {
        if($array_0[$i] === $array_1[$n]){ // === Verifica se os valores são iguais e do mesmo tipo
        //Numero em comum!
        $em_comum[] = $array_0[$i]; // Adiciona o número em comum ao array $em_comum
        }  
    }
}
foreach($em_comum as $key => $value) {
    echo $value . '<br>'; // Imprime os números em comum
}
?>