<?php
    class Processo{
        private int $nmrProcesso;
        private string $cliente;
        private string $proximoPrazo;
        private int $qtdHonorarios;
        private int $nmrParcelas;
        private bool $escritorio;
        private string $descricao;

        public function __construct($nmrProcesso){
            $this->nmrProcesso = $nmrProcesso;
        }

        public function getNmrProcesso(): int{
            return $this->nmrProcesso;
        }

        public function setNmrProcesso($nmrProcesso): void{
            $this->nrmProcesso = $nmrProcesso;
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

        public function buscarProcesso(): void{
            if($this->nmrProcesso == 123){
                $this->cliente = 'Eduardo Schiliga';
                $this->proximoPrazo = '20/05/2025';
                $this->qrtHonorarios = 5;
                $this->nmrParcelas = 6;
                $this->escritorio = false;
                $this->descricao = 'Processo contra o imposto';
            }
        }
        
        public function criarProcesso(){
            //A fazer
        }

        public function atualizarProcesso(){
            //A fazer
        }

        public function removerProcesso(){
            //A fazer
        }

        public function listarTodos(){
            //A fazer
        }
    }
?>