 <h1>Listado de Produccion</h1>


<br>
<a href="Cnuevoproduccion.php">Nueva Produccion</a>


<table border="2">
    <tr>
        <th>Codigo</th>
        <th>Codigo operario</th>
        <th>Lote</th>
        <th>Fecha</th>
        <th>Ciclo</th>
        <th>Peso</th>
        <th>Hora inicio</th>
        <th>Hora final</th>
        <th>Codigo producto</th>
        <th>Unidad rechazada</th>
        <th>Unidad final</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
    <tr>
    </tr>
    <?php
    foreach($matrizproduccion as $fila){
        
    ?>
    <td> <?php echo $fila['cod_prod']?></td>
    <td> <?php echo $fila['cod_ope_prod']?></td>
    <td> <?php echo $fila['lote']?></td>
    <td> <?php echo $fila['fecha']?></td>
    <td> <?php echo $fila['ciclo']?></td>
    <td> <?php echo $fila['peso']?></td>
    <td> <?php echo $fila['hora_ini']?></td>
    <td> <?php echo $fila['hora_fin']?></td>
    <td> <?php echo $fila['cod_produ_prod']?></td>
    <td> <?php echo $fila['unid_rechazada']?></td>
    <td> <?php echo $fila['unid_acept']?></td>
<td> <a href="CModificarproduccion.php?cod=<?php echo $fila ['cod_prod'];?>">Modificar</a></td>
    <td> <a href="CEliminarproduccion.php?cod=<?php echo $fila ['cod_prod'];?>">Eliminar</a"></td>
  
    
</tr>
<?php
      
    }
 ?>
</table>