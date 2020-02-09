<form action="" method="post">

    Nombre: <br>
	<input type="text" name="nombre" placeholder="Escribe el nombre del producto">
	<br>
	Descripcion: <br>
	<input type="text" name="descripcion" placeholder="Escribe la descripcion"> <br>
	Precio venta: <br>
	<input type="text" name="preciov" placeholder="Escribe el precio de venta"> <br>
	Precio compra: <br>
	<input type="text" name="precioc" placeholder="Escribe el precio de compra"> <br>
	Cantidad: <br>
	<input type="text" name="cantidad" placeholder="Escribe la cantidad"> <br>
	Cantidad minima: <br>
	<input type="text" name="cantmin" placeholder="Escribe la cantidad minima"> <br>
	Cantidad maxima: <br>
	<input type="text" name="cantmax" placeholder="Escribe la cantidad maxima"> <br>
	Categoria: <br>
	<input type="text" name="categoria" placeholder="Escribe la categoria"> <br>
	
	<input type="submit" name="alta" value="Guardar producto"> 
</form>

<?php 
require_once("productos.php");
$obj = new Productos();
	if (isset($_POST["alta"])) {
		$nombre=$_POST["nombre"];
		$descripcion=$_POST["descripcion"];
        $preciov=$_POST["preciov"];
        $precioc=$_POST["precioc"];
        $cantidad=$_POST["cantidad"];
        $cantmin=$_POST["cantmin"];
        $cantmax=$_POST["cantmax"];
        $categoria=$_POST["categoria"];
		$obj -> alta($nombre, $descripcion,$preciov, $precioc,$cantidad,$cantmin,$cantmax,$categoria);
		echo "<h2>producto registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Descripcion</th>
 		<th>Precio venta</th>
        <th>Precio compra</th>
 		<th>Cantidad</th>
 		<th>Cantidad minima</th>
        <th>Cantidad maxima</th>
        <th>Categoria</th>
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["descripcion"]."</td>";
            echo "<td>".$fila["preciov"]."</td>";
            echo "<td>".$fila["precioc"]."</td>";
            echo "<td>".$fila["cantidad"]."</td>";
            echo "<td>".$fila["cantmin"]."</td>";
            echo "<td>".$fila["cantmax"]."</td>";
            echo "<td>".$fila["categoria"]."</td>";
 			echo "</tr>";
 		}
 	 ?>
 </table>