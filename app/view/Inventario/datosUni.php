<?php 
$conexion= new mysqli('localhost','root','','colegioMongeRico');
$talla=$_POST['talla'];

	$sql="SELECT existencia
		from inventarioUni 
		where id='$talla' and idEliminado=1";

	$result=mysqli_query($conexion,$sql);

    $cadena="";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.utf8_encode($ver[0]);
	}

	echo  $cadena;
	

?>