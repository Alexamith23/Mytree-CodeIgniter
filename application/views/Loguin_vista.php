<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">

    .deco
    {

        position: relative;
        left:390px;
        border-radius:10px;
        top:100px;
    }
</style>
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="msg">
            <?php 
            $error = $this->session->flashdata('error');
            echo "<h1>$error</h1>"?>
        </div>
        <form action="<?php echo site_url(['Login_controler','ingresar'])?>" method="post" class ="deco">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Bienvenido al login</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <input type="password" class="form-control" id="contra" name="contra" placeholder="Contrseña">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <label ><a href="<?php echo site_url(["Registro_controler","index"])?>">Crear cuenta</a></label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

