<?php
    class Honorario {
        private int $idHonorario;
        private float $honorario;
        private int $parcelas;
        private int $idProcesso;

        public function __construct(){
            $this->idHonorario = 0;
            $this->honorario = 0;
            $this->parcelas = 0;
            $this->idProcesso = 0;
        }

        public function getIdHonorario(): string {
            return strval($this->honorario);
        }

        public function setIdHonorario($idHonorario){
            $this->idHonorario = $idHonorario;
        }

        public function getHonorario(): float{
            return $this->honorario;
        }

        public function setHonorario($honorario){
            $this->honorario = $honorario;
        }

        public function getParcelas(): int{
            return $this->parcelas;
        }

        public function setParcelas($parcelas){
            $this->parcelas = $parcelas;
        }

        public function getIdProcesso(): int{
            return $this->idProcesso;
        }

        public function setIdProcesso($idProcesso){
            $this->idProcesso = $idProcesso;
        }

        public function buscarHonorario($idProcesso): void{
            require ('../../database/Conexao.php');
            $select = "SELECT * FROM honorario WHERE idProcesso = '$idProcesso'";
            /** @var 'database/Conexao.php' $bd */
            $result = mysqli_query($bd, $select);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $this->idHonorario = $row['idhonorario'];
                $this->honorario = $row['honorario'];
                $this->parcelas = $row['parcelas'];
            }
        }

        public function criarHonorario(int $idProcesso){
            require ('../../database/Conexao.php');
            $sql = "INSERT INTO honorario(honorario,parcelas,idprocesso) VALUES ('$this->honorario','$this->parcelas',$idProcesso)";
            /** @var 'database/Conexao.php' $bd */
            $result = mysqli_query($bd, $sql);
        }

        public function atualizarHonorario(int $idProcesso){
            require ('../../database/Conexao.php');
            $sql = "UPDATE honorario SET honorario = '$this->honorario', parcelas = '$this->parcelas' WHERE idprocesso = $idProcesso";
            /** @var 'database/Conexao.php' $bd */
            mysqli_query($bd, $sql);
        }
    }