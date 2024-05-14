<?php

    session_start();

    if(!empty($_SESSION['logado'])){
        header('Location: ../../usuario/');
    }else{
        header('Location: ../../index.php');
    }