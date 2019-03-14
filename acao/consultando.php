
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Ayla Martins</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style2.css" />
  </head>
  <body>
    
    <header class="header_area">
      <div class="main_menu">


        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            
            <a class="navbar-brand logo_h" href="index.html" style="color: #04091e;"
              ><h1>Professores e Alunos<h1> 
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div style="font-family: 'Lobster', cursive;"
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link"  href="index.html">Voltar ao site</a>
                </li>
                <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link"  href="usuario.php">Voltar para Consulta</a>
                </li>
          
    </header>
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
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){ ?>

    <section class="form1" style="padding:100px;">


     <div class="form-ca">
       
       <form class="form-group" method="POST" action="">

       
 
<div class="row">
  <div class="col-25">
    <label for="nome">Nome</label>
  </div>
  <div class="col-75">
    <input type="text" id="fname" readonly name="nome" value="<?php echo $rows_cursos["nome"];?>" placeholder="">
  </div>
</div>
<div class="row">
  <div class="col-25">
    <label for="telefone">Telefone</label>
  </div>
  <div class="col-75">
    <input type="text" id="lname" readonly value="<?php echo $rows_cursos["telefone"];?>" name="telefone" placeholder="">
  </div>
</div>
<div class="row">
  <div class="col-25">
    <label for="email">email</label>
  </div>
  <div class="col-75">
    <input type="text" id="lname" readonly value="<?php echo $rows_cursos["email"];?>" name="email" placeholder="">
  </div>
</div>

<div class="row">
  <div class="col-25">
    <label for="Sexo">Sexo</label>
  </div>
  <div class="col-75">
    <input type="text" id="lname" readonly value="<?php echo $rows_cursos["sexo"];?>" name="email" placeholder="">
  </div>


  <div class="col-25">
    <label for="modalidade" >Modalidade</label>
  </div>
  <div class="col-75">
    <input type="text" id="lname" readonly value="<?php echo $rows_cursos["modalidade"];?>" name="email" placeholder="">
  </div>
</div>

<div class="row">
  <div class="col-25">
    <label for="cadastrarComo">Cadastrado Como</label>
  </div>
  <div class="col-76">
 
    <input type="text" id="lname" readonly value="<?php echo $rows_cursos["cadastrarComo"];?>" name="email" placeholder="">
  </div>

    
</div>
</div>




</div>
</form>
</div>
<?php
    }
 ?>

</body>
</html>