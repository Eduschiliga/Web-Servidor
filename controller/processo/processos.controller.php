<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        header('Location: ../../view/pages/');
    } else {
        header('Location: ../index.php');
    }

?>