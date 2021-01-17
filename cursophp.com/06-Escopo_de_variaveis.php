<?php

    // Escopo Global
    
    $nome = "Jairo Silva";
    
    function ExibirNome() {
        global $nome;
        echo $nome;
    }

    ExibirNome();
    echo "<hr>";

    // Escopo Local

    function ExibirIdade() {
        global $idade; // Para acessar variáveis de escopo local dentro do escopo global, é preciso definir se ela é global ou não
        $idade = 15;
    }

    ExibirIdade();
    echo $idade;
    echo "<hr>";

    // Array GLOBALS para usar variáveis globais em escopo local:
    $a = 2;
    $b = 2;
    $c = 2;

    function soma() {
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; // Não esquecer de adicionar as aspas simples dentro dos conchetes
    }
    soma();
?>