<?php 

class DaoSolictudAlumno extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new soliAlumno();
    }


    public function registrarDatos() {
        $_query = "insert into fichaAlumno values(null,'".$this->objeto->getNie()."', '".$this->objeto->getNombre()."',
        ".$this->objeto->getGradoEstudiar().", '".$this->objeto->getSexo()."','".$this->objeto->getRepGrado()."',
        '".$this->objeto->getNuevoIngreso()."','".$this->objeto->getReingreso()."',
         '".$this->objeto->getReligion()."','".$this->objeto->getInsAnterior()."',
         '".$this->objeto->getFechaNac()."','".$this->objeto->getDeparNac()."','".$this->objeto->getLugarNac()."',
        '".$this->objeto->getNacionalidad()."','".$this->objeto->getNaturalizado()."','".$this->objeto->getDiscapacidad()."',
        '".$this->objeto->getExpDiscapacidad()."','".$this->objeto->getEnfermedad()."',
        '".$this->objeto->getExpEnfermedad()."','".$this->objeto->getAlergia()."',
        '".$this->objeto->getExpAlergia()."','".$this->objeto->getTipoSangre()."','".$this->objeto->getDireccionRes()."',
        '".$this->objeto->getMedioTransporte()."','".$this->objeto->getDistancia()."','".$this->objeto->getRiesgos()."',
        '".$this->objeto->getOcupacion()."','".$this->objeto->getTrabaja()."','".$this->objeto->getDependenciaEco()."',
        '".$this->objeto->getEmail()."','".$this->objeto->getTelefono()."',
        '".$this->objeto->getViveCon()."','".$this->objeto->getViveOtro()."',year(CURRENT_DATE()),
        curdate(),1)";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrarDatosPadre() {

        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $_query = "insert into datosPadre values('".$this->objeto->getNombrePadre()."', '".$this->objeto->getLugarTrabajoP()."',
        ".$this->objeto->getTelP().", '".$this->objeto->getNombreMadre()."','".$this->objeto->getLugarTrabajoM()."',
        '".$this->objeto->getTelM()."',".$idExp.")";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrarDatosResponsable() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $_query = "insert into datosResponsable values('".$this->objeto->getNombreRes()."', '".$this->objeto->getTipoIden()."',
        ".$this->objeto->getNumeroIden().", '".$this->objeto->getFamiliar()."','".$this->objeto->getParentesco()."',
        '".$this->objeto->getSexoRes()."','".$this->objeto->getEstadoFam()."',
         '".$this->objeto->getFechaNacRes()."','".$this->objeto->getDeparNacRes()."',
         '".$this->objeto->getMunicipioNacRes()."','".$this->objeto->getNacionalidadRes()."','".$this->objeto->getProfesion()."',
        '".$this->objeto->getEscolaridad()."','".$this->objeto->getLugarTrabajoRes()."','".$this->objeto->getTelefonoRes()."',
        '".$this->objeto->getDiscapacidadRes()."','".$this->objeto->getExpDiscapacidadRes()."',
        '".$this->objeto->getTipoSangreRes()."','".$this->objeto->getDireccionRespon()."',
        '".$this->objeto->getTel1()."','".$this->objeto->getTel2()."','".$this->objeto->getEmailRes()."',
        '".$this->objeto->getRiesgoRes()."',".$idExp.")";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrarOtrosDatos() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $_query = "insert into  otrosDatos values('".$this->objeto->getContacto1()."', '".$this->objeto->getContacto1Tel()."',
        '".$this->objeto->getContacto2()."', '".$this->objeto->getContacto2Tel()."','".$this->objeto->getAuto1()."',
        '".$this->objeto->getAuto1Tel()."','".$this->objeto->getAuto2()."',
         '".$this->objeto->getAuto2Tel()."','".$this->objeto->getViaje()."',
         '".$this->objeto->getMicroProp()."','".$this->objeto->getMicroPropTel()."',".$idExp.")";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarHermanos() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $_query = "insert into  hermanosAlum values('".$this->objeto->getNombreHer()."', '".$this->objeto->getGradoHer()."',".$idExp.")";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    
    public function mostrarAlumnosPrimer() {
        $_query = "select * from fichaAlumno  where grado=1 and anio = year(CURRENT_DATE())  group by nie order by nombre asc";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idAlumno"].'\"   class=\"ui btnEditar icon blue small button\"><i class=\"edit icon\"></i> Ver Detalles</button>';
            $btnEliminar = '<button id=\"'.$fila["idAlumno"].'\" class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.' '.$btnEliminar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }



}

?>