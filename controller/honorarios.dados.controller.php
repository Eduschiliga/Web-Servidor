<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        header('Location: ../views/pages/honorarios/dados.php');
    } else {
        header('Location: ../index.php');
    }