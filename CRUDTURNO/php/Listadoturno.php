<?php
require "conexion.php";
require "turno.php";
$turno = new turno();
$matrizturno = $turno->listar_turno();
require_once("../index.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Turno</title>
</head>

<body>
  <center>
    <h1>Listado de turno</h1> <br>
    <a href="frmturnonuevo.php">Nuevo turno</a>

    <table width="1016" border="1">
      <tr>
        <th width="126" scope="col">Codigo turno</th>
        <th width="126" scope="col">Codigo operario</th>
        <th width="126" scope="col">Fecha</th>
        <th width="126" scope="col">Jornada</th>
        <th width="145" scope="col">ELIMINAR turno</th>
        <th width="136" scope="col">MODIFICAR turno</th>
      </tr>

      <?php
            foreach ($matrizturno as $fila) {
      ?>
      <tr>
        <td><?php echo $fila['cod_tur']; ?></td>
        <td><?php echo $fila['cod_ope_tur']; ?></td>
         <td><?php echo $fila['fecha']; ?></td>
          <td><?php echo $fila['jornada']; ?></td>
        
        <td><a href="turno_eliminar.php?cod=<?php echo $fila['cod_tur']; ?>">Eliminar</a></td>
        <td><a href="frmturno_modificar.php?cod=<?php echo $fila['cod_tur']; ?>">Modificar</a></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </center>
</body>

</html>