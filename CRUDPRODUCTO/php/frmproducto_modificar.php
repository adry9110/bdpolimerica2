<?php  
    require ('conexion.php');  
    require ("producto.php");
    $cod = $_REQUEST['cod'];
   
    
    $producto = new producto(); // llamada al metodo constructor
    $matrizproducto = $producto->productoporcod($cod);
    
?>


<html>

<head>
  <meta charset="utf-8" />
  <title>Crear producto</title>
</head>

<body>
  <form action="modificarproducto.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <td>Codigo producto</td>
          <td><label for="codigo"></label>
            <input type="text" name="cod" id="cod_produ" value="<?php echo $matrizproducto[0]['cod_produ']; ?>" readonly />
          </td>
        </tr>
        <tr>
          <td>Tipo producto</td>
          <td><label for="tipo"></label>
            <input type="text" name="tipo" id="tipo_produ" value="<?php echo $matrizproducto[0]['tipo_produ']; ?>" />
          </td>
        </tr>
        <tr>
          <td>nom_produ</td>
          <td><input name="nombre" type="text" id="nom_produ" value="<?php echo $matrizproducto[0]['nom_produ']; ?> " />&nbsp;
          </td>
        </tr>
          <td>&nbsp;</td>
          <td><input name="insertar" type="submit" id="enviar" value="Modificar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>

<html>