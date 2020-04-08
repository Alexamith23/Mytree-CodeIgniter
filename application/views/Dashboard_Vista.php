<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $admin = $this->session->user->administrador;
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
                    <a href="" class="navbar-brand"><?php echo $this->session->user->correo;?></a>                  
                </div>
                <ul class ="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url(["Login_controler","salir"])?>">Salir</a></li>
                </ul>
                <?php
                    if($admin=='f')
                    {
                        echo '<div class="collapse navbar-collapse" id="navbar1">
                            <ul class ="nav navbar-nav">
                                <li><a href="#">Mis arboles</a></li>
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
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                <br>
                <h1>¿Sabías qué?</h1>
                    <h4>
                        <li>1 árbol proporciona oxígeno para que respiren 3 personas al día . Por eso los bosques son los "pulmones del planeta".</li><br>
                        <li>Los bosques cubren el 31% de la superfcie terrestre y concentran más de la mitad de la biodiversidad de planeta . 
                        Contribuyen a la conservación de las fuentes de agua, la prevención de inundaciones y protección para los suelos. </li><br>
                        <li>Desaparecen por día unas 13 millones de hectáreas de bosques nativos , lo que equivale a 1 vez y media la ciudad de Buenos Aires. </li>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>