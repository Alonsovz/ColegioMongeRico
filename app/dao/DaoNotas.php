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
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasLenguaje(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }

    public function mostrarNotasColectoresMatematicas($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasMatematica n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasMatematicas(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresCiencias($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasCiencias n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasCiencias(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresSociales($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasSociales n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasSociales(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresIngles($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasIngles n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasIngles(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresArtistica($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasArtistica n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasArtistica(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresEduFe($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasEduFe n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasEduFe(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresMoral($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasMoral n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasMoral(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresInfo($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasCompu n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasInfo(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasColectoresFisica($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasFisica n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasFisica(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }

    public function mostrarNotasColectoresConducta($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        select n.*, f.nombre as nombreAlumno,
        format((n.nota1 + n.nota2 + n.nota3)/ 3,2) as promedio from notasConducta n
        inner join fichaAlumno f on f.idAlumno = n.idAlumno
        where n.mes ='".$mes."' and n.anio ='".$anio."' and f.grado ='".$grado."';
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"  nota1 =\"'.$fila["nota1"].'\" nota2 =\"'.$fila["nota2"].'\" nota3 =\"'.$fila["nota3"].'\" class=\"ui icon blue small button\" onclick=\"notasConducta(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }



    public function mostrarNotasColectores($mes = 0, $anio = 0, $grado = 0) {
        $_query = "
        

SELECT f.nombre as nombreAlumno, f.idAlumno as idAlumno,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioLenguaje,

(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasmatematica n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioMate,

(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasciencias n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioCiencias,

(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notassociales n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioSociales,

(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasingles n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioIngles,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasartistica n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioArtistica,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasfisica n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioFisica,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasedufe n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioFe,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasmoral n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioMoral,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notascompu n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioCompu,
(
 select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasconducta n
        where n.idAlumno = F.idAlumno and n.mes = '".$mes."' and n.anio = '".$anio."'
) as promedioConducta

FROM fichaalumno F
WHERE F.anio = '".$anio."' and f.grado= ".$grado."
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui icon blue small button\" onclick=\"notas(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarNotasTrimestralesLenguaje($anio = 0, $grado = 0) {
        $_query = "SELECT f.nombre as nombreAlumno, f.idAlumno as idAlumno,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Febrero' and n.anio = '".$anio."'
        ) as promLenguajeFe,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Marzo' and n.anio = '".$anio."'
        ) as promLenguajeMa,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Abril' and n.anio = '".$anio."'
        ) as promLenguajeAb,
        
        
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Mayo' and n.anio = '".$anio."'
        ) as promLenguajeMayo,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Junio' and n.anio = '".$anio."'
        ) as promLenguajeJun,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Julio' and n.anio = '".$anio."'
        ) as promLenguajeJul,
        
        
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Agosto' and n.anio = '".$anio."'
        ) as promLenguajeAgosto,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Septiembre' and n.anio = '".$anio."'
        ) as promLenguajeSep,
        (
         select format((n.nota1 + n.nota2 + n.nota3)/ 3,2) from notasLenguaje n
                where n.idAlumno = F.idAlumno and n.mes = 'Octubre' and n.anio = '".$anio."'
        ) as promLenguajeOctubre
        
        
        
        
        
        
        FROM fichaalumno F
        WHERE F.anio = '".$anio."' and f.grado=  ".$grado."
        ";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"  nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui icon blue small button\" onclick=\"notas(this)\"><i class=\"edit icon\"></i> Ver</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" nombre =\"'.$fila["nombreAlumno"].'\"   class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }




    public function guardarNotasLenguaje( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasLenguaje set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMatematicas( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasMatematica set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasCiencias( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasCiencias set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasSociales( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasSociales set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasIngles( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasIngles set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasArtistica( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasArtistica set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasEduFe( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasEduFe set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMoral( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasMoral set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInfo( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasCompu set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasFisica( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasFisica set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasConducta( $id = 0,$nota1 = 0,$nota2 = 0,$nota3 = 0,$mes = 0 ,$anio = 0) {
      

        $_query = "
        update notasConducta set nota1 = ".$nota1.", nota2=".$nota2." , nota3 = ".$nota3."
        where idAlumno = ".$id." and mes ='".$mes."' and  anio ='".$anio."'
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

}

