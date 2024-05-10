<?php
try {
    $bd = mysqli_connect('localhost', 'root', 'root', 'trabalhoweb');
} catch (Exception $ex) {
    echo $ex->getMessage();
}

function listarUsuarios(): array {
    global $bd;
    $select = "SELECT * FROM usuario";
    $result = mysqli_query($bd, $select);
    $users = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}

