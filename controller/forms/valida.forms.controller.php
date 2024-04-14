<?php
session_start();

function validarNumeroProcesso($numero_processo): bool {
    // Verifica se o número do processo não está vazio e contém exatamente 16 dígitos
    if (!empty($numero_processo) && preg_match('/^\d{16}$/', $numero_processo)) {
        return true;
    } else {
        return false;
    }
}

$erros = [];

if(isset($_POST["form-honorarios"])){

    $nmr_processo = $_POST['nmr_processo'] ?? '';
    $honorarios = $_POST['qtd_honorarios'] ?? '';
    $nmr_parcelas = $_POST['nmr_parcelas'] ?? '';
    $metade_escritorio = $_POST['metade_escritorio'] ?? '';

    if(!validarNumeroProcesso($nmr_processo)) {
        $erros['nmr_processo'] = "O número do processo deve conter exatamente 16 dígitos.";
    }

    // Verifique outras validações aqui

    if (!empty($erros)) {
        $_SESSION['erros'] = $erros;
        header("Location: ../../view/pages/honorarios/form_honorarios_page.php");
        exit();
    }

} else if(isset($_POST["form-processos"])){

    $nmr_processo = $_POST['nmr_processo'] ?? '';
    $nome_cliente = $_POST['nome_cliente'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $data_proximo_prazo = $_POST['data_proximo_prazo'] ?? '';
    $honorarios = $_POST['qtd_honorarios'] ?? '';
    $nmr_parcelas = $_POST['nmr_parcelas'] ?? '';
    $metade_escritorio = $_POST['metade_escritorio'] ?? '';

    if(!validarNumeroProcesso($nmr_processo)) {
        $erros['nmr_processo'] = "O número do processo deve conter exatamente 16 dígitos.";
    }

    // Verifique outras validações aqui

    if (!empty($erros)) {
        $_SESSION['erros'] = $erros;
        header("Location: ../../view/pages/processos/form_processos_page.php");
        exit();
    }
}
