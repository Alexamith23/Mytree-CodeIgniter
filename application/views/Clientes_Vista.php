<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $persona = $this->session->user->id;
    $nombre = $this->session->user->nombre;
    $mensaje = $this->session->error;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">

    #add
    {
        background-color: #1d5587;
        color: cornsilk;
        display: inline-block;
        width: 30px;
        height: 30px;
        text-decoration: none;
        border-radius: 5px;
        position: relative;
        left:1150px;
        top: 137px;
	}
    </style>
    <title>Arboles</title>
</head>
<body>
<br>
<?php
        $html = "";
            foreach ($consulta->result() as $fila) {
                $html .= "<tr>
                            <td>$fila->nombre</td><td>$fila->apellido</td><td>$fila->telefono</td>
                            <td>$fila->direccion</td><td>$fila->name</td>";
            }
            echo "
            <br>
            <h1>Hi <strong>$nombre</strong> estos son los usuarios registrados.</h1>
            <h1>$mensaje</h1>
            <br>
            <table class='table table-light'>
                <thead>
                    <tr>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Apellido</th>
                        <th scope='col'>Teléfono</th>
                        <th scope='col'>Dirección</th>
                        <th scope='col'>Pais</th>
                    </tr>
                </thead>
            <tbody>
                $html
            </tbody>
          </table>";
?>
    <br>
</body>
</html>