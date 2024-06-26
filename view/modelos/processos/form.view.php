<?php


require('../model/Processo.php');
require('../model/Honorario.php');

if($_SESSION['processo'] == '') {
    $nmrProcesso = '';
    $cliente = '';
    $descricao = '';
    $proximoPrazo = '';
    $honorarios = 0;
    $parcelas = 0;
    $escritorio = '';
} else {
    $processo = unserialize($_SESSION['processo']);
    $honoraio = unserialize($_SESSION['honorario']);
    $nmrProcesso = $processo->getNmrProcesso();
    $cliente = $processo->getCliente();
    $descricao = $processo->getDescricao();
    $escritorio = $processo->getEscritorio();
    $proximoPrazo = $processo->getProximoPrazo();
    $honorarios = $honoraio->getHonorario();
    $parcelas = $honoraio->getParcelas();
}

$erros = $_SESSION['erros'] ?? [];
$acao = $_GET['acao'] ?? '';
$rotulo = ucfirst($acao);
?>
<main class="container">
    <h1><?= $rotulo; ?> Processo</h1>
    <a href="<?='../controller/processo/processos.controller.php' . ($acao == 'editar' ? '?acao=editar' : '')?>" id="btn_voltar" class="button-acao"><img src="../images/icons/voltar.png" alt="Icon Voltar">Voltar</a>

    <!-- Exibe mensagens de erro -->
    <?php foreach ($erros as $campo => $mensagem): ?>
        <div style="background-color: rgba(255, 0, 0, 0.63); padding: 10px; border-radius: 5px;">
            <p style="color: white; font-weight: bold;"><?= $mensagem ?></p>
        </div>
    <?php endforeach;  unset($_SESSION['erros']); ?>

    <form action="<?='../controller/processo/processos.dados.controller.php' . ($acao == 'editar' ? '?acao=editar' : '')?>" class="container-form" method="post">
        <label class="rotulo" style="<?= $acao == 'editar' ? 'display: none' : '' ?>">
            Número do processo *
            <input placeholder="Informe o número do processo" type="text" name="nmr_processo" id="nmr_processo"  maxlength="16" class="input-dado" value="<?= htmlspecialchars($nmrProcesso, ENT_QUOTES, 'UTF-8'); ?>" <?= $acao == 'visualizar' ? 'disabled' : ''; ?> style="<?= $acao == 'editar' ? 'display: none' : '' ?>" >
        </label>

        <label class="rotulo">
            Nome Cliente *
            <input placeholder="Informe o nome do cliente" type="text" name="nome_cliente" id="nome_cliente" class="input-dado" value="<?= htmlspecialchars($cliente, ENT_QUOTES, 'UTF-8'); ?>" <?= $acao == 'visualizar' ? 'disabled' : ''; ?>>
        </label>

        <label class="rotulo">
            Descrição
            <input placeholder="Informe a descrição" type="text" name="descricao" id="descricao" class="input-dado" value="<?= htmlspecialchars($descricao, ENT_QUOTES, 'UTF-8'); ?>" <?= $acao == 'visualizar' ? 'disabled' : ''; ?>>
        </label>

        <label class="rotulo">
            Próximo prazo *
            <input type="date" name="data_proximo_prazo" id="data_proximo_prazo" class="input-dado" value="<?= htmlspecialchars($proximoPrazo, ENT_QUOTES, 'UTF-8'); ?>" <?= $acao == 'visualizar' ? 'disabled' : ''; ?>>
        </label>

        <label class="rotulo">
            Honorários:
            <input type="number" id="qtd_honorarios" name="qtd_honorarios" min="0" step="0.01" placeholder="R$0.00" class="input-dado" value="<?= htmlspecialchars($honorarios, ENT_QUOTES, 'UTF-8'); ?>" <?= $acao == 'visualizar' ? 'disabled' : ''; ?>>
        </label>

        <label class="rotulo">Selecione o número de parcelas
            <select id="nmr_parcelas" name="nmr_parcelas" <?= $acao == 'visualizar' ? 'disabled' : ''; ?>>
                <option value="0" <?= $parcelas == 0 ? 'selected' : ''; ?>>Selecione...</option>
                <option value="1" <?= $parcelas == 1 ? 'selected' : ''; ?>>1 parcela</option>
                <option value="2" <?= $parcelas == 2 ? 'selected' : ''; ?>>2 parcelas</option>
                <option value="3" <?= $parcelas == 3 ? 'selected' : ''; ?>>3 parcelas</option>
                <option value="4" <?= $parcelas == 4 ? 'selected' : ''; ?>>4 parcelas</option>
                <option value="5" <?= $parcelas == 5 ? 'selected' : ''; ?>>5 parcelas</option>
                <option value="6" <?= $parcelas == 6 ? 'selected' : ''; ?>>6 parcelas</option>
            </select>
        </label>

        <label class="rotulo">
            Metade para o escritório
            <select id="metade_escritorio" name="metade_escritorio" <?= $acao == 'visualizar' ? 'disabled' : ''; ?>>
                <option value="padrao">Selecione...</option>
                <option value="sim" <?= $escritorio ? 'selected' : ''; ?>>Sim</option>
                <option value="nao" <?= !$escritorio ? 'selected' : ''; ?>>Não</option>
            </select>
        </label>

        <input type="submit" name="salvar" id="input_submit" class="button-enviar"  <?= $acao == 'visualizar' ? 'style="display: none;"' : ''; ?>>
    </form>
</main>
