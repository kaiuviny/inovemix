<?php
$link = mysqli_connect("127.0.0.1", "root", "", "mvc", "33306");
$query = mysqli_query($link, "SELECT * FROM produtos;");
$rs = mysqli_fetch_array($query);

echo "Produto: ". $rs['nome'];
/*
$txtLogin = $_POST['txtLogin'];
$txtPassword = $_POST['txtPassword'];

echo "Login: $txtLogin e Senha: $txtSenha digitadas! ";
*/
?>