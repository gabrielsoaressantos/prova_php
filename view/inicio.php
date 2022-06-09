<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf8">
    </head>

    <body>
        <div>
            Já é usuário do nosso sistema? <a href="login.php">Faça login!</a>
        </div>
        <br>
        <br>
        <div>
            Se não é usuário, preencha o nosso cadastro rapidamente:
            <form method="POST" action="redirect.php?class=Usuario&method=cadastrar">
                <label for="nome">Digite seu nome:</label>
                <input name="nome"/><br/>

                <label for="login">Digite seu login:</label>
                <input name="login"/><br/>

                <label for="senha">Digite sua senha:</label>
                <input name="senha" type="password"/><br/>

                <input type="submit">
            </form>
        </div>
    </body>

</html>