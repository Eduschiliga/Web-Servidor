<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>

    </head>
    <body>
        <main>
            <h1>Realize o seu Login</h1>
            <form action="../controller/login.controller.php" method="post">
                <label for="oab">número OAB</label>
                <input type="text" id="oab" required placeholder="Informe seu número OAB">
                <label for="password">Senha</label>
                <input type="password" id="password" required placeholder="Informe a sua senha">
                <button type="submit" name="entrar">Entrar</button>
            </form>
        </main>
    </body>
</html>