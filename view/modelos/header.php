<?php session_start();?>

<header>
    <section>
        <img src="../../../images/logos/logo.png" alt="Logo EFM-SYSTEM" width="130px" height="130px">
    </section>

    <section>
        <nav class="container-menu">
            <ul class="lista-menu">
                <li>
                    <a href="../../../controller/home/home.controller.php" class="menu-item"> Página Inicial</a>
                </li>
                <li>
                    <a href="../../../controller/processo/processos.controller.php" class="menu-item">Processos</a>
                </li>
                <li>
                    <a href="../../../controller/honorario/honorarios.controller.php" class="menu-item">Honorários</a>
                </li>
                <li>
                    <a href="../../../controller/usuario/usuario.controller.php" class="menu-item">Usuários</a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="container-info">
        <span><strong>Usuário:</strong> <?= $_SESSION['usuario'] ?></span>
        <span><strong>OAB:</strong> <?= $_SESSION['oab'] ?></span>
        <a href="../../../controller/login/logout.php" class="logout">Logout</a>
    </section>
</header>