<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="msg">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <form action="<?php echo site_url(['Login_controler','ingresar'])?>" method="post">
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <label ><a href="<?php echo site_url(["Registro_controler","index"])?>">Crear cuenta</a></label>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>

