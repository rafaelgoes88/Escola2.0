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
$modalidade=$_POST['modalidade'];
$cadastrarComo=$_POST['cadastrarComo'];
$query = mysqli_query($conexao,"INSERT INTO cadastrando VALUES ('$id','$nome','$telefone','$email','$sexo','$modalidade','$cadastrarComo')");
echo "<script>alert('Cadastrado com sucesso');</script>";
echo "<script> window.location='../cadastro.php';</script>";

?>
</body>
</html>