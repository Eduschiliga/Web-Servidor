<?php

    class Usuario{
        private $nome;
        private $oab;

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