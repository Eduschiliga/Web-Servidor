<main>
    <a href="../../../controller/honorarios.controller.php">Voltar</a>
    <h1>Cadastrar / Editar - Honorário</h1>
    <form>
        <label>
            Número do processo:
            <input type="text" name="nmr_processo" id="nmr_processo">
        </label>

        <label>
            Honorários:
            <input type="number" id="qtd_honorarios" name="qtd_honorarios" min="0" step="0.01" placeholder="R$0.00">
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

</main>