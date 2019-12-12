<?php 
$conexion= new mysqli('localhost','root','','colegioMongeRico');
$producto=$_POST['producto'];

	$sql="SELECT existencia
		from inventarioOtros
		where idProducto='$producto' and idEliminado=1";

	$result=mysqli_query($conexion,$sql);

    $cadena="";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.utf8_encode($ver[0]);
	}

	echo  $cadena;
	

?>