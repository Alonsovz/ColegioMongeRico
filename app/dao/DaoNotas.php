<?php 

class DaoNotas extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new Pagos();
    }


    public function mostrarNotasColectoresLenguaje($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasLenguaje n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and n.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notas(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }



    public function guardarNotas( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0) {
      

        $_query = "
        update notasLenguaje set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


}

