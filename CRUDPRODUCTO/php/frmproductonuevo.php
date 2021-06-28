<html>

<head>
  <meta charset="utf-8" />
  <title>Crear producto</title>
</head>

<body>
  <form action="insertarproducto.php" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <tr>
          <td>Codigo producto</td>
          <td><label for="codigo"></label>
            <input type="text" name="cod" id="cod_produ" />
          </td>
        </tr>
          <td>Tipo producto</td>
          <td><label for="tipo"></label>
            <input type="text" name="tipo" id="tipo_produ" />
          </td>
        </tr>
        <tr>
          <td>Nombre producto</td>
          <td><label for="nombre"></label>
            <input type="text" name="nombre" id="nom_produ" />
          </td>
        <tr>
          <td>&nbsp;</td>
          <td><input name="insertar" type="submit" id="enviar" value="Insertar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>