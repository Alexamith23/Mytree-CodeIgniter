<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $admin = $this->session->user->administrador;
    $user = $this->session->user->correo;
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
    <br>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                        <span  class ="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span  class="icon-bar"></span>
                        <span  class="icon-bar"></span>
                    </button>
                    <a href="<?php echo site_url(["Login_controler","dashboard"])?>" class="navbar-brand"><?php echo $user;?></a>                  
                </div>
                <ul class ="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url(["Login_controler","salir"])?>">Salir</a></li>
                </ul>
                <?php
                    if($admin=='f')
                    {
                        echo '<div class="collapse navbar-collapse" id="navbar1">
                            <ul class ="nav navbar-nav">
                                <li><a href='.site_url(["Login_controler","verArboles/$persona"]).'>Mis arboles</a></li>
                                <li><a href="#">Comprar</a></li>
                            </ul>
                        </div>';
                    }
                    else
                    {
                        echo '<div class="collapse navbar-collapse" id="navbar1">
                            <ul class ="nav navbar-nav">
                                <li><a href="#">Gráficos</a></li>
                                <li><a href="#">CRUD arboles</a></li>
                                <li><a href="#">Clientes</a></li>
                            </ul>
                        </div>';
                    }
                ?>
            </div>
        </nav>
    </header>
    <br>
    <?php
    if($admin=='t')
    {
        echo "<div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-5'>
                        <br>
                        <h1>Bienvenido administrador</h1>
                    </div>
                </div>
            </div>";
    }
    ?>
   
</body>
</html>