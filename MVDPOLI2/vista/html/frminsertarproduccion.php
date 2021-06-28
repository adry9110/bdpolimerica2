<form action="Cinsertarproduccion.php" method="post">
  <center>
    <table width="200" border="1">
      <tr>
        <td>Codigo Produccion</td>
        <td><label for="cod"></label>
          <input type="text" name="cod" id="cod_prod" />
        </td>
      </tr>
      <tr>
        <td>Codigo Operario</td>
        <td><label for="codigo"></label>
          <input type="text" name="codigo" id="cod_ope_prod" />
        </td>
      </tr>
      <tr>
        <td>Lote</td>
        <td><input name="lote" type="text" id="lote" />&nbsp;</td>
      </tr>
      <tr>
        <td>Fecha</td>
        <td><input name="fecha" type="text" id="fecha" />&nbsp;</td>
      </tr>
      <tr>
        <td>Ciclo</td>
        <td><input name="ciclo" type="text" id="ciclo" />&nbsp;</td>
      </tr>
      <tr>
        <td>Peso</td>
        <td><input name="peso" type="text" id="peso" />&nbsp;</td>
      </tr>
      <tr>
        <td>Hora Inicial</td>
        <td><input name="horan" type="text" id="hora_ini" />&nbsp;</td>
      </tr>
      <tr>
        <td>Hora Final</td>
        <td><input name="horaf" type="text" id="hora_fin" />&nbsp;</td>
      </tr>
      <tr>
        <td>Codigo Producto </td>
        <td><input name="codpro" type="text" id="cod_produ_prod" />&nbsp;</td>
      </tr>
      <tr>
        <td>Unidad Rechazada</td>
        <td><input name="unidad" type="text" id="unid_rechazada" />&nbsp;</td>
      </tr>
       <tr>
        <td>Unidad Aceptada</td>
        <td><input name="unid" type="text" id="unid_acept" />&nbsp;</td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td><input name="guardar" type="submit" id="enviar" value="Guardar" /></td>
      </tr>
    </table>
  </center>
</form>