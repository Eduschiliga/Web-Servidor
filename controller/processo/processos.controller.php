<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        header('Location: ../../processos/');
    } else {
        header('Location: ../../index.php');
    }

?>