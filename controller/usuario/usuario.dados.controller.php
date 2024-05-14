<?php
    session_start();

    if(!empty($_SESSION['logado'])){
        require('../../model/Usuario.php');
        $usuario = unserialize($_SESSION['usuario']);
        if($_POST['senha_antiga'] == $usuario->getSenha() && $_POST['senha_nova'] != ''){
            $usuario->setSenha($_POST['senha_nova']);
            $usuario->setNome($_POST['nome_user']);
            $usuario->atualizarUsuario();
            session_destroy();
            header('Location: ../../index.php');
        } elseif($_POST['senha_nova'] == '' || $_POST['senha_nova'] == $usuario->getSenha()) {
            header('Location: ../../usuario/');
        }
    } else {
        header('Location: ../../index.php');
    }

    exit();
