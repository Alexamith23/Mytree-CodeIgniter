<?php
defined('BASEPATH') or exit('No direct script access allowed');
$admin = $this->session->user->administrador;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
        #deco {
            position: absolute;
            left: 100px;
            top:100px;
        }
    </style>
</head>

<body>
    <br>
    <div class="container">
        <div class="col-md-8 col-md-offset-4"><br>
            <h1>¿Sabías qué?</h1>
            <h4>
                <li>1 árbol proporciona oxígeno para que respiren 3 personas al día . Por eso los bosques son los "pulmones del planeta".</li><br>
                <li>Los bosques cubren el 31% de la superfcie terrestre y concentran más de la mitad de la biodiversidad de planeta .
                    Contribuyen a la conservación de las fuentes de agua, la prevención de inundaciones y protección para los suelos. </li><br>
                <li>Desaparecen por día unas 13 millones de hectáreas de bosques nativos , lo que equivale a 1 vez y media la ciudad de Buenos Aires. </li>
            </h4>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("Plantilla/")?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url("Plantilla/")?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("Plantilla/")?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("Plantilla/")?>js/grayscale.min.js"></script>
</body>
</html>