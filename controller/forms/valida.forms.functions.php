<?php
function validarNumeroProcesso($numero_processo): bool {
    // Verifica se o número do processo não está vazio e contém exatamente 16 dígitos
    if (!empty($numero_processo) && preg_match('/^\d{16}$/', $numero_processo)) {
        return true;
    }
    return false;
}

function validarHonorarios($honorarios): bool {
    if(!($honorarios > 0 && is_numeric($honorarios))) {
        return false;
    }
    return true;
}

function validarNmrParcelas($nmr_parcelas): bool {
    if(!($nmr_parcelas > 0)) {
        return false;
    }
    return true;
}

function validarNomeCliente($nome_cliente): bool {
    if (!preg_match('/^[a-zA-ZÀ-ÿ\s]+$/', $nome_cliente)) {
        return false;
    }
    return true;
}

function validarDataProximoPrazo($data_proximo_prazo): bool {
    $dataAtual = date('Y-m-d');
    if (!($data_proximo_prazo >= $dataAtual)) {
        return false;
    }
    return true;
}