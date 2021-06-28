<html>

<head>
  <meta charset="utf-8" />
  <title>Crear Operario</title>
</head>

<body>
  <form action="insertaroperario.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <tr>
          <td>Codigo operario</td>
          <td><label for="codigo"></label>
            <input type="text" name="cod" id="cod_ope" />
          </td>
        </tr>
          <td>Nombre del Operario</td>
          <td><label for="nombre"></label>
            <input type="text" name="nom" id="nom_ope" />
          </td>
        </tr>
        <tr>
          <td>Apellido del operario</td>
          <td><label for="apellido"></label>
            <input type="text" name="ape" id="ape_ope" />
          </td>
        </tr>
          <td>Telefono</td>
           <td><label for="telefono"></label>
          <input name="tel" type="text" id="telefono" />
        </tr>
         </tr>
          <td>Direccion</td>
           <td><label for="direccion"></label>
          <input name="dir" type="text" id="direccion" />
        </tr>
         </tr>
          <td>Correo</td>
           <td><label for="correo"></label>
          <input name="correo" type="correo" id="correo" />
        </tr>
          <td>Ingrese Clave</td>
           <td><label for="clave"></label>
          <input name="clave" type="password" id="ing_clave" />
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="insertar" type="submit" id="enviar" value="Insertar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>