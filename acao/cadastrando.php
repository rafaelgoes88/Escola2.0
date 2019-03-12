<html>
<head>


</head>
<body>
<?php
$db = NULL;
$conexao = NULL;
$conexao = mysqli_connect('localhost','root','') or die(mysqli_error());
$db = mysqli_select_db($conexao,'escola');


?>

<?php
$id = NULL;
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$dataNascimento= $_POST['dataNascimento'];
$senha=$_POST['senha'];
$query = mysqli_query($conexao,"INSERT INTO usuario VALUES ('$id','$nome','$telefone','$email','$sexo','$dataNascimento','$senha')");

echo"<center><h1>Cadastro efetuado com sucesso!!<h1>";

?>
</body>
</html>