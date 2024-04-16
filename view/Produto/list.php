<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-type" content="text/html; chartset=UTF-8">
        <title>Listagem de Produtos</title>
    </head>
    <body>
        <header>
        </header>
        <article>
            <?php if($_SESSION["msg"]){ echo "<h1>".$_SESSION["msg"]."</h1>";} ?>
            <table border="1" width="100%">
                <thead><h2>LISTAGEM DE PRODUTOS</h2></thead>
                <tr>
                    <th>COD</th>
                    <th>NOME</th>
                    <th>MARCA</th>
                    <th>PREÇO</th>
                    <th>DATA_CRIAÇÃO</th>
                    <th>USUÁRIO</th>
                    <th>ÚLTIMA_ATUALIAZAÇÃO</th>
                    <th>AÇÃO</th>
                </tr>
                <?php
                $return = $_SESSION["data"];
                foreach($return as $value){
                ?>
                <tr>
                    <td><?=$value[0]?></td>
                    <td><?=$value[1]?></td>
                    <td><?=$value[2]?></td>
                    <td><?=$value[3]?></td>
                    <td><?=$value[4]?></td>
                    <td><?=$value[5]?></td>
                    <td><?=$value[6]?></td>
                    <td>
                        <button id="btnEditar"  onclick="editar('<?=$value[0]?>');" > Editar </button> &nbsp;&nbsp;
                        <button id="btnDeletar" onclick="deletar('<?=$value[0]?>');"> Deletar</button>
                    </td>
                </tr>
                <?php
                }
                ?>
                <tfoot></tfoot>
            </table>
            <br />
            <div style="text-align: center;">
                <a href="?Controller=Produto&Action=novo"><button id="btnNovo" style="padding: 20px;">Novo Produto</button></a>
            </div>
        </article>
        <section>
            <aside>
                <a href="?"> |<< Voltar </a>
            </aside>
            <div>
                
            </div>
        </section>
        <footer>

        </footer>
    </body>
    <script type="application/javascript">
                /*$("#btnNovo").click({

                });*/
        function editar(id){
            //if(window.confirm("Deseja editar o produto c/ código: "+id+"?")){    
                let url = "http://192.168.1.12:8090/inovemix/?Controller=Produto&Action=editar&id="+id;
                window.location = url;
            //}
        }
        
        function deletar(id){
            if(window.confirm("Deseja realmente excluir o produto de código: "+id+"?")){
                let url = "http://192.168.1.12:8090/inovemix/?Controller=Produto&Action=deletar&id="+id;
                window.location = url;
            }
        }

    </script>
</html>
    




