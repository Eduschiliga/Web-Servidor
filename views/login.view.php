
        <main>
            <h1>Realize o seu Login</h1>
            <form action="../controller/login.controller.php" method="post">
                <label>
                    Número OAB
                    <input type="text" id="oab" name="oab" required placeholder="Informe seu número OAB">
                </label>
                <label>
                    Senha
                    <input type="password" id="password" name="password" required placeholder="Informe a sua senha">
                </label>
                <button type="submit" name="entrar">Entrar</button>
            </form>
        </main>