<?php
    class Processo {
        private int $idprocesso;
        private int $nmrProcesso;
        private string $cliente;
        private bool $escritorio;
        private string $descricao;


        public function __construct(){
            $this->nmrProcesso = 0;
            $this->idprocesso = 0;
            $this->cliente = '';
            $this->escritorio = true;
            $this->descricao = '';
        }

        public function getNmrProcesso(): string{
            return strval($this->nmrProcesso);
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

        public function getIdProcesso(): int{
            return $this->idprocesso;
        }

        public function setIdprocesso(int $idprocesso): void{
            $this->idprocesso = $idprocesso;
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
            $select = "SELECT * FROM processo WHERE numeroprocesso = '$this->nmrProcesso' AND idusuario = '$usuario'";
            /** @var 'database/Conexao.php' $bd */
            $result = mysqli_query($bd, $select);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $this->idprocesso = $row['idprocesso'];
                $this->cliente = $row['cliente'];
                $this->descricao = $row['descricao'];
                $this->escritorio = $row['escritorio'];
            }
        }
        
        public function criarProcesso(int $usuario){
            require ('../../database/Conexao.php');
            $insert = "INSERT INTO processo(numeroprocesso, cliente, descricao,escritorio, idusuario) VALUES('$this->nmrProcesso','$this->cliente', '$this->descricao', true, $usuario)"; // Verificar entrada de valor para escritorio
            /** @var 'database/Conexao.php' $bd */
            mysqli_query($bd, $insert);
        }

        public function atualizarProcesso(): void{
            require ('../../database/Conexao.php');
            $sql = "UPDATE processo SET cliente = '$this->cliente', descricao = '$this->descricao', escritorio = true WHERE numeroprocesso = '$this->nmrProcesso'";
            /** @var 'database/Conexao.php' $bd */
            mysqli_query($bd, $sql);
        }

        public function removerProcesso($nmrProcesso) {
            require ('../../database/Conexao.php');
            $sql = "DELETE FROM processo WHERE numeroprocesso = $nmrProcesso";
            /** @var 'database/Conexao.php' $bd */
            mysqli_query($bd, $sql);
        }


        public function listarTodos($usuario): array {
            require ('../../../database/Conexao.php');

            $sql = "SELECT * FROM processo WHERE idusuario = '$usuario'";
            /** @var 'database/Conexao.php' $bd */
            $result = mysqli_query($bd, $sql);
            $processos = array();
            if ($result) {
                $counter = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $processo = new Processo();
                    $processo->idprocesso = $row['idprocesso'];
                    $processo->nmrProcesso = $row['numeroprocesso'];
                    $processo->cliente = $row['cliente'];
                    $processo->descricao = $row['descricao'];
                    $processo->escritorio = $row['escritorio'];

                    $processos[$counter] = $processo;
                    $counter += 1;
                }
            }
            return $processos;
        }
    }
