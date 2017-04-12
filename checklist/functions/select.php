<?php
function select_clave_existe($clave){
	include 'conexion/conexion.php';

$sql = "SELECT nocol FROM colaborador WHERE nocol='".$clave."'";
$result = $conectar->query($sql);
$query='';

if ($result->num_rows > 0) {
  $query = 1;
 
} else {
    $query= 0;
}
$conectar->close();
return $query;
}
?>