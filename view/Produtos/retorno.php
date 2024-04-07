<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-type" content="text/html; chartset=UTF-8">
        <title>Retorno dos Produtos</title>
    </head>
    <body>
        <header>
            <?php
                echo "
                <h1>Retorno dos Produtos</h1>
                <table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>MARCA</th>
                            <th>PREÇO</th>
                        </tr>
                        <tr>
                            <td>".$_SESSION["id"]."</td>
                            <td>".$_SESSION["nome"]."</td>
                            <td>".$_SESSION["marca"]."</td>
                            <td>".$_SESSION["preco"]."</td>
                        </tr>
                </table>
                <h3>" . $_SESSION["msg"] . "!!!</h3>
                ";
            ?>
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