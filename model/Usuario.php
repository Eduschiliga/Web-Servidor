<?php
    class Usuario {
        private string $nome;
        private string $oab;
        private string $senha;

        public function __construct($oab,$senha) {
            $this->oab = $oab;
            $this->senha = $senha;
        }
        
        public function getNome(): string { return $this->nome; }

        public function setNome($nome): void { $this->nome = $nome; }

        public function getOab(): string { return $this->oab; }

        public function setOab($oab): void { $this->oab = $oab; }

        public function setSenha($senha): void { $this->senha = $senha; }

        public function buscarUsuario():bool {
            require ('../../database/Conexao.php');

            $select = "SELECT * FROM usuario WHERE oab = '$this->oab'";

            /** @var 'database/Conexao.php' $bd */
            $result = mysqli_query($bd, $select);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);

                if($row['oab'] == $this->oab && $row['senha'] == $this->senha) {
                    $this->nome = $row['nome'];
                    $this->oab = $row['oab'];
                    $this->senha = $row['senha'];
                    return true;
                }
            }
            return false;
        }
        
        public function criarUsuario() {}

        public function atualizarUsuario() { }

        public function removerUsuario() { }

        public function listarTodos(){ }
    }