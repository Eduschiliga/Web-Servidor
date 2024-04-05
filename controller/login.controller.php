<?php
    function acessar(){
        $oab = $_POST['oab'];
        $senha = $_POST['password'];
        if($oab == "12345" && $senha == "admin"){
            echo("Acesso liberado!");
        }else{
            echo("Acesso negado!");
        }
    }

    if(isset($_POST['entrar'])){
        acessar();
    }

    require 'views/login.view.php';
?>