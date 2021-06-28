<html>

<head>
  <meta charset="utf-8" />
  <title>Crear turno</title>
</head>

<body>
  <form action="insertarturno.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <tr>
          <td>Codigo turno</td>
          <td><label for="cod"></label>
            <input type="text" name="cod" id="cod_tur" />
          </td>
        </tr>
          <td>Codigo operario por turno</td>
          <td><label for="codigo"></label>
            <input type="text" name="codigo" id="cod_ope_tur" />
          </td>
        </tr>
        <tr>
          <td>Fecha</td>
          <td><label for="fecha"></label>
            <input type="text" name="fec" id="fecha" />
          </td>
        </tr>
          <td>Jornada</td>
           <td><label for="jornada"></label>
          <input name="jor" type="text" id="jornada" />
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="insertar" type="submit" id="enviar" value="Insertar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>