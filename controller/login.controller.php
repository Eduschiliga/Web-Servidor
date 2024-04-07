<?php

    class loginController{

        function login($oab,$senha): void{
            require('../model/Usuario.php');
            session_start();
            $usuario = new Usuario($oab,$senha);
            if($usuario->buscarUsuario()) { //Verificação de dados do usuário para permição de acesso ao sistema
                $_SESSION['logado'] = true;
                $_SESSION['oab'] = $oab;

                header ("Location: principal.controller.php");
                exit();
            }else{
                echo "<span>Número de OAB ou Senha inválidos! Tente novamente.</span>";
            }
        }

        public function processarLogin(){
            if(isset($_POST["entrar"])){
                $oab = $_POST['oab'] ?? '';
                $senha = $_POST['password'] ?? '';
                $this->login($oab,$senha);
            }
        }

    }

    $controller = new loginController();
    $controller->processarLogin();
    require 'views/login.view.php';
