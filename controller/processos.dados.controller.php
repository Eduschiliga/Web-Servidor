<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        header('Location: ../views/pages/processos/dados.php');
    } else {
        header('Location: ../index.php');
    }

    ?>