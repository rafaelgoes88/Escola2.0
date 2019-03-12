<?php
session_start();
if(($_SESSION == "Usuario") && $_SESSION['acesso'] == 1) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">


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
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2 style="color: #ad38a8;font-family: 'Lobster', cursive;font-size: 70px;">Contate-nos</h2>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap" >
    <div class="jumbotron" style ='font-size:16px'>
		<form class="form-signin" name="form1" method="POST" action="#">
        <h2 class="form-signin-heading">Login</h2>
		<center>
        <label for="inputHora" >Informe o Login</label>
        <input type="text" name="login" id="login" class="form-control" placeholder="Login..." maxlength="10" style ='width:150px'/></br></br>
        <button  type="button" name="fincluir" onclick="f_incluir();" style ='width:110px'
		<?php echo $_SESSION=='Usuario'?'disabled':''; ?> />Incluir</button>
		<button  type="button" name="fexcluir" onclick="f_excluir();" style ='width:110px' 
		<?php echo $_SESSION=='Usuario'?'disabled':''; ?> />Excluir</button>
		<button  type="button" name="falterar" onclick="f_alterar();" style ='width:110px' 
		<?php echo $_SESSION=='Usuario'?'disabled':''; ?> />Alterar</button>
		<button  type="button" name="fconsultar" onclick="f_consultarr();" style ='width:110px'
		<?php echo $_SESSION=='Usuario'?'disabled':''; ?> />Consultar</button>
		</center>
      </form>	
     </div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer" style=" background: #002347; text-align: center; height:50px;">
        Desenvolvido por R&L<br>
        Projeto Integrador 2019.
         
          
      
    </footer>
    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Obrigado</h2>
            <p>Sua menssagem foi enviada com sucesso...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Desculpe !</h2>
            <p>Algo deu errado</p>
          </div>
        </div>
      </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
<script src="js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript" language="javascript">
	function f_incluir(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN e/ou o Campo SENHA");
			}
			else{
				document.form1.action = "usuario_incluir.php";
				document.form1.submit();
			}
		}

		function f_excluir(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN e/ou o Campo SENHA");
			}
			else{
				document.form1.action = "usuario_excluir.php";
				document.form1.submit();
			}
		}

		function f_alterar(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN e/ou o Campo SENHA");
			}
			else{
				document.form1.action = "usuario_alterar.php";
				document.form1.submit();
			}
		}
		
		function f_consultarr(){
			if(document.form1.login.value==""){
				alert("Necessário Preencher o Campo LOGIN");
			}
			else{
				document.form1.action = "usuario_consultar.php";
				document.form1.submit();
			}
		}
		
    function alterar(){
      if(document.form1.login.value==""){
				alert("Não teve nenhuma Alteração!");
			}
			else{
				document.form1.action = "usuario_alterar.php";
				document.form1.submit();
			}

    }
</script>
<?php
}
else{
	echo "<script> window.location='index.php';</script>"; 
}
?>