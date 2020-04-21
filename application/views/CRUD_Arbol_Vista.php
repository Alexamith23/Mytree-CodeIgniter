<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
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
<a id="add" href="<?php echo site_url(["Arbol_controler","crearArbol"])?>" class ="button"><center id="let">Add</center></a>
<?php
        $html = "";
            foreach ($consulta->result() as $fila) {
                $html .= "<tr id='$fila->id'>
                            <td>$fila->id</td><td>$fila->nom</td><td>$fila->especie</td>
                            <td>$fila->nombre</td><td>$fila->sizea</td>
                            <td>$fila->monto</td>
                            <td><a href=".site_url(['Arbol_controler',"editar/$fila->nombre/$fila->persona"]).">Edit</a>
                            / <a href=".site_url(['Login_controler',"eliminarArbol/$fila->id2/$fila->nombre/$fila->id/$admin/$persona"]).">D</a>
                            / <a href=".site_url(['Arbol_controler',"formulario/$fila->id"]).">I</a></td></td>";
            }
            
            echo "
            <br>
            <h1>Hi <strong>$nombre</strong> estos son los árboles registrados.</h1>
            <h1>$mensaje</h1>
            <br>
            <table class='table table-light'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Amigo</th>
                        <th scope='col'>Especie de arbol</th>
                        <th scope='col'>Nombre del arbol</th>
                        <th scope='col'>Tamaño</th>
                        <th scope='col'>Donación</th>
                        <th scope='col'>Opciones</th>
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