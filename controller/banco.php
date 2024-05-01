<?php
    $servidor = "localhost";
    $porta = "5432";
    $banco = "trabalhoWeb";
    $usuario = "postgres";
    $senha = "84627913";

    try {
        $conexao = pg_connect($servidor, $porta, $banco, $usuario, $senha);
    } catch (Exception $e) {
        echo("Impossível conectar ao banco!\n");
        echo($e->getMessage());
    }

?>