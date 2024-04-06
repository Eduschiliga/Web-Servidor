<?php

    session_start();

    if(empty($_SESSION['logado'])) {
        header('Location: ../index.php');
    } else {
        require ("../views/header.view.php");
        echo "Tela do sistema";
        require ("../views/footer.view.php");
    }