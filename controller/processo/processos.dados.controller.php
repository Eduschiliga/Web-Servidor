<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        require '../../model/Processo.php';
        if(!empty($_GET['nmrProcesso'])){
            $processo = new Processo();
            $processo->setNmrProcesso((int) $_GET['nmrProcesso']);
            $processo->buscarProcesso();
            $_SESSION['processo'] = serialize($processo);
        }else{
            $processo = new Processo();
            $_SESSION['processo'] = serialize($processo);
        }
        header('Location: ../../view/pages/processos/form_processos_page.php');
    } else {
        header('Location: ../../index.php');
    }

?>