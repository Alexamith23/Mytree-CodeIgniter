<?php
    
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
    <input id="prodId" name="prodId" type="hidden" value="xm234jq">
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
            <!--<img src="<?php # echo base_url(); ?>uploads/thL7I78TDN.jpg" width="100" height="100"/>-->
            <?php
                $html = "";
                foreach ($consulta->result() as $fila) {
                    echo "<tr id='$fila->id'>
                                <td>$fila->id</td>
                                <td>".'<img  alt="Adjunto" class="" src="' .base_url("$fila->ruta"). '" width = "250px"  height="250px"/>'."</td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>

</div>
    
</body>
</html>