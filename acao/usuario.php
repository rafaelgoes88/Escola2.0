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

$email=$_POST['email'];

$senha=$_POST['senha'];

$query = mysqli_query($conexao,"INSERT INTO usuario VALUES ('$id','$nome','$email',$senha)");

echo "<script>alert('Cadastrado com sucesso');</script>";
echo "<script> window.location='../cadastro-usuario.php';</script>";

?>
</body>
</html>