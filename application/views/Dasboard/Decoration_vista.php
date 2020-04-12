<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $admin = $this->session->user->administrador;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">

#deco
{
    color: #46462c;
    display: inline-block;
    text-decoration: none;
    border-radius: 5px;
    position: relative;
    left:570px;
    border-radius:10px;
    width: 500px;
    height: 350px;
    top:100px;
}
</style>
</head>
<body>
    <div class="container">
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <div id="deco">
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
    </div>
</body>
</html>