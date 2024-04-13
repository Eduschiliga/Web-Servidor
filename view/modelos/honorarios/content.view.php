<main>
    <h1>Honorários</h1>
    <section>
        <ul>
            <li><a href="form_honorarios_page.php?acao=incluir">INCLUIR</a></li>
        </ul>
    </section>

    <section>
        <form method="get" action="">
            <label>
                Buscar Honorário
                <input type="text" name="termo_busca" placeholder="Informe o número do processo...">
            </label>
            <button type="submit"><img src="/images/icons/search_icon.png" alt="Ícone de busca"></button>
        </form>
    </section>
    <table>
        <thead>
        <tr>
            <th>Número processo</th>
            <th>Cliente</th>
            <th>Próximo prazo</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>987456</td>
            <td>Eduardo Schiliga</td>
            <td>16/04/2024</td>
            <td>
                <a href="form_honorarios_page.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Ícone Edital"></a>
            </td>
            <td>
                <a href="form_honorarios_page.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Ícone Visualizar"></a>
            </td>
        </tr>
        </tbody>
    </table>
</main>