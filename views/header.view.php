<?php session_start(); ?>

<header class="menu">
    <section class="container-info-user">
        <span>Nome do Usuário</span>
        <span><strong>OAB:</strong> <?= $_SESSION['oab'] ?></span>
        <a href="../../../controller/logout.controller.php">Logout</a>
    </section>

    <img src="../../../images/logos/logo_advocacia.png" alt="Logo Advocacia" width="100" height="100">

    <section>
        <nav class="container-menu">
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