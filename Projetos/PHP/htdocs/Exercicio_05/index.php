<?php
// Preencher array sem números repetidos
$arr = [];

for($i = 0; $i < 5; $i++) { // Cria um array com 5 posições
    $arr[$i] = rand(1, 5); // Preenche o array com números aleatórios de 1 a 5
    while(inArrayCustom($i, $arr[$i], $arr)){ // Verifica se o número já existe no array
        $arr[$i] = rand(1, 20); // Se existir, gera um novo número aleatório de 1 a 20
    }

}

print_r($arr); // Imprime o array final sem números repetidos
function inArrayCustom($indice, $valor, $arr) {// Função para verificar se o valor já existe no array
    for($i = 0; $i < count($arr); $i++) {// Percorre o array
        if($arr[$i] == $valor && $i != $indice) {// Verifica se o valor é igual ao valor atual e se o índice é diferente do índice atual
            // Se o valor já existe no array e não é o mesmo índice, retorna true
            echo 'repetiu! <br>';
            return true;
        }
    }
    return false; // Se não encontrou o valor, retorna false
}

?>