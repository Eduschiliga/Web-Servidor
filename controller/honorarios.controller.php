<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        require ("../views/header.view.php");
        require ("../views/honorarios.view.php");
        require ("../views/footer.view.php");
    } else {
        header('Location: ../index.php');
    }

?>