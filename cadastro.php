<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style2.css" />
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
    <section class="form1" style="padding:100px;">

      
      
    <div class="form-ca">
      <form class="form-group" method="POST" action="acao/cadastrando.php">

      
 
    <div class="row">
      <div class="col-25">
        <label for="nome">Nome</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="nome" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="telefone">Telefone</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="telefone" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="email" placeholder="">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Sexo">Sexo</label>
      </div>
      <div class="col-76">
        <select id="sexo" name="sexo">
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
          <option value="Outro">Outro</option>
        </select>
      </div>

      <div class="col-25">
        <label for="modalidade" style="margin-left: 10px;">Modalidade</label>
      </div>
      <div class="col-76">
        <select id="modalidade"  name="modalidade">
          <option value="Hip Hop">Hip Hop</option>
          <option value="Danca Contemporanea">Dança Contemporânea</option>
          <option value="Jazz Dance">Jazz Dance</option>
          <option value="Balett Classico">Balett Clássico</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="cadastrarComo">Cadastrar Como</label>
      </div>
      <div class="col-76">
        <select id="cadastrarComo" name="cadastrarComo">
          <option value="Professor">Professor</option>
          <option value="Aluno">Aluno</option>
          
        </select>

        
</div>
</div>



     
   
      <input type="submit"style="margin-top: 40px;" value="Cadastrar">
    </div>
  </form>
</div>
    </section>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
