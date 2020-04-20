<?php
    $mensaje = $this->session->flashdata('retorno');
    $arbol = $this->session->flashdata('arbol');
    $admin = $this->session->user->administrador;
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
    <br>
    <center><h1>Álbum de fotos</h1></center>
    <br>
    <table class='table table-light'>
        <thead>
            <tr>
            <th scope='col'>#</th>
            <th scope='col'>Foto</th>
            <?php if($admin == 't')
            { 
                echo "<th scope='col'>Borrar</th>";
            }?>
                
            </tr>
        </thead>
        <tbody>
            <?php
            if($admin == 't')
            {   
                foreach ($consulta->result() as $fila) {
                    echo "<tr id='$fila->id'>
                                <td>$fila->id</td>
                                <td>".'<img  alt="Adjunto" class="" src="' .base_url("$fila->ruta"). '" width = "250px"  height="250px"/>'."</td>
                                <td><a href=".site_url(['Arbol_controler',"borarFoto/$fila->id/$fila->arbol"]).">Delete</a></td>
                        </tr>";
                }
            }
            else if($admin == 'f'){
                foreach ($consulta->result() as $fila) {
                    echo "<tr id='$fila->id'>
                    <td>$fila->id</td>
                    <td>".'<img  alt="Adjunto" class="" src="' .base_url("$fila->ruta"). '" width = "250px"  height="250px"/>'."</td>
                </tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <?php 
        if($admin == "t")
        {
            echo "<form action=".site_url(['Arbol_controler',"Cargarimagen/$arbol"])." method='post' enctype='multipart/form-data'>
                        <input id='prodId' name='prodId' type='hidden' value='xm234jq'>
                        <div class='container-fluid'>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <input type='file' name='foto' id='foto' class='form-control'> <br>
                                        <button type='submit' class='btn btn-primary'>Agregar</button><br>
                                        <h4>$mensaje</h4>
                                    </div>
                                </div>
                        </div>
                     
                    </form>";
        }
    
    ?>
</div>
    
</body>
</html>