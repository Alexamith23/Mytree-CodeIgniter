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
    <link href="<?php echo base_url("Bootstrap/")?>style.css" rel="stylesheet">
    <link href="<?php echo base_url("Bootstrap/")?>style.css" >
    <link href="<?php echo base_url("Bootstrap/")?>style.css" >
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
    <script type ="text/javascript">
        function validar()
        {
            var respuesta = confirm("Seguro quiere eliminar el arbol?");
            if(respuesta)
            {
                return true;
            }else{
                return false;
            }
        }
    </script>
    <title>Arboles</title>
</head>
<body>
<br>
<a id="add" href="<?php echo site_url(["Arbol_controler","crearArbol"])?>" class ="icon-add-to-list"><center id="let"></center></a>
<?php
        $html = "";
            foreach ($consulta->result() as $fila) {
                $html .= "<tr id='$fila->id'>
                            <td>$fila->id</td><td>$fila->nom</td><td>$fila->especie</td>
                            <td>$fila->nombre</td><td>$fila->sizea</td>
                            <td>$fila->monto</td>
                            <td><a class='icon-edit' href=".site_url(['Arbol_controler',"editar/$fila->nombre/$fila->persona"])."></a>
                            / <a class='icon-trash' onclick='return validar()' href=".site_url(['Login_controler',"eliminarArbol/$fila->id2/$fila->nombre/$fila->id/$admin/$persona"])."></a>
                            / <a class='icon-instagram' href=".site_url(['Arbol_controler',"formulario/$fila->id"])."></a></td></td>";
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
<script src="<?php echo base_url("Alertas/")?>alertify.js"></script>
<script src="<?php echo base_url("Alertas/")?>alertify.min.js"></script>
</body>
</html>