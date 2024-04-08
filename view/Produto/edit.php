<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-type" content="text/html; chartset=UTF-8">
        <title>Edição de Produtos</title>
    </head>
    <body>
        <header>
            <?php
                echo "<h1>Edição de produtos</h1>";
            ?>
        </header>
        <article>
            <form name="frmInsercaoProduto" method="POST" action="?Controller=Produto&Action=atualizar&id=<?=$_SESSION["id"]?>">
                                                     <input name="txtId"    id="txtId"    type="hidden" value="<?=$_SESSION["id"]?>"       required /><br />
                <label for="txtNome"> Nome:  </label><input name="txtNome"  id="txtNome"  type="text"   value="<?=$_SESSION["nome"]?>"     required /><br />
                <label for="txtMarca">Marca: </label><input name="txtMarca" id="txtMarca" type="text"   value="<?=$_SESSION["marca"]?>"    required /><br />
                <label for="txtPreco">Preço: </label><input name="txtPreco" id="txtPreco" type="text"   value="<?=$_SESSION["preco"]?>"    required /><br />
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