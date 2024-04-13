<main>
    <h1>Processos</h1>
    <section>
        <form method="get" action="#">
            <label>
                Buscar processo
                <input type="text" name="nmrProcesso" placeholder="Informe o número do processo..." class="input-processo">
            </label>
            <button type="submit"><img src="/images/icons/search_icon.png" alt="Ícone de busca"></button>
        </form>
    </section>

    <section class="container-button">
        <ul>
            <li><a href="form_processos_page.php?acao=incluir">INCLUIR</a></li>
        </ul>
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
                <a href="form_processos_page.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Ícone Editar"></a>
            </td>
            <td>
                <a href="form_processos_page.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Ícone Visualizar"></a>
            </td>
        </tr>
        </tbody>
    </table>
</main>