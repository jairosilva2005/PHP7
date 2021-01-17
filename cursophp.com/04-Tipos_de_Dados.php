<?php
    /* Tipos de dados suportados pelo PHP 7 - Escalares */
    $nome = "Olá mundo 123"; // String - Sequência de Caracteres
    var_dump($nome); // A função var_dump serve para mostrar informações sobre variáveis

    if(is_string($nome)):
        echo "É uma String!";
    else:
        echo "Não é uma String!";
    endif;
    echo "<hr>";

    // Tipos de dados int
    $idade = 15;
    var_dump($idade); //Ela também pode verificar dizer se é float ou int
    if(is_int($idade)):
        echo "É um valor inteiro!";
    else:
        echo "Não é um valor inteiro!";
    endif;
    echo "<hr>";

    // Tipos de dados Float
    $SuaAltura = 1.80;
    var_dump($SuaAltura);
    if(is_float($SuaAltura)):
        echo "É um valor decimal!";
    else:
        echo "Não é um valor decimal!";
    endif;
    echo "<hr>";

    // Tipos de dados Booleanos
    $Admin = false;
    var_dump($Admin);
    if(is_bool($Admin)):
        echo "É um valor Booleano!";
    else:
        echo "Não é um valor Booleano!";
    endif;
    echo "<hr>";

    /* Tipos de dados suportados pelo PHP 7 - Compostos */
    $Carros = array("Chevette", "Corvette", "Hilux", 56, 1.23, true);
    var_dump($Carros);
    echo "<hr>";

    // Tipos de dados Object
    class Cliente {
        public $nome;
        public function AtribuirNome($nome) {
            $this -> $nome = $nome;
        }
    }
    $cliente = new Cliente();
    $cliente -> AtribuirNome("Jairo");
    var_dump($cliente);
    echo "<br>";
    if(is_object($cliente)):
        echo "É um valor tipo Object!";
    else:
        echo "Não é um valor tipo Object!";
    endif;
    echo "<hr>";

    /* Tipos de dados suportados pelo PHP 7 - Especiais */
    // NULL

    $cidade = NULL;
    var_dump($cidade);

    // E também existe o dado de tipo Resource!
?>