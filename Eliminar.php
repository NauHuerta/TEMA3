<?php

include "conexion.php";
$id=$_POST["id"];
$sql = "DELETE FROM servicios WHERE id_servicios=$id";
$resp=mysqli_query($conn,$sql);

if($resp){
	echo "El registro fue eliminado correctamente";
}else{
	echo "Ocurrio un error al eliminar el registro".mysqli_error();
}
mysqli_close($conn);
?>


