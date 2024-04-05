<?php

    class Usuario{
        private static $nome;
        private static $oab;
        private static $senha;

        public function __construct($t,$a){
            $oab = $t;
            $senha = $a;
        }
        
        public function getNome(){
            return self::nome;
        }

        public function setNome($nom){
            $nome = $nom;
        }

        public static function getOab(){
            return self::$oab;
        }

        public function setOab($oa){
            $oab = $oa;
        }

        public function setSenha($sena){
            $senha = $sena;
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