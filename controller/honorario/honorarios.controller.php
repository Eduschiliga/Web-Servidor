<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        header('Location: ../../view/pages/honorarios/honorarios_page.php');
    } else {
        header('Location: ../../index.php');
    }

?>