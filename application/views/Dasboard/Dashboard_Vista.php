<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $admin = $this->session->user->administrador;
    $user = $this->session->user->nombre;
    $persona = $this->session->user->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
    <br><br><br>
    <header >
        <nav class="navbar navbar-default navbar-fixed-top" id="color">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                        <span  class ="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span  class="icon-bar"></span>
                        <span  class="icon-bar"></span>
                    </button>
                    
                    <a href="<?php echo site_url(["Login_controler","dashboard"])?>" class="navbar-brand">Un millón de árboles</a>                  
                </div>
                
                <?php
                    if($admin=='f')
                    {
                        echo '<div class="collapse navbar-collapse" id="navbar1">
                            <ul class ="nav navbar-nav">
                                <li><a href='.site_url(["Login_controler","verArboles/$persona"]).'>Mis arboles</a></li>
                                <li><a href='.site_url(["Login_controler","comprar/$persona"]).'>Comprar</a></li>
                            </ul>
                            <ul class ="nav navbar-nav navbar-right">
                                <li class ="dropdown">
                                <a href="#" 
                                    class="dropdown-toggle" data-toggle="dropdown" role="button">'.$user.'<span class="caret"></span>
                                    <ul class ="dropdown-menu">
                                    <li><a href='.site_url(["Login_controler","verArboles/$persona"]).'>Mi Cuenta</a></li>
                                    <li><a href='.site_url(["Login_controler","comprar/$persona"]).'>Salir</a></li>
                                </ul>
                                </a>
                                
                                </li>
                            </ul>
                        </div>';
                    }
                    else
                    {
                        echo '<div class="collapse navbar-collapse" id="navbar1">
                            <ul class ="nav navbar-nav">
                                <li><a href='.site_url(["Login_controler","graf"]).'>Gráficos</a></li>
                                <li><a href='.site_url(["Arbol_controler","index"]).'>CRUD arboles</a></li>
                                <li><a href='.site_url(["Arbol_controler","clientes"]).'>Clientes</a></li>
                            </ul>
                            <ul class ="nav navbar-nav navbar-right">
                                <li><a href='.site_url(["Login_controler","salir"]).' id="letras"><strong>'.$user.'</strong></a></li>
                                
                            </ul>
                        </div>';
                    }
                    /**<li><a href='.site_url(["Login_controler","salir"]).' id="letras">Salir</a></li> */
                ?>
            </div>
        </nav>
    </header>
    <br><br>
     <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("Plantilla/")?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url("Plantilla/")?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("Plantilla/")?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("Plantilla/")?>js/grayscale.min.js"></script>
</body>
</html>