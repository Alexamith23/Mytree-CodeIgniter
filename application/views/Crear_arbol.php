<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $mensaje = $this->session->flashdata('creado');
    $admin = $this->session->user->administrador;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <title>Arbol</title>
</head>
<body>
<br><br><br><br><br>
<form action="<?php echo site_url(['Arbol_controler','registrar/'.$admin])?>" method="post" class="formu">
<div class="form-group">
    <label for="">Correo</label>
    <select class="form-control" name="mail" id="mail">
        <?php 
            $option ="";
            foreach ($consulta->result() as $fila) 
            {
                $correo = $fila->correo;
                $option .= "<option value = '$correo'>$correo</option>";
            }
            echo $option;
        ?>
    </select>
</div>

<div class="form-group">
    <label for="">Especie de arbol</label>
    <select id="tipo" name="tipo" class="form-control">
        <?php 
            $option ="";
            foreach ($consultall->result() as $fila) 
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
    <button type="submit" class="btn btn-primary bu">Registrar</button>
</div>
<div class="form-group">
    <a href="arbolesAdmin.php" class="button d"><span class="icon-circle-with-cross d"></a>
</div>
<div class="form-group">
    <h1><?php echo $mensaje ?> </h1>
</div>
</form>
</body>
</html>