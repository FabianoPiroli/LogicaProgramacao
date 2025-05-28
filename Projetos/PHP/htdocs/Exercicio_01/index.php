<?php
// Exemplo de código PHP que imprime "Hello World!" e "Olá Mundo!" na tela
//Código PHP
$helloWorld = ['H', '-', 'e', '-', 'l', '-', 'l', '-', 'o'];
$string = '';
for( $i = 0; $i < count($helloWorld); $i++) { // Percorre o array
    // Verifica se o caractere é um traço
    // Se for, pula para a próxima iteração
    if($helloWorld[$i] == '-') {
        continue; // Pula o traço
    }
    $string .= $helloWorld[$i];// Concatena o caractere ao string
} 
echo $string; // Imprime "Hello"
?>