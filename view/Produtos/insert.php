<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-type" content="text/html; chartset=UTF-8">
        <title>Inserção de Produtos</title>
    </head>
    <body>
        <header>
            <?php
                echo "<h1>Inserção de produtos</h1>";
            ?>
        </header>
        <article>
            <form name="frmInsercaoProduto" method="POST" action="?Controller=Produto&Action=salvar">
                <label for="txtNome"> Nome:  </label><input name="txtNome"  id="txtNome"  type="text" placeholder="digite o nome do produto"  required /><br />
                <label for="txtMarca">Marca: </label><input name="txtMarca" id="txtMarca" type="text" placeholder="digite a marca do produto" required /><br />
                <label for="txtPreco">Preço: </label><input name="txtPreco" id="txtPreco" type="text" placeholder="digite o preço do produto" required /><br />
                <br />
                <input type="submit" value="SALVAR" class="btn btn-success" />
            </form>

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