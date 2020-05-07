<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $mensaje = $this->session->flashdata('creado');
    $correo = $this->session->user->correo;
    $admin = $this->session->user->administrador;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    
    <style type="text/css">
        .div_b {
            background-color:black;
            width: 500px;
            height:200px;
            position: relative;
            left: 105px;
        }
    </style>
    <title>Arbol</title>
</head>
<body>
<br><br><br><br><br>
<form action="<?php echo site_url(['Arbol_controler','registrar/'.$admin])?>" method="post" class="form-block" role="form">


<input type="hidden" value ="<?php echo $correo?>" id="mail" name ="mail">
<div class="form-group">
    <label for="">Especie de arbol</label>
    <select id="tipo" name="tipo" class="form-control">
        <?php 
            $option ="";
            foreach ($consulta->result() as $fila) 
            {
                $especie = $fila->especie;
                $option .= "<option value = '$fila->id'>$especie</option>";
            }
            echo $option;
        ?>
    </select>
</div>
<div class="form-group">
    <label for="">Nombre del arbol</label>
    <input type="text"  class="form-control" name="arbol" id="arbol">
</div>
<div class="form-group">
    <label for="">Monto a donar</label>
    <input type="number"  class="form-control" name="monto" id="monto">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary bu">Solicitar</button>
</div>
<div class="form-group">
    <a href="arbolesAdmin.php" class="button d"><span class="icon-circle-with-cross d"></a>
</div>
<div class="form-group">
    <h1><?php echo $mensaje ?> </h1>
</div>
<script>paypal.Buttons().render('body');</script>
</form>

            
</body>
</html>