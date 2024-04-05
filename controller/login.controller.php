<?php

    require 'model/Usuario.php';

    function acessar(){
        $oab = $_POST['oab'];
        $senha = $_POST['password'];

        if($oab == "12345" && $senha == "admin"){
            $usuario = new Usuario($oab,$senha);
            header("Location: controller/principal.controller.php");
        }else{
            echo("Acesso negado!");
        }
    }

    if(isset($_POST['entrar'])){
        acessar();
    }

    require 'views/login.view.php';
?>