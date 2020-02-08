<form action="" method="post">

    Nombre: <br>
	<input type="text" name="nombre" placeholder="Escribe tu nombre">
	<br>
	Tipo: <br>
	<input type="text" name="tipo" placeholder="Escribe el tipo"> <br>
	Descripcion: <br>
	<input type="text" name="descripcion" placeholder="Escribe la descripcion"> <br>
	Precio: <br>
	<input type="text" name="precio" placeholder="Escribe el precio"> <br>
	Stock: <br>
	<input type="text" name="stock" placeholder="Escribe el stock"> <br>
	Existencias: <br>
	<input type="text" name="existencias" placeholder="Escribe las existencias del producto"> <br>
	
	<input type="submit" name="alta" value="Guardar Materia prima"> 
</form>

<?php 
require_once("materiaprima.php");
$obj = new Materiaprima();
	if (isset($_POST["alta"])) {
		$nombre=$_POST["nombre"];
		$tipo=$_POST["tipo"];
        $descripcion=$_POST["descripcion"];
        $precio=$_POST["precio"];
        $stock=$_POST["stock"];
        $existencias=$_POST["existencias"];
		$obj -> alta($nombre, $tipo,$descripcion, $precio,$stock,$existencias);
		echo "<h2>Materia prima registrada</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Tipo</th>
 		<th>Descripcion</th>
        <th>Precio</th>
 		<th>Stock</th>
 		<th>Existencias</th>
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["tipo"]."</td>";
            echo "<td>".$fila["descripcion"]."</td>";
            echo "<td>".$fila["precio"]."</td>";
            echo "<td>".$fila["stock"]."</td>";
            echo "<td>".$fila["existencias"]."</td>";
 			echo "</tr>";
 		}
 	 ?>
 </table>