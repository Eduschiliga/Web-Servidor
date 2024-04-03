<?php

    //require_once 'model/Usuario.php';
    function acessar($oab,$senha){
        if($oab == "12345" && $senha == "admin"){
            echo("Acesso liberado!");
        }else{
            echo("Acesso negado!");
        }
    }

    $oab = $_POST['oab'];
    $senha = $_POST['password'];

    acessar($oab,$senha);
?>