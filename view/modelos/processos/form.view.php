<?php
    require_once('../../../model/Processo.php');
    $processo = unserialize($_SESSION['processo']);
?>
<main class="container">
    <h1>Cadastrar / Editar</h1>
    <a href="../../../controller/processo/processos.controller.php" id="btn_voltar" class="button-acao">Voltar</a>

    <!-- Exibindo os erros -->
    <?php if (!empty($_SESSION['erros'])): ?>
        <div>
            <ul>
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                    <li><?php echo $erro; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php unset($_SESSION['erros']); ?>
    <?php endif; ?>

    <form action="../../../controller/forms/valida.forms.controller.php?form=processos" class="container-form" method="post">
        <label class="rotulo">
            Número do processo:
            <input placeholder="Informe o número do processo" type="text" name="nmr_processo" id="nmr_processo" class="input-dado" value=<?= $processo->getNmrProcesso(); ?> >
        </label>

        <label class="rotulo">
            Nome Cliente:
            <input placeholder="Informe o nome do cliente" type="text" name="nome_cliente" id="nome_cliente" class="input-dado" value=<?= $processo->getCliente(); ?> >
        </label>

        <label class="rotulo">
            Descrição:
            <input placeholder="Informe a descrição" type="text" name="descricao" id="descricao" class="input-dado" value=<?= $processo->getDescricao(); ?> >
        </label>

        <label class="rotulo">
            Próximo prazo:
            <input type="date" name="data_proximo_prazo" id="data_proximo_prazo" class="input-dado" value=<?= $processo->getProximoPrazo(); ?>>
        </label>

        <label class="rotulo">
            Honorários:
            <input type="number" id="qtd_honorarios" name="qtd_honorarios" min="0" step="0.01" placeholder="R$0.00" class="input-dado" value=<?= $processo->getQtdHonorarios(); ?>>
        </label>

        <label class="rotulo">Selecione o número de parcelas
            <select id="nmr_parcelas" name="nmr_parcelas">
                <option value="0">Selecione...</option>
                <option value="1">1 parcela</option>
                <option value="2">2 parcelas</option>
                <option value="3">3 parcelas</option>
                <option value="4">4 parcelas</option>
                <option value="5">5 parcelas</option>
                <option value="6">6 parcelas</option>
            </select>
        </label>

        <label class="rotulo">
            Metade para o escritório
            <select id="metade_escritorio" name="metade_escritorio">
                <option value="padrao">Selecione...</option>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
        </label>

        <input type="submit" value="Salvar" id="input_submit" class="button-enviar" name="form-processos">
    </form>
</main>