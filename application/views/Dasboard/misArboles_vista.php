<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $cantidad_de_arboles = $this->session->misArboles->cantidad;
    $persona = $this->session->user->id;
    $nombre = $this->session->user->nombre;
    $mensaje = $this->session->error;
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
            $conn = pg_connect("host=localhost dbname=tree user=postgres password=shemaisrael");
            $sql = "select a.id,e.especie, a.nombre, a.sizea, ca.id
            from CLIENTE_ARBOL as ca 
            inner join arbol as a
            on ca.id_arbol = a.id
            inner join especie as e
            on a.especie = e.id
            and ca.id_owner = '$persona'";
            $ejecucion = pg_query($conn,$sql);
            $html = "";
            while ($row = pg_fetch_row($ejecucion)) 
            {   
                $html .= "<tr id='row_{$row[0]}'><td>{$row[0]}</td><td>{$row[1]}</td>
                <td>{$row[2]}</td><td>{$row[3]}</td>
                <td><a href=".site_url(['Login_controler',"album/{$row[0]}"]).">Fotos</a> / <a href=".site_url(['Login_controler',"eliminarArbol/{$row[4]}/{$row[2]}/{$row[0]}"]).">Eliminar</a></td>";
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