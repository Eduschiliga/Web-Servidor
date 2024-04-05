<header>
    <section>
        <span>Nome do Usuário</span>
        <span>OAB: <?= $_SESSION['oab'] ?></span>
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
</header>