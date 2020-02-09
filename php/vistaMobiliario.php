<form action="" method="post">

    Nombre: <br>
	<input type="text" name="nombre" placeholder="Escribe el nombre del mobiliario">
	<br>
	Descripcion: <br>
	<input type="text" name="descripcion" placeholder="Escribe la descripcion"> <br>
	Cantidad: <br>
	<input type="text" name="cantidad" placeholder="Escribe la cantidad del mobiliario"> <br>
	Nic: <br>
	<input type="text" name="nic" placeholder="Escribe el nic"> <br>
	Tipo: <br>
	<input type="text" name="tipo" placeholder="Escribe el tipo"> <br>
	
	<input type="submit" name="alta" value="Guardar Mobiliario"> 
</form>

<?php 
require_once("mobiliario.php");
$obj = new Mobiliario();
	if (isset($_POST["alta"])) {
		$nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $cantidad=$_POST["cantidad"];
        $nic=$_POST["nic"];
        $tipo=$_POST["tipo"];
		$obj -> alta($nombre, $descripcion,$cantidad,$nic,$tipo);
		echo "<h2>Mobiliario registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Descripcion</th>
 		<th>Cantidad</th>
        <th>Nic</th>
 		<th>Tipo</th>
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["descripcion"]."</td>";
            echo "<td>".$fila["cantidad"]."</td>";
            echo "<td>".$fila["nic"]."</td>";
            echo "<td>".$fila["tipo"]."</td>";
            echo "</tr>";
 		}
 	 ?>
 </table>