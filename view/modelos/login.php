<?php $erro = isset($_GET['erro']) ? true : false ?>

<main>
    <h1>Entre em sua conta</h1>
    <form action="controller/login/login.controller.php" method="post">

        <?php if($erro) : ?>
            <div>
                <h2>Usuário ou Senha inválidos! Tente novamente.</h2>
            </div>
        <?php endif; ?>
        <label>
            Número OAB
            <input type="text" id="oab" name="oab" placeholder="Informe seu número OAB">
        </label>
        <label>
            Senha
            <input type="password" id="password" name="senha" placeholder="Informe a sua senha">
        </label>
        <button type="submit" name="entrar">Entrar</button>
    </form>
</main>