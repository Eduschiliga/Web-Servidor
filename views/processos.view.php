<main>
    <h1>Processos</h1>
    <section>
        <ul>
            <li><a href="../../../controller/processos.dados.controller.php?acao=incluir">INCLUIR</a></li>
            <li><a href="#">REMOVER</a></li>
            <li><a href="../../../controller/processos.dados.controller.php?acao=editar">EDITAR</a></li>
            <li><a href="../../../controller/processos.dados.controller.php?acao=visualizar">VISUALIZAR</a></li>
        </ul>
    </section>

    <section>
        <form method="get" action="">
            <label>
                Buscar processo
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

        </tbody>
    </table>
</main>