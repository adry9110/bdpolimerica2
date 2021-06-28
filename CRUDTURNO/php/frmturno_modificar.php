<?php  
    require ('conexion.php');  
    require ("turno.php");
    $cod = $_REQUEST['cod'];
   
    
    $turno = new turno(); // llamada al metodo constructor
    $matrizturno = $turno->turnoporcod($cod);
    
?>


<html>

<head>
  <meta charset="utf-8" />
  <title>Crear turno</title>
</head>

<body>
  <form action="modificarturno.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <td>Codigo turno</td>
          <td><label for="cod"></label>
            <input type="text" name="cod" id="cod_tur" value="<?php echo $matrizturno[0]['cod']; ?>" readonly />
          </td>
        </tr>
        <tr>
          <td>Codigo de operario por turno</td>
          <td><label for="codigo"></label>
            <input type="text" name="codigo" id="cod_ope_tur" value="<?php echo $matrizturno[0]['cod_ope_tur']; ?>" />
          </td>
        </tr>
        <tr>
          <td>Fecha</td>
          <td><input name="fec" type="text" id="fecha" value="<?php echo $matrizturno[0]['fecha']; ?> " />&nbsp;
          </td>
        </tr>
        <tr>
         <td>Jornada</td>
          <td><input name="jor" type="text" id="jornada" value="<?php echo $matrizturno[0]['jornada']; ?> " />&nbsp;
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