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
</head>

<body id="page-top">
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
        <div class="container px-4 text-left" style="position: relative; margin-top: -80px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/png/i9.png"/>
                </div>
                <div class="col-md-8">
                    <section class="row" style="position: relative; margin-top: -100px;">
                        <form name="frmLogin" id="frmLogin" method="post" action="?Controller=Login&Action=logar">
                            <h4>CONECTE-SE PARA INICIAR UMA VENDA</h4>
                            <br />
                            <label class="label" for="txtLogin" class="form-control"> LOGIN </label>
                            <input class="form-control" name="txtLogin" id="txtLogin" placeholder="digite seu login..." type="text" required/>
                            <br />
                            <label class="label" for="txtPassword" class="form-control"> SENHA </label>
                            <input class="form-control" name="txtPassword" id="txtPassword" placeholder="digite sua senha..." type="password" required/>
                            <br /> 
                            <button class="btn btn-success" style="position: relative; margin-left: 500px;">ENTRAR</button>
                        </form>
                    </section>
                </div>
            </div>
            
        </div>
    </header
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; caionolasco.com 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
