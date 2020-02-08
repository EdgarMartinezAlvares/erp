<form action="" method="post">

    Idempleado: <br>
	<input type="text" name="IDempleado" placeholder="Escribe el id del empleado">
	<br>
	Salario: <br>
	<input type="text" name="sal" placeholder="Escribe el salario"> <br>
	Fecha de deposito: <br>
	<input type="date" name="fecha_dep"><br>
	Metodo de pago: <br>
	<input type="text" name="met_pag" placeholder="Escribe el metodo de pago"> <br>
	Descuento: <br>
	<input type="text" name="des" placeholder="Escribe el descuento"> <br>
	
	<input type="submit" name="alta" value="Guardar pago "> 
</form>

<?php 
require_once("pago.php");
$obj = new Pago();
	if (isset($_POST["alta"])) {
		$IDempleado=$_POST["IDempleado"];
		$sal=$_POST["sal"];
        $fecha_dep=$_POST["fecha_dep"];
        $met_pag=$_POST["met_pag"];
        $des=$_POST["des"];
		$obj -> alta($IDempleado,$sal,$fecha_dep,$met_pag,$des);
		echo "<h2>Pago registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Idempleado</th>
 		<th>Salario</th>
 		<th>Fecha de deposito</th>
        <th>Metodo de pago</th>
 		<th>Descuento</th>
 		
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["IDempleado"]."</td>";
            echo "<td>".$fila["sal"]."</td>";
            echo "<td>".$fila["fecha_dep"]."</td>";
            echo "<td>".$fila["met_pag"]."</td>";
            echo "<td>".$fila["des"]."</td>";
            echo "</tr>";
 		}
 	 ?>
 </table>