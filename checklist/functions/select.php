<?php
function consulta_clientes(){
	include '../conexion/conexion.php';

$sql = "SELECT ID_Cliente, Nombre, RazonSocial, RFC, Direccion, Telefono, Correo, CONVERT(FechaAlta,char(10)) FechaAlta, Estatus FROM catclientes";
$result = $conectar->query($sql);
$tabla='';

if ($result->num_rows > 0) {
  $i=1;
  $tabla='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Estatus = ($row["Estatus"] == 1) ? '<span class="label label-success" style="cursor: pointer"><i class="fa fa-thumbs-up"></i> Activo</span>' : '<span class="label label-danger" style="cursor: pointer"><i class="fa fa-thumbs-down"></i> Inactivo</span>';  
        $tabla.= '<tr>
                      <td align="center"><h5>'.utf8_encode($row["ID_Cliente"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Nombre"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["RazonSocial"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["RFC"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Direccion"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Telefono"]).'</h5></td>
                      <td><h5>'.utf8_encode($row["Correo"]).'</h5></td>
                      <td align="center"><a href="#" onclick=" return cargardatos('.intval($row["ID_Cliente"]).')" id="editar" class="label label-primary" style="cursor: pointer" data-toggle="collapse" data-target="#demo"><i class="fa fa-pencil"></i> Editar</a></td>
                      <td><form id="frm_activa'.$i.'" class="btn-a" method="POST" >
                      '.$Estatus.'
                      <input type="hidden" name="id" id="id" value="'.$row["ID_Cliente"].'">
                      <input type="hidden" name="Estatus" id="Estatus" value="'.$row["Estatus"].'">
                      </form>
                      </td>
                      
                      </tr>';
        $i++;
    }
} else {
    echo "0 results";
}
$conectar->close();
return $tabla;
}
?>