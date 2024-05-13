<main>
    <h1>Perfil do Usuário</h1>

    <form action="#" class="container-form">
        <label for="nome_user" class="rotulo">
            Nome de usuário
            <input type="text" class="input-dado" name="nome_user" id="nome_user" value="<?= htmlspecialchars($usuario->getNome(), ENT_QUOTES, 'UTF-8'); ?>">
        </label>

        <label for="oab_user" class="rotulo">
            OAB
            <input type="text" class="input-dado" name="oab_user" id="oab_user" value="<?= htmlspecialchars($usuario->getOab(), ENT_QUOTES, 'UTF-8'); ?>" disabled>
        </label>
    </form>


    <h1>Trocar senha</h1>
    <form action="#" class="container-form">
        <label for="senha_antiga_user" class="rotulo">
            Senha Antiga
            <input type="password" class="input-dado" name="nome_user" id="nome_user" maxlength="45">
        </label>

        <label for="senha_nova_user" class="rotulo">
            Senha Nova
            <input type="password" class="input-dado" name="oab_user" id="oab_user" maxlength="45">
        </label>

        <input type="submit" value="Confirmar" class="button-enviar">
    </form>
</main>