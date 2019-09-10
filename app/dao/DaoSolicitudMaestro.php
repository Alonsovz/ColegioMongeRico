<?php 

class DaoSolicitudMaestro extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new soliMaestro();
    }

    public function registrarDatos() {
        $_query = "insert into maestros values(null,'".$this->objeto->getNombre()."','".$this->objeto->getApellido()."',
         '".$this->objeto->getFechaNac()."',
        '".$this->objeto->getLugarNacimiento()."', '".$this->objeto->getSexo()."','".$this->objeto->getDireccionRes()."',
        '".$this->objeto->getTelRes()."','".$this->objeto->getTelMovil()."',
         '".$this->objeto->getEmail()."','".$this->objeto->getDui()."',
         '".$this->objeto->getNit()."','".$this->objeto->getNip()."','".$this->objeto->getAfp()."',
        '".$this->objeto->getNumeroPartida()."','".$this->objeto->getSubNumero()."',
        '".$this->objeto->getNivelAcademico()."','".$this->objeto->getNivel()."',
        '".$this->objeto->getEspecialidad()."','".$this->objeto->getFechaIngreso()."',
        '".$this->objeto->getHabilidades()."','".$this->objeto->getTipoPago()."','".$this->objeto->getSueldo()."',1)";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrarDatosPlanilla() {
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];
        
        $_query = "insert into planilla values(null,".$idExp.",0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,
        DATE_FORMAT(CURDATE(),'%m'),year(CURRENT_DATE()));
        ";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    
    public function registrarTitulos(){
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $query = "Insert into titulosObtenidos values (null,'".$this->objeto->getTitulo()."',".$idExp.");";

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }

    public function registrarCapacitacion(){
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $query = "Insert into capacitaciones values (null,'".$this->objeto->getCapacitacion()."',".$idExp.");";

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }

    public function registrarExperiencia(){
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $query = "Insert into experienciaLaboral values (null,'".$this->objeto->getInstitucion()."',
        '".$this->objeto->getCargo()."','".$this->objeto->getGrado()."','".$this->objeto->getAsignaturas()."',
        '".$this->objeto->getDesde()."','".$this->objeto->getHasta()."',".$idExp.");";

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }


    public function mostrarMaestros() {
        $_query = "select * from maestros where idEliminado=1;";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idMaestro"].'\"  class=\"ui btnEditar icon blue small button\"><i class=\"edit icon\"></i> Ver Detalles</button>';
            $btnEliminar = '<button id=\"'.$fila["idMaestro"].'\"  class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.' '.$btnEliminar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarPlanilla() {
        $_query = "select p.*, concat(m.nombre,' ',m.apellido) as nombre, m.tipoPago as pago,
        format(m.sueldo,2) as sueldoFijo,
      concat('$', ' ',  format((m.sueldo),2) ) as sueldoM,
        format((p.sueldoD),2) as sueldoD,
        format((p.vacacion),2) as vacacion,
        format((p.aguinaldo),2) as aguinaldo,
        format((p.afpEmV),2) as afpEmV,
        format((p.afpEmC),2) as afpEmC,
        format((p.isssE),2) as isssE,
        format((p.renta),2) as renta,
        format((p.otros),2) as otros,
        format((p.totalDesM),2) as totalDesM,
        format((p.totalP),2) as totalP
         from planilla p 
        inner join maestros m on m.idMaestro = p.idMaestro 
        where m.idEliminado=1 and p.mes=DATE_FORMAT(CURDATE(),'%m') and anio=year(CURRENT_DATE())  order by nombre asc";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {
            $btnEditar = "";
            $object = json_encode($fila);

            $btnEditar .= '<button id=\"'.$fila["idMaestro"].'\"  nombre=\"'.$fila["nombre"].'\" ';
            $btnEditar .= ' sueldo =\"'.$fila["sueldoFijo"].'\" tipoPago =\"'.$fila["pago"].'\" class=\"ui btnEditar icon blue small button\"><i class=\"edit icon\"></i> Ver Detalles</button>';
            $btnEliminar = '<button id=\"'.$fila["idMaestro"].'\"  class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.' '.$btnEliminar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


}


?>