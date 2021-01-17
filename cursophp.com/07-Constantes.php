<?php
    // Constantes
    define("NOME", "Jairo Silva"); /* Para a criação de constantes é preciso chamar a função define */
    define("IDADE", 15); /* Logo depois, vem o nome da constante e o valor, dentro de aspas duplas, e separados por vírgula */
    define("ALTURA", 1.75);
    define('TIMES', ['Flamengo', 'Corinthians', 'Palmeiras']);
    echo 'Nome: ' . NOME . '<br>';
    echo 'Idade: ' . IDADE . '<br>';
    echo 'Altura: ' . ALTURA . '<br>';
    echo 'Times: ' . TIMES[2] . '<br>';
    function ExibirNome() {
    	echo NOME; // Contantes são automaticamente globais, então não é necessário o uso de definições para contantes!
    }
    ExibirNome();
?>
