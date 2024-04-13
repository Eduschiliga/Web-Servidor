<?php session_start(); ?>

<header>
    <section class="container-info">
        <span><strong>Usuário:</strong> <?= $_SESSION['usuario'] ?></span>
        <span><strong>OAB:</strong> <?= $_SESSION['oab'] ?></span>
        <a href="../../../controller/login/logout.php" class="logout">Logout</a>
    </section>

    <section>
        <nav class="container-menu">
            <ul class="lista-menu">
                <li>
                    <a href="../home/home_page.php" class="menu-item"> Página Inicial</a>
                </li>
                <li>
                    <a href="../processos/processos_page.php" class="menu-item">Processos</a>
                </li>
                <li>
                    <a href="../honorarios/honorarios_page.php" class="menu-item">Honorários</a>
                </li>
            </ul>
        </nav>
    </section>
</header>