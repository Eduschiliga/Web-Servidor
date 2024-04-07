<section>
    <a href="../../../controller/processos.controller.php">Voltar</a>
    <h1>Cadastrar / Editar</h1>
    <form action="">
        <label>
            Número do processo:
            <input type="text" name="nmr_processo" id="nmr_processo" value=<?= $_SESSION['nmrProcesso']; ?>>
        </label>

        <label>
            Nome Cliente:
            <input type="text" name="nome_cliente" id="nome_cliente" value=<?= $_SESSION['cliente']; ?>>
        </label>

        <label>
            Descrição:
            <input type="text" name="descricao" id="descricao" value=<?= $_SESSION['descricao']; ?>>
        </label>

        <label>
            Próximo prazo:
            <input type="text" name="data_proximo_prazo" id="data_proximo_prazo" value=<?= $_SESSION['proximoPrazo']; ?>>
        </label>

        <label>
            Honorários:
            <input type="number" id="qtd_honorarios" name="qtd_honorarios" min="0" step="0.01" placeholder="R$0.00" value=<?= $_SESSION['qtdHonorarios']; ?>>
        </label>

        <label>Selecione o número de parcelas:
            <select id="nmr_parcelas" name="nmr_parcelas">
                <option value="1">1 parcela</option>
                <option value="2">2 parcelas</option>
                <option value="3">3 parcelas</option>
                <option value="4">4 parcelas</option>
                <option value="5">5 parcelas</option>
                <option value="6">6 parcelas</option>
            </select>
        </label>

        <label>
            Metade para o escritório:
            <input type="radio" name="metade_escritorio" value="sim">Sim
            <input type="radio" name="metade_escritorio" value="nao">Não
        </label>

        <input type="submit" value="Salvar">
    </form>

    <button type="submit" name="atualizar">Atualizar</button>
    <button type="submit" name="remover">Remover</button>
</section>