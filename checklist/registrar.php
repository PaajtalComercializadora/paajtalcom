<?php
include '../funciones/insert.php';
include '../funciones/select.php';

                $respuesta='';
				$datos = [
				"Clave" => utf8_decode($_POST['clave']),
				"Estatus" =>utf8_decode($_POST['social']),
				"RFC" => utf8_decode($_POST['rfc']),
				"Direccion" => utf8_decode($_POST['direccion']),
				"Telefono" => intval($_POST['telefono']),
				"Correo" => utf8_decode($_POST['correo']),
					];


					if ($modo == 1) 
					{
					  $respuesta= actualizar_clientes($datos,$ID);
					}
					else
					{
                      $respuesta= insertar_nuevo_cliente($datos);
					}
				
				echo $respuesta;

?>