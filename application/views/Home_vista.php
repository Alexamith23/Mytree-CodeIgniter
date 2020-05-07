<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Un millón de árboles</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url("Plantilla/")?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
  #c{
    color:#454549;
  }
</style>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url("Plantilla/")?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url("Plantilla/")?>css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Un Millón de Árboles</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Acerca de </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Mytree</h1>
        <h2 id="col" class="text-white-50 mx-auto mt-2 mb-5" >La asociación <strong>Un millón de árboles</strong> te invita a unirte y ayudar 
        al planeta a tomarse un respiro !Es gratis¡</h2>
        <a href="<?php echo site_url(["Registro_controler","registro"])?>" class="btn btn-primary js-scroll-trigger">Comenzar</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Asociación <strong>Amigos de un millón de árboles</strong></h2>
          <p class="text-white-50">Es una Asociación sin fines de lucro, la cual busca ser auto sostenible mediante la venta de árboles, mantenimiento
            y organización de eventos. 
            Realizamos trabajos de conservación y desarrollo de nuestros recursos naturales mediante la siembra de árboles nativos. 
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

  <!-- Título de las noticias -->
      <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 id ="c"class="mx-auto my-0 text-uppercase">Noticias</h1><br>
      </div>
    </div>
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php echo base_url("Plantilla/")?>img/campfire.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-black">2018 Camp fire</h4>
                <p class="mb-0" id ="c">
                El fuego más destructivo y mortal de la historia de California Consumió un total de 62 053 hectáreas. El incendio más letal de California fue controlado tras dos semanas tras haber
                dejado un saldo de 86 fallecidos y 296 desaparecidos. 
                Destruyó más de 18 000 estructuras, dejando daños que costaron USD 16 000 millones.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
<br>
      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php echo base_url("Plantilla/")?>img/blackdragon.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-black">Mayo de 1987 Black Dragon Fire</h4>
                <p class="mb-0" id="c">En mayo de 1987, tres millones de acres de reservas forestales en China y 15 millones de acres de Rusia se quemaron en el Black Dragon Fire que también destruyó un total de 72 884 kilómetros cuadrados de bosque a lo largo del del río 
                    amur unas 200 personas murieron en el incendio , que se convirtió en el más grande en afectar a China en más de 300 años, 
                    según el diario </p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Project three Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php echo base_url("Plantilla/")?>img/amazonas.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-black">Agosto 2019 Amazonas</h4>
                <p class="mb-0" id="c">
                El Instituto Nacional de Investigaciones Espaciales (INPE) estima que en agosto del 2019 año se quemaron 2,5 
                millones de hectáreas en la Amazonía.
                 “En solo un mes se destruyó una superficie equivalente a la superficie de 
                 la provincia de Tucumán, más de 120 veces la Ciudad de Buenos Aires</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Contact Section -->
  <section class="contact-section bg-black" id="signup">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Dirección</h4>
              <hr class="my-4">
              <div class="small text-black-50">La Unión de Venecia, San Carlos Costa Rica</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">Infoproyectomillondearboles@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Teléfono</h4>
              <hr class="my-4">
              <div class="small text-black-50">(506) 2472 - 2983 / 6111 - 8567</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="https://www.facebook.com/lahoraecologica.21" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/millon_de_arboles/" class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50" color="black">
    <div class="container" id="c">
      Copyright &copy; Alexamith Portillo 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("Plantilla/")?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url("Plantilla/")?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("Plantilla/")?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("Plantilla/")?>js/grayscale.min.js"></script>

</body>

</html>
