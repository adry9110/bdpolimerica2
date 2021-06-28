<?php
require "conexion.php";
require "producto.php";
$producto = new producto();
$matrizproducto = $producto->listar_producto();
require_once("../index.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>producto</title>
</head>

<body>
  <center>
    <h1>Listado de producto</h1> <br>
    <a href="frmproductonuevo.php">Nuevo producto</a>

    <table width="1016" border="1">
      <tr>
        <th width="126" scope="col">Codigo producto</th>
        <th width="126" scope="col">Tipo de producto</th>
        <th width="126" scope="col">Nombre del producto</th>
        <th width="145" scope="col">ELIMINAR producto</th>
        <th width="136" scope="col">MODIFICAR producto</th>
      </tr>

      <?php
            foreach ($matrizproducto as $fila) {
      ?>
      <tr>
        <td><?php echo $fila['cod_produ']; ?></td>
        <td><?php echo $fila['tipo_produ']; ?></td>
         <td><?php echo $fila['nom_produ']; ?></td>
         
        
        <td><a href="producto_eliminar.php?cod=<?php echo $fila['cod_produ']; ?>">Eliminar</a></td>
        <td><a href="frmproducto_modificar.php?cod=<?php echo $fila['cod_produ']; ?>">Modificar</a></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </center>
</body>

</html>