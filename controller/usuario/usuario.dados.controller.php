<?php
    session_start();

    if(!empty($_SESSION['logado'])){
        require('../../model/Usuario.php');
        $usuario = unserialize($_SESSION['usuario']);
        if($_POST['senha_antiga'] == $usuario->getSenha()){
            $usuario->setSenha($_POST['senha_nova']);
            $usuario->setNome($_POST['nome_user']);
            $usuario->atualizarUsuario();
        }
        session_destroy();
        header('Location: ../../index.php');
    }else{
        header('Location: ../../index.php');
    }

    exit();
?>