<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        if(!empty($_GET['nmrProcesso'])){
            require '../../model/Processo.php';
            $processo = new Processo((int) $_GET['nmrProcesso']);
            $processo->buscarProcesso();
            $_SESSION['processo'] = serialize($processo);
        }else{
            $_SESSION['processo'] = '';
        }
        header('Location: ../../view/pages/processos/form_processos_page.php');
    } else {
        header('Location: ../../index.php');
    }

?>