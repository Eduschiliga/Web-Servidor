<?php

require_once 'database/Conexao.php';

$users = listarUsuarios();

foreach ($users as $user) {
    echo $user['nome'] . "<br>";
}
