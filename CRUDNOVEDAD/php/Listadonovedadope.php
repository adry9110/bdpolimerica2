<?php
require "conexion.php";
require "novedad.php";
$novedad = new novedad();
$matriznovedad = $novedad->listar_novedad();
require_once("../indexope.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novedades</title>
</head>

<body>
  <center>
    <h1>Listado de novedades</h1> <br>
    <a href="frmnovedadnuevo.php">Nueva novedad</a>

    <table width="1016" border="1">
      <tr>
        <th width="126" scope="col">Codigo de novedad</th>
        <th width="126" scope="col">Observaciones</th>
        <th width="126" scope="col">codigo operario novedad</th>
        <th width="145" scope="col">ELIMINAR Novedad</th>
        <th width="136" scope="col">MODIFICAR Novedad</th>
      </tr>

      <?php
            foreach ($matriznovedad as $fila) {
      ?>
      <tr>
        <td><?php echo $fila['cod_nove']; ?></td>
        <td><?php echo $fila['observacion']; ?></td>
         <td><?php echo $fila['cod_ope_nove']; ?></td>
          
        
        <td><a href="novedad_eliminar.php?cod=<?php echo $fila['cod_nove']; ?>">Eliminar</a></td>
        <td><a href="frmnovedad_modificar.php?cod=<?php echo $fila['cod_nove']; ?>">Modificar</a></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </center>
</body>

</html>