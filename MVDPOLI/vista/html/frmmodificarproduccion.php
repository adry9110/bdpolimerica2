<form action="Cactualizarproduccion.php" method="post">
  <center>
    <table width="200" border="1">
      <tr>
        <td>Codigo</td>
        <td><label for="cod"></label>
          <input type="text" readonly name="cod" id="cod_prod" value = "<?php echo
          $matrizproduccion[0]['cod_prod'];?>"/>
        </td>
      </tr>
      <tr>
        <td>Codigo Produccion</td>
        <td><label for="codigo"></label>
          <input type="text" name="codigo" id="cod_ope_prod" value = " <?php echo 
            $matrizproduccion[0]['cod_ope_prod'];?>"/>
        </td>
      </tr>
      <tr>
        <td>Lote</td>
        <td><input name="lote" type="text" id="lote"  value = "<?php echo
          $matrizproduccion[0]['lote'];?>"/> </td>
      </tr>
            
      <tr>
        <td>Fecha</td>
        <td><input name="fecha" type="text" id="fecha"  value = "<?php echo
          $matrizproduccion[0]['fecha'];?>"/> </td>
      </tr>
      <tr>
        <td>Ciclo</td>
        <td><input name="ciclo" type="text" id="ciclo"  value =" <?php echo
          $matrizproduccion[0]['ciclo'];?>"/> </td>
      </tr>
        <tr>
        <td>peso</td>
        <td><input name="peso" type="text" id="peso"  value = "<?php echo
          $matrizproduccion[0]['peso'];?>"/> </td>
      </tr>
       <tr>
        <td>Hora Inicio</td>
        <td><input name="horan" type="text" id="hora_ini"  value =" <?php echo
          $matrizproduccion[0]['hora_ini'];?>"/> </td>
      </tr>
       <tr>
        <td>Hora Final</td>
        <td><input name="horaf" type="text" id="hora_fin"  value =" <?php echo
          $matrizproduccion[0]['hora_fin'];?>"/> </td>
      </tr>
       <tr>
        <td>Codigo Producto</td>
        <td><input name="codpro" type="text" id="cod_produ_prod"  value =" <?php echo
          $matrizproduccion[0]['cod_produ_prod'];?>"/> </td>
      </tr>
       <tr>
        <td>Unidad Rechazada</td>
        <td><input name="unidad" type="text" id="unid_rechazada"  value =" <?php echo
          $matrizproduccion[0]['unid_rechazada'];?>"/> </td>
      </tr>
       <tr>
        <td>Unidad Aceptada</td>
        <td><input name="unid" type="text" id="unid_acept"  value =" <?php echo
          $matrizproduccion[0]['unid_acept'];?>"/> </td>
      </tr>
       
     

      <tr>
        <td>&nbsp;</td>
        <td><input name="guardar" type="submit" id="enviar" value="Guardar" /></td>
      </tr>
    </table>
  </center>
</form>