<?php

    session_start();

    if(!empty($_SESSION['logado'])) {
        require '../../model/Processo.php';
        if(!empty($_GET['nmrProcesso'])){
            $_SESSION['nmrProcesso'] = $_GET['nmrProcesso'];
            $processo = new Processo((int) $_SESSION['nmrProcesso']);
            $processo->buscarProcesso();
            $_SESSION['cliente'] = $processo->getCliente();
            $_SESSION['proximoPrazo'] = $processo->getProximoPrazo();
            #$_SESSION['qtdHonorarios'] = (string) $processo->getQtdHonorarios(); Realizar por meio de JS
            $_SESSION['descricao'] = $processo->getDescricao();
        }else{
            $_SESSION['nmrProcesso'] = "";
            $_SESSION['cliente'] = "";
            $_SESSION['proximoPrazo'] = "";
            $_SESSION['qtdHonorarios'] = "";
            $_SESSION['descricao'] = "";
        }
        header('Location: ../../view/pages/processos/form_processos_page.php');
    } else {
        header('Location: ../../index.php');
    }

?>