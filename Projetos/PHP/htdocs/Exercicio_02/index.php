<?php
//1) Verificar se tem mais de 5 letras.
//2) Verificar se é número.
//3) Verificar se possui o @.

if(isset($_POST['acao'])){ // isset verifica se exite = Variável ter valor ou ser criada.
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    if(strlen($nome) >+ 5){ // strlen conta o número de caracteres
        echo 'Nosso nome tem mais ou igual a 5 letras.';
        echo '<br>';
    } else {
        echo 'Nosso nome tem menos de 5 letras.';
        echo '<br>';
    }

    if(is_numeric($numero)){
        echo 'É número.';
        echo '<br>';
    }else {
        echo 'Não é número.';
        echo '<br>';
    }


    if(strstr( $email, '@',) != ''){ // strstr verifica se existe o @
        echo 'Possui o email.';
        echo '<br>';
        if(strstr( $email, 'gmail',) != ''){
            echo 'É um email do Gmail.';
            echo '<br>';
        } else {
            echo 'Não é um email do Gmail.';
            echo '<br>';
        }

    } else {
        echo 'Não possui o email.';
        echo '<br>';
    }
}

?>
<form method = "post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">

    <label for="numero">Número:</label>
    <input type="text" id="numero" name="numero">

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">

    <input type="submit" name="acao" value="Enviar">
</form>