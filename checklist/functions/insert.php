<?php
    function insert_nueva_entrada($clave,$estatus){
	include 'conexion/conexion.php';

	    $sql = "INSERT INTO checklist (nocol,status) 
		VALUES ('".$clave."',".$estatus.")";
		$result = $conectar->query($sql);
		$ok = ($result) ? true : false;
		$conectar->close();
		if ($estatus == 1) {

			$mensaje = ($ok) ? 'Entrada guardada, Bienvenido' : 'Error al guardar';
		}
		if ($estatus == 2) {
			$mensaje = ($ok) ? 'Salida guardada, Provecho' : 'Error al guardar';

		}
		if ($estatus == 3) {
			$mensaje = ($ok) ? 'Entrada guardada, Bienvenido de nuevo' : 'Error al guardar';
			
		}
		if ($estatus == 4) {
			$mensaje = ($ok) ? 'Salida guardada, Buen Día' : 'Error al guardar';

		}
		
		return $mensaje;
     }
?>