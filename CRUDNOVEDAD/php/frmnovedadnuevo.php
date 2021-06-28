<html>

<head>
  <meta charset="utf-8" />
  <title>Crear novedad</title>
</head>

<body>
  <form action="insertarnovedad.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <tr>
          <td>Codigo novedad</td>
          <td><label for="codigo"></label>
            <input type="text" name="cod" id="cod_nove" />
          </td>
        </tr>
          <td>Observaciones</td>
          <td><label for="observacion"></label>
            <input type="text" name="obs" id="observacion" />
          </td>
        </tr>
        <tr>
          <td> Codigo operario novedad</td>
          <td><label for="codigo"></label>
            <input type="text" name="codigo" id="cod_ope_nove" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="insertar" type="submit" id="enviar" value="Insertar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>