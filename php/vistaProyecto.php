<form action="" method="post">

    Nombre proyecto: <br>
	<input type="text" name="nombre_pro" placeholder="Escribe el nombre del proyecto">
	<br>
	Tipo proyecto: <br>
	<input type="text" name="tipo_pro" placeholder="Escribe el tipo de proyecto"> <br>
	IDempleado: <br>
	<input type="text" name="IDempleado" placeholder="Escribe el IDempleado" > <br>
	Fecha inicio: <br>
	<input type="date" name="fecha_in"><br>
	Fecha fin: <br>
	<input type="date" name="fecha_fin"><br>
	Descripcion: <br>
	<input type="text" name="descripcion" placeholder="Escribe la dscripcion del proyecto"> <br>
	
	<input type="submit" name="alta" value="Guardar Proyecto"> 
</form>

<?php 
require_once("proyecto.php");
$obj = new Proyecto();
	if (isset($_POST["alta"])) {
		$nombre_pro=$_POST["nombre_pro"];
		$tipo_pro=$_POST["tipo_pro"];
        $IDempleado=$_POST["IDempleado"];
        $fecha_in=$_POST["fecha_in"];
        $fecha_fin=$_POST["fecha_fin"];
        $descripcion=$_POST["descripcion"];
		$obj -> alta( $nombre_pro, $tipo_pro, $IDempleado, $fecha_in, $fecha_fin, $descripcion );
		echo "<h2>Proyecto registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Nombre proyecto</th>
 		<th>Tipo proyecto</th>
 		<th>IDempleado</th>
        <th>Precio</th>
 		<th>Fecha inicio</th>
 		<th>Fecha fin</th>
        <th>Descripcion</th>
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["nombre_pro"]."</td>";
            echo "<td>".$fila["tipo_pro"]."</td>";
            echo "<td>".$fila["IDempleado"]."</td>";
            echo "<td>".$fila["fecha_in"]."</td>";
            echo "<td>".$fila["fecha_fin"]."</td>";
            echo "<td>".$fila["descripcion"]."</td>";
 			echo "</tr>";
 		}
 	 ?>
 </table>