<?php

    session_start();

    function login($oab,$senha): void
    {
        if($oab == '123' && $senha == 'admin') { //Verificação de dados do usuário para permição de acesso ao sistema
            $_SESSION['logado'] = true;
            $_SESSION['oab'] = $oab;

            header ("Location: principal.controller.php");
        } else if (!empty($_POST)) {
            echo "<span>Número de OAB ou Senha inválidos! Tente novamente.</span>";
        }
    }

    if(isset($_POST["entrar"])){
        $oab = $_POST['oab'] ?? '';
        $senha = $_POST['password'] ?? '';
        login($oab,$senha);
    }

    require 'views/login.view.php';
