<?php  
    require ('conexion.php');  
    require ("novedad.php");
    $cod = $_REQUEST['cod'];
   
    
    $novedad = new novedad(); // llamada al metodo constructor
    $matriznovedad = $novedad->novedadporcod($cod);
    
?>


<html>

<head>
  <meta charset="utf-8" />
  <title>Crear Novedad</title>
</head>

<body>
  <form action="modificarnovedad.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <td>codigo de novedad</td>
          <td><label for="codigo"></label>
            <input type="text" name="cod" id="cod_nove" value="<?php echo $matriznovedad[0]['cod_nove']; ?>" readonly />
          </td>
        </tr>
        <tr>
          <td>Observaciones</td>
          <td><label for="observaciones"></label>
            <input type="text" name="obs" id="observacion" value="<?php echo $matriznovedad[0]['observacion']; ?>" />
          </td>
        </tr>
        <tr>
          <td>Codigo operario novedad</td>
          <td><input name="codigo" type="text" id="cod_ope_nove" value="<?php echo $matriznovedad[0]['cod_ope_nove']; ?> " />&nbsp;
          </td>
        </tr>
        </tr>
          <td>&nbsp;</td>
          <td><input name="insertar" type="submit" id="enviar" value="Modificar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>

<html>