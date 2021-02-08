<?php
// Iniciar sessão
session_start();

// Conexão
require_once "DB_Connect.php";

if (isset($_POST['BTN_Delete'])) {
    $ID = mysqli_escape_string($Connect, $_POST['ID']);

    // Inserção
    $SQL = "DELETE FROM `Clientes` WHERE ID = '$ID'";

    // Verificação
    if (mysqli_query($Connect, $SQL)) {
        $_SESSION['Mensagem'] = "Sucesso ao deletar!";
        header('Location: ../index.php');
    } else {
        $_SESSION['Mensagem'] = "Erro ao deletar!";
        header('Location: ../index.php');
    }
}
