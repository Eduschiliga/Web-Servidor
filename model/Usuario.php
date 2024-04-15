<?php
    class Usuario{
        private string $nome;
        private string $oab;
        private string $senha;

        public function __construct($oab,$senha){
            $this->oab = $oab;
            $this->senha = $senha;
        }
        
        public function getNome(): string{
            return $this->nome;
        }

        public function setNome($nome): void{
            $this->nome = $nome;
        }

        public function getOab(): string
        {
            return $this->oab;
        }

        public function setOab($oab): void{
            $this->oab = $oab;
        }

        public function setSenha($senha): void{
            $this->senha = $senha;
        }

        public function buscarUsuario():bool{
            if($this->oab == '123456789' && $this->senha == 'admin'){
                $this->nome = 'Eduardo Schiliga';
                $this->oab = '123456789';
                return true;
            }
            return false;
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