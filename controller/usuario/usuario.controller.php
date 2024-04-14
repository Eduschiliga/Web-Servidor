<?php

    session_start();

    if(!empty($_SESSION['logado'])){
        header('Location: ../../view/pages/usuarios/usuarios_page.php');
    }else{
        header('Location: ../../index.php');
    }