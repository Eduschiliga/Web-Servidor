<main>
    <h1>Honorários</h1>
    <section>
        <ul>
            <li><a href="../../../controller/honorarios.dados.controller.php?acao=incluir">INCLUIR</a></li>
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
                <a href="../../../controller/honorarios.dados.controller.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Edit icon"></a>
            </td>
            <td>
                <a href="../../../controller/honorarios.dados.controller.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Edit icon"></a>
            </td>
        </tr>
        <tr>
            <td>159846</td>
            <td>Marcos Artemio</td>
            <td>02/05/2024</td>
            <td>
                <a href="../../../controller/honorarios.dados.controller.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Edit icon"></a>
            </td>
            <td>
                <a href="../../../controller/honorarios.dados.controller.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Edit icon"></a>
            </td>
        </tr>
        <tr>
            <td>056823</td>
            <td>Fernanda Pachla</td>
            <td>20/04/2024</td>
            <td>
                <a href="../../../controller/honorarios.dados.controller.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Edit icon"></a>
            </td>
            <td>
                <a href="../../../controller/honorarios.dados.controller.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Edit icon"></a>
            </td>
        </tr>
        </tbody>
    </table>
</main>