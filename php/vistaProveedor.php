<form action="" method="post">

    Nombre: <br>
	<input type="text" name="nombre" placeholder="Escribe el nombre del proveedor">
	<br>
	Telefono: <br>
	<input type="text" name="telefono" placeholder="Escribe el telefono del proveedor"> <br>
	Direccion: <br>
	<input type="text" name="direccion" placeholder="Escribe la direccion"> <br>
	Correo: <br>
	<input type="text" name="correo" placeholder="Escribe el correo"> <br>
	RFC: <br>
	<input type="text" name="rfc" placeholder="Escribe el RFC"> <br>
	
	<input type="submit" name="alta" value="Guardar Proveedor"> 
</form>

<?php 
require_once("proveedor.php");
$obj = new Proveedor();
	if (isset($_POST["alta"])) {
		$nombre=$_POST["nombre"];
		$telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $correo=$_POST["correo"];
        $rfc=$_POST["rfc"];
		$obj -> alta($nombre, $telefono,$direccion, $correo,$rfc);
		echo "<h2>Proveedor registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Telefono</th>
 		<th>Direccion</th>
        <th>Correo</th>
 		<th>RFC</th>
 		
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["telefono"]."</td>";
            echo "<td>".$fila["direccion"]."</td>";
            echo "<td>".$fila["correo"]."</td>";
            echo "<td>".$fila["rfc"]."</td>";
            echo "</tr>";
 		}
 	 ?>
 </table>