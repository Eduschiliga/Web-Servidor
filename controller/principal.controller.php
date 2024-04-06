<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        require ("../views/header.view.php");
        echo "Tela do sistema";
        require ("../views/footer.view.php");
    } else {
        header('Location: ../index.php');
    }

?>