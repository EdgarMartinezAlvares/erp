<?php 
	require_once("conexion.php");
	class Venta extends Conexion{
		
		public function alta($fecha, $IDcliente, $total, $tipo_pago){
			$this-> sentencia= "INSERT INTO  jornada VALUES(null, '$fecha', '$IDcliente', '$total', '$tipo_pago')";
			$this->ejecutarSentencia();
		}

		public function eliminar ($id){
			$this->sentencia = "DELETE FROM venta WHERE IDventa=$id";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia="SELECT * FROM venta";
			return $this->obtenerSentencia();
			
		}
		public function modificar($fecha,$IDcliente,$total,$tipo_pago,$id){
			$this->sentencia="UPDATE FROM usuario SET fecha='$fecha',IDcliente='$IDcliente', total='$total', tipo_pago='$tipo_pago' WHERE IDventa='id'";
			return $this->ejecutarSentencia();
			
		}

	}
 ?>