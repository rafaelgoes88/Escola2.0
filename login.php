

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
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/login.css"/>
  </head>

  <body>
    
    <header class="header_area">
      <div class="main_menu">


        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            
            <a class="navbar-brand logo_h" href="index.html"><img src="" alt=""/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link"  href="index.html">Inicio</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="eventos.html">Eventos</a>
                </li>
               
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modalidades</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="">Hip Hop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Dança Contemporânea</a>
                      <li class="nav-item">
                        <a class="nav-link" href="">Jazz Dance</a>
                        <li class="nav-item">
                          <a class="nav-link" href="">Ballet Clássico</a>
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
    <section style="padding:100px;">
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      ENTRAR NO SISTEMA
    </div>

    <!-- Login Form -->
    <form class="form-group" method="POST" action="acao/acesso.php">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="E-mail">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueceu a Senha?</a>
    </div>

  </div>
</div>
           
    </body>
</html>
