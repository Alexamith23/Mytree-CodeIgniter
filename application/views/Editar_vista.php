<?php
defined('BASEPATH') or exit('No direct script access allowed');
$correo = "";
$especiee = "";
$nombre = "";
$size = "";
$id = "";
$persona = "";
$id_especie = "";
foreach ($consultalll->result() as $fila) {
    $correo = $fila->correo;
    $especiee = $fila->especie;
    $nombre = $fila->nombre;
    $size = $fila->size;
    $id = $fila->id;
    $persona = $fila->persona;
    $id_especie = $fila->espid;
}
$mensaje = $this->session->flashdata('editado');
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
    <form action="<?php echo site_url(['Arbol_controler', 'registrarEdit']) ?>" method="post" class="formu">

        <input type="hidden" value="<?php echo $id ?>" id="id_arbol" name="id_arbol">
        <input type="hidden" value="<?php echo $persona ?>" id="persona" name="persona">
        <div class="form-group">
            <label for="">Correo</label>
            <input type="text" class="form-control" name="mail" id="mail" value="<?php echo $correo ?> " disabled>
        </div>

        <div class="form-group">
            <label for="">Especie de arbol</label>
            <select id="tipo" name="tipo" class="form-control">
                <option value="<?php echo $id_especie ?>"><?php echo $especiee ?></option>
                <?php
                $option = "";
                $x = "";
                foreach ($consultall->result() as $fila) {

                    $especie = $fila->especie;
                    $option .= "<option value = '$fila->id' >$especie</option>";
                }
                echo $option;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nombre del arbol</label>
            <input type="text" class="form-control" name="arbol" id="arbol" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
            <label for="">Tamaño</label>
            <input type="number" class="form-control" name="tam" id="tam" value="<?php echo $size ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary bu">Editar</button>
        </div>
        <div class="form-group">
            <h1><?php echo $mensaje ?> </h1>
        </div>

    </form>
</body>

</html>