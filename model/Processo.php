<?php
    class Processo {
        private int $nmrProcesso;
        private string $cliente;
        private string $proximoPrazo;
        private int $qtdHonorarios;
        private int $nmrParcelas;
        private bool $escritorio;
        private string $descricao;

        public function __construct(){
            $this->nmrProcesso = 0;
            $this->cliente = '';
            $this->proximoPrazo = '';
            $this->qtdHonorarios = 0;
            $this->nmrParcelas = 0;
            $this->escritorio = true;
            $this->descricao = '';
        }

        public function getNmrProcesso(): int{
            return $this->nmrProcesso;
        }

        public function setNmrProcesso($nmrProcesso): void{
            $this->nmrProcesso = $nmrProcesso;
        }

        public function getCliente(): string{
            return $this->cliente;
        }

        public function setCliente($cliente): void{
            $this->cliente = $cliente;
        }

        public function getProximoPrazo(): string{
            return $this->proximoPrazo;
        }

        public function setProximoPrazo($proximoPrazo): void{
            $this->proximoPrazo = $proximoPrazo;
        }

        public function getQtdHonorarios(): int{
            return $this->qtdHonorarios;
        }

        public function setQtdHonorarios($qtdHonorarios): void{
            $this->qtdHonorarios = $qtdHonorarios;
        }

        public function getNmrParcelas(): int{
            return $this->nmrParcelas;
        }

        public function setNmrParcelas($nmrParcelas): void{
            $this->nmrParcelas = $nmrParcelas;
        }

        public function getEscritorio(): bool{
            return $this->escritorio;
        }

        public function setEscritorio($escritorio): void{
            $this->escritorio = $escritorio;
        }

        public function setDescricao($descricao): void{
            $this->descricao = $descricao;
        }

        public function getDescricao(): string{
            return $this->descricao;
        }

        public function buscarProcesso($usuario): void{
            require ('../../database/Conexao.php');
            $select = "SELECT * FROM processo WHERE idprocesso = '$this->nmrProcesso' and idusuario = '$usuario'";
            /** @var 'database/Conexao.php' $bd */
            $result = mysqli_query($bd, $select);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $this->cliente = $row['cliente'];
                $this->descricao = $row['descricao'];
                $this->escritorio = $row['escritorio'];
            }
        }
        
        public function criarProcesso(int $usuario){
            require ('../../database/Conexao.php');
            $insert = "INSERT INTO processo(cliente, descricao,escritorio, idusuario) VALUES('$this->cliente', '$this->descricao', true, $usuario)"; // Verificar entrada de valor para escritorio

            /** @var 'database/Conexao.php' $bd */
            mysqli_query($bd, $insert);
        }

        public function atualizarProcesso() { }

        public function removerProcesso() { }

        public function listarTodos() { }
    }
