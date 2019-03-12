<html>
<head>


</head>
<body>
<?php
include "../config.php";

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