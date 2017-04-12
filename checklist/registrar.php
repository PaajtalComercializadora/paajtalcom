<?php
include 'functions/insert.php';
include 'functions/select.php';

                $respuesta='';
				$clave = utf8_decode($_POST['clave']);
				$estatus = $_POST['estatus'];

					$exist = select_clave_existe($clave);

					if ($exist == 1) 
					{
					  $respuesta= "Este colaborador existe";
					}
					else
					{
                      $respuesta= "Este colaborador no existe";
					}
				
				echo $respuesta;

?>