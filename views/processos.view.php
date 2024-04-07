<main>
    <h1>Processos</h1>
    <section>
        <ul>
            <li><a href="../../../controller/processos.dados.controller.php?acao=incluir">INCLUIR</a></li>
        </ul>
    </section>

    <section>
        <form method="get" action="../../../controller/processos.dados.controller.php">
            <label>
                Buscar processo
                <input type="text" name="nmrProcesso" placeholder="Informe o número do processo...">
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