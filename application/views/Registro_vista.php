<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url(['css/registro.css'])?>" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <title>Registro</title>
</head>
<body>
<nav class ="head">.</nav>

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1><strong>¿Sabias qué?</strong></h1>
                <h2>15,3 mil millones son talados cada año de los 3 billones de árboles en toda la superficie del planeta.</h2>
            </div>
        </div>
    </div>
    <div class="general">
    <form action= "<?php echo site_url(['Registro_controler','save'])?>" method="post"  class="" role="form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control peque" id="nombre" name="nombre" placeholder="Nombre">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control peque d" id="apellidos" name="apellidos" placeholder="Apellidos">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="number" class="form-control peque " id="telefono" name="telefono" placeholder="Teléfono">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="email" class="form-control peque  v" id="email" name="email" placeholder="Email">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="password" class="form-control largos" id="pass" name="pass" placeholder="Password">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control largos" id="direccion" name="direccion" placeholder="Direccion">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <select id="pais" name="pais" class="form-control largos">
                        <?php    
                            $coneccion =  pg_connect("host=localhost dbname=tree user=postgres password=shemaisrael");
                            $sql = 'select id,name from country';
                            $ejecución = pg_query($coneccion,$sql) or die('La consulta fallo: ' . pg_last_error());
                            while ($row = pg_fetch_row($ejecución)) 
                            {   
                                echo "<option value = $row[0]>$row[1] </option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="hidden" class="" id="administrador" name="administrador" value ="false">
                </div>
            </div>
        </div>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                <button type="submit" class="btn btn-primary bu">Registrarme</button>
                </div>
            </div>
        </div>
        <br>                   
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label ><a href="<?php echo site_url(["Login_controler","index"])?>">Ya tengo una cuenta </a></label>
                </div>
            </div>
        </div>
    </form>
    </div>
    
</div>
</body>
</html>

