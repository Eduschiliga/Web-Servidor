<?php

    if(isset($_POST["entrar"])){
        require('../../model/Usuario.php');

        $oab = $_POST['oab'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $usuario = new Usuario($oab,$senha);

        if($usuario->buscarUsuario()) {
            session_start();
            $_SESSION['oab'] = $oab;
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = 'Administrador';
            $erro = false;
            header('Location: ../home/home.controller.php');
            exit();
        } else {
            header('Location: ../../index.php?erro=true');
            exit();
        }
    }
    require('view/modelos/login.php');

    if(!empty($_SESSION['logado'])) {
        header('Location: ../home/home.controller.php');
        exit();
    }

?>