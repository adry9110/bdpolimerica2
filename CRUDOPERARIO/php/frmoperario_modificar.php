<?php  
    require ('conexion.php');  
    require ("operario.php");
    $cod = $_REQUEST['cod'];
   
    
    $operario = new operario(); // llamada al metodo constructor
    $matrizoperario = $operario->operarioporcod($cod);
    
?>


<html>

<head>
  <meta charset="utf-8" />
  <title>Crear Operario</title>
</head>

<body>
  <form action="modificaroperario.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <td>Codigo del operario</td>
          <td><label for="codigo"></label>
            <input type="text" name="cod" id="cod_ope" value="<?php echo $matrizoperario[0]['cod_ope']; ?>" readonly />
          </td>
        </tr>
        <tr>
          <td>Nombre del operario</td>
          <td><label for="nombre"></label>
            <input type="text" name="nom" id="nom_ope" value="<?php echo $matrizoperario[0]['nom_ope']; ?>" />
          </td>
        </tr>
        <tr>
          <td>Apellido operario</td>
          <td><input name="ape" type="text" id="ape_ope" value="<?php echo $matrizoperario[0]['ape_ope']; ?> " />&nbsp;
          </td>
        </tr>
        <tr>
         <td>Telefono</td>
          <td><input name="tel" type="text" id="telefono" value="<?php echo $matrizoperario[0]['telefono']; ?> " />&nbsp;
          </td>
        </tr>
         <tr>
         <td>Direccion</td>
          <td><input name="dir" type="text" id="direccion" value="<?php echo $matrizoperario[0]['direccion']; ?> " />&nbsp;
          </td>
        </tr>
         <tr>
         <td>Correo</td>
          <td><input name="correo" type="text" id="correo" value="<?php echo $matrizoperario[0]['correo']; ?> " />&nbsp;
          </td>
        </tr>
         <tr>
         <td>ingrese clave</td>
          <td><input name="clave" type="password" id="clave" value="<?php echo $matrizoperario[0]['ing_clave']; ?> " />&nbsp;
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