<?php

    class Usuario{
        private $nome;
        private $oab;
        private $senha;

        public function __construct($oab,$senha){
            $this->oab = $oab;
            $this->senha = $senha;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getOab(){
            return $this->oab;
        }

        public function setOab($oab){
            $this->oab = $oab;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
        
        public function criarUsuario(){
            //A fazer
        }

        public function atualizarUsuario(){
            //A fazer
        }

        public function removerUsuario(){
            //A fazer
        }

        public function listarTodos(){
            //A fazer
        }
    }
?>