<html>
<head>


</head>
<body>
<?php
$host ="localhost";
$user ="";
$pass ="";
$banco ="escola";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_bd($banco) or die(mysql_error());

?>

<?php

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$dataNascimento=$_POST['dataNascimento'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT INTO usuarios(nome, telefone, email, sexo, datanascimento, senha)
VALUES('$nome','$telefone','$email','$sexo','$dataNascimento','$senha')");

echo"<center><h1>Cadastro efetuado comsucesso!!<h1>"

?>
</body>
</html>