<main>
    <section>
        <form method="get" action="../../../controller/processos.dados.controller.php">
            <label>
                Buscar processo
                <input type="text" name="nmrProcesso" placeholder="Informe o número do processo..." class="input-processo">
            </label>
            <button type="submit"><img src="/images/icons/search_icon.png" alt="Ícone de busca"></button>
        </form>
    </section>

    <section class="container-button">
        <ul>
            <li><a href="../../../controller/processos.dados.controller.php?acao=incluir">INCLUIR</a></li>
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
                    <a href="../../../controller/processos.dados.controller.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Edit icon"></a>
                </td>
                <td>
                    <a href="../../../controller/processos.dados.controller.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Edit icon"></a>
                </td>
            </tr>
            <tr>
                <td>159846</td>
                <td>Marcos Artemio</td>
                <td>02/05/2024</td>
                <td>
                    <a href="../../../controller/processos.dados.controller.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Edit icon"></a>
                </td>
                <td>
                    <a href="../../../controller/processos.dados.controller.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Edit icon"></a>
                </td>
            </tr>
            <tr>
                <td>056823</td>
                <td>Fernanda Pachla</td>
                <td>20/04/2024</td>
                <td>
                    <a href="../../../controller/processos.dados.controller.php?acao=editar"><img src="../../../images/icons/edit_icon.png" alt="Edit icon"></a>
                </td>
                <td>
                    <a href="../../../controller/processos.dados.controller.php?acao=visualizar"><img src="../../../images/icons/visibility_icon.png" alt="Edit icon"></a>
                </td>
            </tr>
        </tbody>
    </table>
</main>