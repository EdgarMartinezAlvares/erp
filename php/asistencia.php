<?php 
	require_once("conexion.php");
	class Asistencia extends Conexion{
		
		public function alta($fecha,$IDempleado,$hora){
			$this-> sentencia= "INSERT INTO  asistencia VALUES(null, '$fecha', '$IDempleado','$hora')";
			$this->ejecutarSentencia();
		}

		public function eliminar ($id){
			$this->sentencia = "DELETE FROM asistencia WHERE IDasistencia=$id";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia="SELECT * FROM asistencia";
			return $this->obtenerSentencia();
			
		}

	}


 ?>