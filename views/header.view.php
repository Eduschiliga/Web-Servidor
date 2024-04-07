<?php session_start(); ?>

<header class="menu">
    <section class="container-info-user">
        <span>Nome do Usuário</span>
        <span>OAB: <?= $_SESSION['oab'] ?></span>
        <a href="../../../controller/logout.controller.php">Logout</a>
    </section>

    <section class="container-menu">
        <nav>
            <ul class="lista-menu">
                <li>
                    <a href="../../../controller/processos.controller.php"> Processos</a>
                </li>
                <li>
                    <a href="../../../controller/honorarios.controller.php">Honorários</a>
                </li>
            </ul>
        </nav>
    </section>
</header>