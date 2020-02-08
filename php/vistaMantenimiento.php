<form action="" method="post">

	Fecha: <br>
	<input type="date" name="fecha_man">
	<br>
    Area: <br>
    <input type="text" name="area" placeholder="Escribe la area del mantenimiento">
	<br>
    Costo: <br>
	<input type="text" name="costo_man" placeholder="Escribe el costo del mantenimiento"> <br>
    <br>
    <input type="submit" name="alta" value="Guardar Mantenimiento">
    <br>
</form>

<?php 
require_once("mantenimiento.php");
$obj = new Mantenimiento();
	if (isset($_POST["alta"])) {
		$fecha_man=$_POST["fecha_man"];
		$area=$_POST["area"];
		$costo_man=$_POST["costo_man"];
		$obj -> alta($fecha_man, $area,0, $costo_man,0);
		echo "<h2>Mantenimiento registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Fecha</th>
 		<th>Area</th>
 		<th>Costo</th>
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["fecha_man"]."</td>";
            echo "<td>".$fila["area"]."</td>";
            echo "<td>".$fila["costo_man"]."</td>";
 			echo "</tr>";
 		}
 	 ?>
 </table>