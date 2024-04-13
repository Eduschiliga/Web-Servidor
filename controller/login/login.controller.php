<?php

if(isset($_POST["entrar"])){

    $oab = $_POST['oab'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($oab == 'admin' && $senha == 'admin') {
        session_start();
        $_SESSION['oab'] = $oab;
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = 'Administrador';
        $erro = false;
        header('Location: ../../view/pages/home/home_page.php');
        exit();
    } else {
        header('Location: ../../index.php?erro=true');
        exit();
    }
}
require('view/modelos/login.php');

if(!empty($_SESSION['logado'])) {
    header('Location: ../../view/pages/home/home_page.php');
    exit();
}