<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        header('Location: ../../view/pages/honorarios/form_honorarios_page.php');
    } else {
        header('Location: ../../index.php');
    }