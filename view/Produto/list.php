<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>I9 - Inove Mix</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="assets/img/png/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    </head>
    <body id="page-top" onload="getDados();">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Inove Mix</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Solicitar cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Esqueci a senha</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Solicitar Suporte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <article class="container px-4 text-left" style="position: relative; margin-top: -80px;">
                <?php if($_SESSION["msg"]){ echo "<h1>".$_SESSION["msg"]."</h1>";} ?>
                <table width="100%" class="table table-hover table-strip" id="table-product" name="table-product">
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
        </header>
        <section>
                <aside id="page">
                    
                </aside>
        </section>
        <footer>
            <a href="?"> |<< Voltar </a>
        </footer>
        
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

            function getDados(){
                $.ajax({
                    type: "POST",
                    data: {action: "result"},
                    url: "model/Produto/function/listProduto.php",
                    success: function(data){
                        $('#page').html(data);
                    }
                })
            }

        </script>
    </body>
</html>
    




