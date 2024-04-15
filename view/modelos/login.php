<?php $erro = isset($_GET['erro']) ?>

<section>
    <div class="login-container">
        <h1>Realize o seu Login</h1>
        <form class="login-form" action="controller/login/login.controller.php" method="post">
            <?php if($erro) : ?>
                <div class="container-msg-erro">
                    <p class="msg-erro">Usuário ou Senha inválidos! Tente novamente.</p>
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
    </div>
</section>