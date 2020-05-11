<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url("css/") ?>loguin.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="col-md-6" id="decoracion"><br>
            <h1 class="display-1"><img src="<?php echo base_url("imagenes/") ?>brote.png"> unmillondearboles.org <br>
                <h3>
                    <small class="text-muted">La Asociación de Amigos de Un Millón de Árboles
                        busca desarrollar una aplicación Web que les permita recaudar fondos para sostener
                        económicamente sus iniciativas de reforestación.
                    </small>
                </h3>
            </h1>
            <br>
            <ul class="list-group">
                <li class="x">
                    <p class="y"> Haz donaciones para sembrar un árbol</p>
                </li><br><br>
                <li class="x">
                    <p class="y"> Adquiere tus árboles a preferencia</p>
                </li><br><br>
                <li class="x">
                    <p class="y"> Ayúdanos a darle una mano a la naturaleza</p>
                </li><br>
            </ul>
            <h3>
                <small class="text-muted">MyTree.com ofrece una mano al medio ambiente,
                    sembrando un millón de árboles y dándole un respiro al mundo. No sólo adquerirás un árbol sino también
                    le podrás dar seguimiento y ver su evolución.
                </small>
            </h3>
            <ul class="list-group">
                <li class="x">
                    <p class="y"> Podrás ver reportes sobre tus árboles</p>
                </li><br><br>
                <li class="x">
                    <p class="y">Vámos, se parte de esta comunidad que quieres darle un respiro a nuestro planeta!!!</p>
                </li>
            </ul>
        </div>
        <div class="col-md-6 col-md-offset-6 ">
            <form action="<?php echo site_url(['Login_controler', 'ingresar']) ?>" method="post" class="form-horizontal" id="formulario">
                <center><img src="<?php echo base_url("imagenes/") ?>brote(1).png"></center><br>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-12 ">
                        <input type="password" class="form-control" id="contra" name="contra" placeholder="Contrseña">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-12 ">
                        <button type="submit" class="btn btn-success  btn-block">Entrar</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 ">
                        <h5>No tienes una cuenta? <a href="<?php echo site_url(["Registro_controler", "index"]) ?>">Obtener cuenta</a></h5>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 ">
                        <?php $error = $this->session->flashdata('error');
                        echo "<h2>$error</h2>" ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>