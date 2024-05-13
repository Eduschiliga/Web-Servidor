<?php

    session_start();

    if(!empty($_SESSION['logado'])){
        header('Location: ../../home/');
    }else{
        header('Location: ../../index.php');
    }

?>