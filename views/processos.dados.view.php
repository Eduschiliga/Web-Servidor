<?php

?>

<section>
    <a href="#">Voltar</a>
    <h1>Cadastrar / Editar</h1>
    <form action="">
        <label>
            Número do processo:
            <input type="text" name="nmr_processo" id="nmr_processo">
        </label>

        <label>
            Nome Cliente:
            <input type="text" name="nome_cliente" id="nome_cliente">
        </label>

        <label>
            Descrição:
            <input type="text" name="descricao" id="descricao">
        </label>

        <label>
            Próximo prazo:
            <input type="date" name="data_proximo_prazo" id="data_proximo_prazo">
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
</section>