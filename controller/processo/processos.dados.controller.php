<?php
    session_start();

    if(!empty($_SESSION['logado'])) {
        $acao = isset($_GET['erro']);
        require '../../model/Processo.php';
        require('../../model/Usuario.php');
        require('../../model/Honorario.php');
        $usuario = unserialize($_SESSION['usuario']);
        $_SESSION['processo'] = '';
        $processo = new Processo();
        $honorario = new Honorario();
        if(!empty($_GET['nmrProcesso']) && ($_GET['acao'] == 'visualizar' || $_GET['acao'] == 'editar')) {
            $processo->setNmrProcesso((int) $_GET['nmrProcesso']);
            $processo->buscarProcesso($usuario->getId());
            $honorario->buscarHonorario($processo->getIdProcesso());
            $_SESSION['honorario'] = serialize($honorario);
            $_SESSION['processo'] = serialize($processo);
        } else {
            if(isset($_POST["salvar"])) {
                if($acao != 'incluir') {
                    require '../../utils/Validacao.php';
                    $erros = Validacao::getErros();
                    if (!empty($erros)) {
                        $_SESSION['erros'] = $erros;
                        header("Location: ../../view/pages/processos/form_processos_page.php");
                        exit();
                    }
                }
                $processo->setNmrProcesso($_POST["nmr_processo"] ?? 0);
                $processo->buscarProcesso($usuario->getId());
                $cliente = $_POST["nome_cliente"] ?? '';
                $descricao = $_POST["descricao"] ?? '';
                $proximoPrazo = $_POST["data_proximo_prazo"];
                $_POST["metade_escritorio"] == "sim" ? $escritorio = true : $escritorio = false;
                if($processo->getCliente() != '') {
                    $processo->setDescricao($descricao);
                    $processo->setCliente($cliente);
                    $processo->setEscritorio($escritorio);
                    $processo->setProximoPrazo($proximoPrazo);
                    $processo->atualizarProcesso();
                    $honorario->setHonorario($_POST['qtd_honorarios']);
                    $honorario->setParcelas($_POST['nmr_parcelas']);
                    $processo->buscarProcesso($usuario->getId());
                    $honorario->atualizarHonorario($processo->getIdProcesso());
                } else {
                    $processo->setCliente($cliente);
                    $processo->setDescricao($descricao);
                    $processo->setEscritorio($escritorio);
                    $processo->setProximoPrazo($proximoPrazo);
                    $processo->criarProcesso($usuario->getId());
                    $honorario->setHonorario($_POST['qtd_honorarios']);
                    $honorario->setParcelas($_POST['nmr_parcelas']);
                    $processo->buscarProcesso($usuario->getId());
                    $honorario->criarHonorario($processo->getIdProcesso());
                }
                $_SESSION['processo'] = serialize($processo);
                header("Location: ../../view/pages/processos/processos_page.php?create=true&nmrProcesso=" . $processo->getNmrProcesso());
                exit();
            }
            if($_GET['acao'] == 'deletar'){
                $processo->removerProcesso($_GET['nmrProcesso']);
                header('Location: ../../view/pages/processos/processos_page.php?deleted=true&nmrProcesso=' . $_GET['nmrProcesso']);
                exit();
            }
        }
        header("Location: ../../view/pages/processos/form_processos_page.php?acao=" . $_GET['acao']);
    } else {
        header('Location: ../../index.php');
    }
    exit();
