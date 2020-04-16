<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $mensaje = $this->session->flashdata('retorno');
    $arbol = $this->session->flashdata('arbol');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbum</title>
</head>
<body>
<div class="container">
    <form action="<?php echo site_url(['Arbol_controler',"Cargarimagen/$arbol"])?>" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                    <input type="file" name="foto" id="foto"  class="form-control">
                </div>
        </div>
        <br>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
        </div>
    </form>
    <?php echo "<h1>$mensaje</h1>" ?>
    <br>
    <center><h1>Álbum de fotos</h1></center>
    <br>
    <table class='table table-light'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Foto</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>
    
</body>
</html>