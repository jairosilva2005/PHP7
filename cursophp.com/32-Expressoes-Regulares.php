<?php
    // Expressões Regulares
    // Define um padrão a ser usado para procurar ou substituir palavras ou grupo de palavras
    // ^ Ínicio da expressão, $ final da expressão - /i - case sensitive
    // [] Conjunto de caracteres
    // {} Ocorrências - ?{0,1} *{0,} +{1,}

    $String = "08/02/2021";
    $Padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i"; // Validação de data
    // $Padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i"; Validando Emails

    // Validação
    if(preg_match($Padrao, $String)) {
        echo "Válido!";
        echo "<hr>";
        echo $String;
    }
    else {
        echo "Inválido!";
        echo "<hr>";
    }