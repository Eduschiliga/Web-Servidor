<?php

    if(isset($_POST["entrar"])) {
        require('../../model/Usuario.php');

        $oab = $_POST['oab'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $usuario = new Usuario($oab,$senha);

        if($usuario->buscarUsuario()) {
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = serialize($usuario);
            $erro = false;
            header('Location: ../home/home.controller.php');
        } else {
            header('Location: ../../index.php?erro=true');
        }
        exit();
    }
    require('view/modelos/login.php');

    if(!empty($_SESSION['logado'])) {
        header('Location: ../home/home.controller.php');
        exit();
    }