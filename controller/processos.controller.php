<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        require ("../views/header.view.php");
        require ("../views/processos.view.php");
        require ("../views/footer.view.php");
    } else {
        header('Location: ../index.php');
    }

?>