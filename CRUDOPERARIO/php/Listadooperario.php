<?php
require "conexion.php";
require "operario.php";
$operario = new operario();
$matrizoperario = $operario->listar_operario();
require_once("../index.php");
?>

  <center>
    <h1>Listado de operario</h1> <br>
    <a href="frmoperarionuevo.php">Nuevo Operario</a>

    <table width="1016" border="1">
      <tr>
        <th width="126" scope="col">codigo Operario</th>
        <th width="126" scope="col">Nombre</th>
        <th width="126" scope="col">Apellido</th>
        <th width="126" scope="col">Telefono</th>
         <th width="126" scope="col">Direccion</th>
          <th width="126" scope="col">Correo</th>
        <th width="145" scope="col">ELIMINAR Estudiante</th>
        <th width="136" scope="col">MODIFICAR Estudiante</th>
      </tr>

      <?php
            foreach ($matrizoperario as $fila) {
      ?>
      <tr>
        <td><?php echo $fila['cod_ope']; ?></td>
        <td><?php echo $fila['nom_ope']; ?></td>
         <td><?php echo $fila['ape_ope']; ?></td>
          <td><?php echo $fila['telefono']; ?></td>
          <td><?php echo $fila['direccion']; ?></td>
          <td><?php echo $fila['correo']; ?></td>
          
        
        <td><a href="operario_eliminar.php?cod=<?php echo $fila['cod_ope']; ?>">Eliminar</a></td>
        <td><a href="frmoperario_modificar.php?cod=<?php echo $fila['cod_ope']; ?>">Modificar</a></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </center>
