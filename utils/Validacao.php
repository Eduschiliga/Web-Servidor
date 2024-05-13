<?php

class Validacao {

    /**
     * Valida o número do processo.
     * @param string $numero_processo Número do processo a ser validado.
     * @return bool Verdadeiro se válido, falso se inválido.
     */
    public static function validarNumeroProcesso($numero_processo): bool {
        return !empty($numero_processo) && preg_match('/^\d{16}$/', $numero_processo);
    }

    /**
     * Valida os honorários.
     * @param mixed $honorarios Valor dos honorários a ser validado.
     * @return bool Verdadeiro se válido, falso se inválido.
     */
    public static function validarHonorarios($honorarios): bool {
        return $honorarios > 0 && is_numeric($honorarios);
    }

    /**
     * Valida o número de parcelas.
     * @param int $nmr_parcelas Número de parcelas a ser validado.
     * @return bool Verdadeiro se válido, falso se inválido.
     */
    public static function validarNmrParcelas($nmr_parcelas): bool {
        return $nmr_parcelas > 0;
    }

    /**
     * Valida o nome do cliente.
     * @param string $nome_cliente Nome do cliente a ser validado.
     * @return bool Verdadeiro se válido, falso se inválido.
     */
    public static function validarNomeCliente($nome_cliente): bool {
        return preg_match('/^[a-zA-ZÀ-ÿ\s]+$/', $nome_cliente);
    }

    /**
     * Valida a data do próximo prazo.
     * @param string $data_proximo_prazo Data a ser validada.
     * @return bool Verdadeiro se a data é futura, falso se não.
     */
    public static function validarDataProximoPrazo($data_proximo_prazo): bool {
        $dataAtual = date('Y-m-d');
        return $data_proximo_prazo >= $dataAtual;
    }

    /**
     * Valida os dados do formulário de processos.
     * @return array Lista de erros encontrados.
     */
    public static function getErros(): array {
        $erros = [];
        $nmr_processo = $_POST['nmr_processo'] ?? '';
        $nome_cliente = $_POST['nome_cliente'] ?? '';
        $data_proximo_prazo = $_POST['data_proximo_prazo'] ?? '';
        $honorarios = $_POST['qtd_honorarios'] ?? '';
        $nmr_parcelas = $_POST['nmr_parcelas'] ?? '';

        if (empty($nmr_processo)) {
            $erros['nmr_processo_vazio'] = "O campo número do processo é obrigatório.";
        } else if (!self::validarNumeroProcesso($nmr_processo)) {
            $erros['nmr_processo'] = "O número do processo deve conter exatamente 16 dígitos numéricos.";
        }

        if (empty($nome_cliente)) {
            $erros['nome_cliente_vazio'] = "O campo nome cliente é obrigatório.";
        } else if (!self::validarNomeCliente($nome_cliente)) {
            $erros['nome_cliente_invalido'] = "O nome do cliente não pode conter caracteres especiais.";
        }

        if (empty($data_proximo_prazo)) {
            $erros['data_proximo_prazo_vazia'] = "O campo data próximo prazo é obrigatório.";
        } else if (!self::validarDataProximoPrazo($data_proximo_prazo)) {
            $erros['data_antiga'] = "A data do próximo prazo não pode ser uma data antiga.";
        }

        if (!empty($honorarios) && !self::validarHonorarios($honorarios)) {
            $erros['honorarios'] = "Os honorários devem ser um número válido e maior que zero.";
        }

        return $erros;
    }
}