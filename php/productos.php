<?php 
	require_once("conexion.php");
	class Productos extends Conexion{
		
		public function alta($nombre, $descripcion, $preciov, $precioc, $cantidad, $cantmin, $cantmax, $categoria){
			$this-> sentencia= "INSERT INTO  producto VALUES(null, '$nombre', '$descripcion', '$preciov', '$precioc', '$cantidad', '$cantmin', '$cantmax', '$categoria')";
			$this->ejecutarSentencia();
		}

		public function eliminar ($id){
			$this->sentencia = "DELETE FROM producto WHERE IDproducto=$id";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia="SELECT * FROM producto";
			return $this->obtenerSentencia();
			
		}
		public function modificar ($nombre, $descripcion, $preciov, $precioc, $cantidad, $cantmin, $cantmax, $categoria){
			$this->sentencia="UPDATE FROM usuario SET nombre='$nombre',descripcion='$descripcion', preciov='$preciov',precioc='$precioc',cantidad='$cantidad',cantmin='$cantmin',cantmax='$cabtmax',categoria='$categoria' WHERE IDproducto='id'";
			return $this->ejecutarSentencia();
			
		}
		

	}
 ?>