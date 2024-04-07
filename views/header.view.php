<header>
    <section>
        <span>Nome do Usuário</span>
        <span>OAB: <?= $_SESSION['oab'] ?></span>
        <a href="../controller/logout.controller.php">Logout</a>
    </section>

    <section>
        <form method="get" action="">
            <label>
                Buscar processo
                <input type="text" name="termo_busca" placeholder="Informe o número do processo...">
            </label>
            <button type="submit"><img src="../images/icons/search_icon.png" alt="Ícone de busca"></button>
        </form>
    </section>

    <section>
        <nav>
            <ul>
                <li>
                    <a href="../controller/processos.controller.php"> Processos</a>
                </li>
                <li>
                    <a href="../controller/honorarios.controller.php">Honorários</a>
                </li>
            </ul>
        </nav>
    </section>
</header>