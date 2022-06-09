<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf8">
    </head>

    <body>
        <div>
            Entre:
            <form method="POST" action="redirect.php?class=Usuario&method=logar">
                <label for="login">Digite seu login:</label>
                <input name="login"/><br/>

                <label for="senha">Digite sua senha:</label>
                <input name="senha" type="password"/><br/>

                <input type="submit">
            </form>
        </div>
    </body>

</html>