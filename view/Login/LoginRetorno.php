<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-type" content="text/html; chartset=UTF-8">
        <title>Retorno de Login</title>
    </head>
    <body>
        <header>
            <?php
                echo "
                <h1>Retorno de Login</h1>
                <h3>Usuario ". $_SESSION["login"] . " e Senha ". $_SESSION["password"] ." " . $_SESSION["msg"] . "!!!</h3>
                ";
            ?>
            <a href="http://192.168.1.12:8090/inovemix/"> |<< Voltar</a>
        </header>
        <article>

        </article>
        <section>
            <aside>

            </aside>
            <div>
                
            </div>
        </section>
        <footer>

        </footer>
    </body>
</html>
