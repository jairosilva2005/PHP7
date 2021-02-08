<?php
    // Manipulando Arquivos com PHP

    /*
        Funções para manipulação de arquivos em PHP
        fopen(); - Serve para abrir um arquivo ou uma URL
        fclose(); - Fecha um ponteiro de arquivo aberto
        fwrite(); - Escrita binary-safe em arquivos
    */

    // Função fopen();
    $Arquivo = 'Arquivo.txt';
    $Conteudo_de_teste = "Sou um menino mal demais!\r\n";
    $TamanhoDoArquivo = filesize($Arquivo);
    $ArquivoAberto = fopen($Arquivo, 'r');
    while(!feof($ArquivoAberto)) {
        $Linha = fgets($ArquivoAberto, $TamanhoDoArquivo);
        echo $Linha;
    }
    fclose($ArquivoAberto);