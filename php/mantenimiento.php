<?php 
	require_once("conexion.php");
	class Mantenimiento extends Conexion{
		
		public function alta($fecha_man, $area, $IDmobiliario, $costo_man, $IDempleado){
			$this-> sentencia= "INSERT INTO  mantenimiento VALUES(null, '$fecha_man', '$area', '$IDmobiliario', '$costo_man', '$IDempleado')";
			$this->ejecutarSentencia();
		}

		public function eliminar ($id){
			$this->sentencia = "DELETE FROM mantenimiento WHERE IDmantenimiento=$id";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia="SELECT * FROM mantenimiento";
			return $this->obtenerSentencia();
			
		}
		public function modificar($fecha_man, $area, $IDmobiliario, $costo_man, $IDempleado){
			$this->sentencia="UPDATE FROM usuario SET fecha_man='$fecha_man',area='$area', IDmobiliario='$IDmobiliario',costo_man='$costo_man',IDempleado='$IDempleado' WHERE IDproyecto='id'";
			return $this->ejecutarSentencia();
			
		}

	}
 ?>