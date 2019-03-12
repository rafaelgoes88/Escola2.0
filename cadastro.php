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
            
            <a class="navbar-brand logo_h" href="index.html"
              ><img src="" alt=""
            /></a>
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
           
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link"  href="index.html">Inicio</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="">Eventos</a>
                </li>
               
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Modalidades</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="">Hip Hop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=""
                        >Dança Contemporânea</a
                      >
                      <li class="nav-item">
                        <a class="nav-link" href=""
                          >Jazz Dance</a
                        >
                        <li class="nav-item">
                          <a class="nav-link" href=""
                            >Ballet Clássico</a
                          >
                    </li>
                    </ul>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contato</a>
                </li>
          </div>
        </nav>
      </div>
    </header>
    <section class="home_banner_area">

      <div style="padding-left: 60%;">

    <div class="" style="padding-top: 20%;">
        <!-- Form Name -->
        <h2 class="text-uppercase mt-4 mb-5">
            Cadastrar
         </h2>
      
      <!-- Text input-->
      <form class="form-group" method="POST" action="acao/cadastrando.php">

      <div class="form-group">
        <label class="col-md-4 control-label" for="nome">Nome:</label>  
        <div class="col-md-4">
        <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telefone">Telefone:</label>  
        <div class="col-md-4">
        <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">E-mail:</label>  
        <div class="col-md-4">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="sexo">Sexo:</label>
        <div class="col-md-4">
          <select id="sexo" name="sexo" class="form-control">
            <option value="Não informado">Não informado</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group" style="padding-top: 5%;">
        <label class="col-md-4 control-label" for="data_nascimento">Data de Nascimento:</label>  
        <div class="col-md-4">
        <input id="data_nascimento" name="dataNascimento" type="date" placeholder="" class="form-control input-md">
          
        </div>
      </div>
      
      
      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="senha">Senha:</label>
        <div class="col-md-4">
          <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="cadastrar"></label>
        <div class="col-md-4">
          <button id="cadastrar" name="cadastrar" class="btn btn-primary"style="background-color: #002347; color: #ad38a8">Cadastrar</button>
        </div>
      </div>
      
      </fieldset>
      </form>   
    </div>
    </section>
   
    
    
    <footer class="footer" style=" background: #002347; text-align: center; height:50px;">
        Desenvolvido por R&L<br>
        Projeto Integrador 2019.
         
          
      
    </footer>
  

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
