<main class="container">
    <h1>Cadastrar / Editar - Honorário </h1>
    <a href="../../../controller/honorario/honorarios.controller.php" class="button-acao">Voltar</a>

    <!-- Exibindo os erros -->
    <?php if (!empty($_SESSION['erros'])): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                    <li><?php echo $erro; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php unset($_SESSION['erros']); ?>
    <?php endif; ?>

    <form action="../../../controller/forms/valida.forms.controller.php?form=honorarios" class="container-form" method="post">
        <label class="rotulo">
            Número do processo *
            <input type="text" name="nmr_processo" id="nmr_processo" placeholder="Informe o número do processo..." class="input-dado" autofocus maxlength="16">
        </label>

        <label class="rotulo">
            Honorários *
            <input type="number" id="qtd_honorarios" name="qtd_honorarios" min="0" step="0.01" placeholder="R$0.00" class="input-dado">
        </label>

        <label class="rotulo">Selecione o número de parcelas *
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
                <option value="0">Selecione...</option>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
        </label>

        <input type="submit" value="Salvar" class="button-enviar" name="form-honorarios">
    </form>

</main>