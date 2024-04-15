<?php
session_start();

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

$erros = [];

if(isset($_POST["form-honorarios"])){

    $nmr_processo = $_POST['nmr_processo'] ?? '';
    $honorarios = $_POST['qtd_honorarios'] ?? '';
    $nmr_parcelas = $_POST['nmr_parcelas'] ?? '';

    if(empty($nmr_processo)) {
        $erros['nmr_processo'] = "O campo número do processo é obrigatório.";
    } else if(!validarNumeroProcesso($nmr_processo)) {
        $erros['nmr_processo'] = "O número do processo deve conter exatamente 16 dígitos numéricos.";
    }

    if(empty($honorarios)) {
        $erros['honorarios'] = "O campo honorários é obrigatório.";
    } else if(!validarHonorarios($honorarios)) {
        $erros['honorarios'] = "Os honorários devem ser um número válido e maior que zero.";
    }

    if(!validarNmrParcelas($nmr_parcelas)) {
        $erros['nmr_parcelas'] = "Selecione o número de parcelas.";
    }

    if (!empty($erros)) {
        $_SESSION['erros'] = $erros;
        header("Location: ../../view/pages/honorarios/form_honorarios_page.php");
    } else {
        $_SESSION['success_message'] = "Os dados foram enviados com sucesso!";
        header("Location: ../../view/pages/honorarios/honorarios_page.php");
    }
    exit();

} else if(isset($_POST["form-processos"])) {
    $nmr_processo = $_POST['nmr_processo'] ?? '';
    $nome_cliente = $_POST['nome_cliente'] ?? '';
    $data_proximo_prazo = $_POST['data_proximo_prazo'] ?? '';
    $honorarios = $_POST['qtd_honorarios'] ?? '';
    $nmr_parcelas = $_POST['nmr_parcelas'] ?? '';

    if(empty($nmr_processo)) {
        $erros['nmr_processo_vazio'] = "O campo número do processo é obrigatório.";
    } else if(!validarNumeroProcesso($nmr_processo)) {
        $erros['nmr_processo'] = "O número do processo deve conter exatamente 16 dígitos numéricos.";
    }

    if(empty($nome_cliente)) {
        $erros['nome_cliente_vazio'] = "O campo nome cliente obrigatório.";
    } else if(!validarNomeCliente($nome_cliente)) {
        $erros['nome_cliente_invalido'] = "O nome do cliente não pode conter caracteres especiais.";
    }

    if(empty($data_proximo_prazo)) {
        $erros['data_proximo_prazo_vazia'] = "O campo data próximo prazo é obrigatório.";
    } else if(!validarDataProximoPrazo($data_proximo_prazo)) {
        $erros['data_antiga'] = "A data do próximo prazo não pode ser uma data antiga.";
    }

    if(!empty($honorarios)) {
        if(!validarHonorarios($honorarios)) {
            $erros['honorarios'] = "Os honorários devem ser um número válido e maior que zero.";
        }
    }

    if (!empty($erros)) {
        $_SESSION['erros'] = $erros;
        header("Location: ../../view/pages/processos/form_processos_page.php");
    } else {
        $_SESSION['success_message'] = "Os dados foram enviados com sucesso!";
        header("Location: ../../view/pages/processos/processos_page.php");
    }
    exit();
}