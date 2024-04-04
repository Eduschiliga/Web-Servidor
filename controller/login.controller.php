<?php

    //require 'model/Usuario.php';

    function acessar(){
        $oab = $_POST['oab'];
        $senha = $_POST['password'];
        if($oab == "12345" && $senha == "admin"){
            echo("Acesso liberado!");
        }else{
            echo("Acesso negado!");
        }
    }

    //$usuario = new Usuario();

    require 'views/login.view.php';
?>