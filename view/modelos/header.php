<?php 
    session_start();
    require('../model/Usuario.php');
    $usuario = unserialize($_SESSION['usuario']);
?>

<header>
    <section>
        <img src="../images/logos/logo_atual.png" alt="Logo EFM-SYSTEM" width="130px" height="130px">
    </section>

    <section>
        <nav class="container-menu">
            <ul class="lista-menu">
                <li>
                    <a href="../controller/home/home.controller.php" class="menu-item">
                        <img src="../images/icons/home.png" alt="Icon Home"> Página Inicial
                    </a>
                </li>
                <li>
                    <a href="../controller/processo/processos.controller.php" class="menu-item"><img src="../images/icons/processos.png" alt="Icon Processos">Processos</a>
                </li>
                <li>
                    <a href="../controller/usuario/usuario.controller.php" class="menu-item"><img src="../images/icons/user.png" alt="Icon User">Usuário</a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="container-info">
        <span><strong>Usuário:</strong> <?= $usuario->getNome(); ?></span>
        <span><strong>OAB:</strong> <?= $usuario->getOab(); ?></span>
        <a href="../controller/login/logout.php" class="logout">Logout</a>
    </section>
</header>