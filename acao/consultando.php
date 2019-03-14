
<html>
<head>


</head>
<body>
<?php
include "../config.php";

?>


<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "escola";
    //Criar a conexao
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM cadastrando WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conexao, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
       
        echo "Nome: ".$rows_cursos['nome']."<br>";
        echo "Telefone: ".$rows_cursos['telefone']."<br>";
        echo "E-mail:  ".$rows_cursos['email']."<br>";
        echo "sexo: ".$rows_cursos['sexo']."<br>";
        echo "Modalidade: ".$rows_cursos['modalidade']."<br>";
        echo "Cadastrado como: ".$rows_cursos['cadastrarComo']."<br>";
     
      
    }


?>

</body>
</html>