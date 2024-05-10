<?php

session_start();
/**
 * @return array
 */
function getErros(): array {
    require '../forms/valida.forms.functions.php';
    $erros = [];
    $nmr_processo = $_POST['nmr_processo'] ?? '';
    $nome_cliente = $_POST['nome_cliente'] ?? '';
    $data_proximo_prazo = $_POST['data_proximo_prazo'] ?? '';
    $honorarios = $_POST['qtd_honorarios'] ?? '';
    $nmr_parcelas = $_POST['nmr_parcelas'] ?? '';

    if (empty($nmr_processo)) {
        $erros['nmr_processo_vazio'] = "O campo número do processo é obrigatório.";
    } else if (!validarNumeroProcesso($nmr_processo)) {
        $erros['nmr_processo'] = "O número do processo deve conter exatamente 16 dígitos numéricos.";
    }

    if (empty($nome_cliente)) {
        $erros['nome_cliente_vazio'] = "O campo nome cliente obrigatório.";
    } else if (!validarNomeCliente($nome_cliente)) {
        $erros['nome_cliente_invalido'] = "O nome do cliente não pode conter caracteres especiais.";
    }

    if (empty($data_proximo_prazo)) {
        $erros['data_proximo_prazo_vazia'] = "O campo data próximo prazo é obrigatório.";
    } else if (!validarDataProximoPrazo($data_proximo_prazo)) {
        $erros['data_antiga'] = "A data do próximo prazo não pode ser uma data antiga.";
    }

    if (!empty($honorarios)) {
        if (!validarHonorarios($honorarios)) {
            $erros['honorarios'] = "Os honorários devem ser um número válido e maior que zero.";
        }
    }
    return $erros;
}

if(!empty($_SESSION['logado'])) {
        $acao = isset($_GET['erro']);
        require '../../model/Processo.php';
        require('../../model/Usuario.php');
        $usuario = unserialize($_SESSION['usuario']);
        $processo = new Processo();
        if(!empty($_GET['nmrProcesso'])) {
            $processo->setNmrProcesso((int) $_GET['nmrProcesso']);
            $processo->buscarProcesso($usuario->getId());
            $_SESSION['processo'] = serialize($processo);
        } else {
            if(isset($_POST["salvar"])) {
                if($acao != 'incluir') {
                    $erros = getErros();

                    if (!empty($erros)) {
                        $_SESSION['erros'] = $erros;
                        header("Location: ../../view/pages/processos/form_processos_page.php");
                        exit();
                    }
                }


                $cliente = $_POST["nome_cliente"] ?? '';
                $descricao = $_POST["descricao"] ?? '';
                $nmr_processo = $_POST["nmr_processo"] ?? 0;
                if($_POST["metade_escritorio"] == "Sim") {
                    $escritorio = true;
                } else {
                    $escritorio = false;
                }

                $processo = new Processo();
                $processo->setDescricao($descricao);
                $processo->setCliente($cliente);
                $processo->setEscritorio($escritorio);
                $processo->setNmrProcesso($nmr_processo);
                $processo->criarProcesso($usuario->getId());
                $_SESSION['processo'] = serialize($processo);
            }
        }
        header('Location: ../../view/pages/processos/form_processos_page.php');
    } else {
        header('Location: ../../index.php');
    }
