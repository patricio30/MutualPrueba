<?php
include("../admin/conexion.php");

$valor = $_POST["valor"];
$sql = mysqli_query($conexion,"UPDATE expedientes SET es_anual='0' WHERE id='$valor'");
if($sql){
	echo json_encode(array('mensaje' => "Expediente anual", 'salida' => '0'));
}
else{
	echo json_encode(array('mensaje' => "Error ".mysqli_error($conexion), 'salida' => '1'));
}

?>