<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $cantidad_de_arboles = $this->session->misArboles->cantidad;
    $persona = $this->session->user->id;
    $nombre = $this->session->user->nombre;
    $mensaje = $this->session->error;
    $admin = $this->session->user->administrador;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arboles</title>
</head>
<body>
<br>
    <?php
        if($cantidad_de_arboles==0)
        {
            echo "<center><h1>¡<strong>$nombre</strong> todavía no has adquirido ningún árbol!</h1></center>";
        }
        else
        {
            $html = "";
            foreach ($consulta->result() as $fila ) {
                $html .= "<tr id='$fila->id'><td>$fila->id</td><td>$fila->especie</td>
                <td>$fila->nombre</td><td>$fila->sizea</td>
                <td><a href=".site_url(['Login_controler',"album/$fila->id"]).">Fotos</a>
                / <a href=".site_url(['Login_controler',"eliminarArbol/$fila->id2/$fila->nombre/$fila->id/$admin/$persona"]).">Eliminar</a></td>";
            }
            echo "
            <br>
            <h1>Hi <strong>$nombre</strong> estos son sus árboles</h1>
            <h1>$mensaje</h1>
            <br>
            <table class='table table-light'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Especie de arbol</th>
                        <th scope='col'>Nombre del arbol</th>
                        <th scope='col'>Tamaño</th>
                        <th scope='col'>Opciones</th>
                    </tr>
                </thead>
            <tbody>
                $html
            </tbody>
          </table>";
        }
    ?>
    <br>
</body>
</html>