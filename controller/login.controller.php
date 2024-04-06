<?php

    $oab = $_POST['oab'] ?? '';
    $senha = $_POST['password'] ?? '';
    $erro = false;

    session_start();

    if($oab == '123' && $senha == 'admin') {
        $_SESSION['logado'] = true;
        $_SESSION['oab'] = $oab;


        header ("Location: principal.controller.php");
    } else if (!empty($_POST)) {
        $erro = true;
    }

    if($erro) {
        echo "<div><span>Número de OAB ou Senha inválidos! Tente novamente.</span></div>";
    }
    require 'views/login.view.php';


