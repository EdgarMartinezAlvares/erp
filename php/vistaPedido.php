<form action="" method="post">

    Fecha: <br>
    <input type="date" name="fecha">
    <br>
	IDcliente: <br>
	<input type="text" name="IDcliente" placeholder="Escribe el IDcliente"> <br>
	Precio: <br>
	<input type="text" name="precio" placeholder="Escribe el precio"> <br>
	Cantidad: <br>
	<input type="text" name="cantidad" placeholder="Escribe la cantidad"> <br>
	Direccion: <br>
	<input type="text" name="direccion" placeholder="Escribe la direccion"> <br>
	IDproducto: <br>
	<input type="text" name="IDproducto" placeholder="Escribe el IDproducto"> <br>
	
	<input type="submit" name="alta" value="Guardar Pedido"> 
</form>

<?php 
require_once("pedido.php");
$obj = new Pedido();
	if (isset($_POST["alta"])) {
		$fecha=$_POST["fecha"];
		$IDcliente=$_POST["IDcliente"];
        $precio=$_POST["precio"];
        $cantidad=$_POST["cantidad"];
        $direccion=$_POST["direccion"];
        $IDproducto=$_POST["IDproducto"];
		$obj -> alta($fecha, $IDcliente,$precio, $cantidad,$direccion,$IDproducto);
		echo "<h2>Pedido registrado</h2>";
	}
 ?>

 <table>
 	<tr>
 		<th>Fecha</th>
 		<th>IDcliente</th>
 		<th>precio</th>
        <th>cantidad</th>
 		<th>direccion</th>
 		<th>IDproducto</th>
 	</tr>
 	<?php 
 		$res= $obj-> consulta();
 		while ($fila=$res->fetch_assoc()) {
 			echo "<tr>";
 			echo "<td>".$fila["fecha"]."</td>";
            echo "<td>".$fila["IDcliente"]."</td>";
            echo "<td>".$fila["precio"]."</td>";
            echo "<td>".$fila["cantidad"]."</td>";
            echo "<td>".$fila["direccion"]."</td>";
            echo "<td>".$fila["IDproducto"]."</td>";
 			echo "</tr>";
 		}
 	 ?>
 </table>