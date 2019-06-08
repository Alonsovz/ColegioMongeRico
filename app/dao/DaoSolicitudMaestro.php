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
        '".$this->objeto->getHabilidades()."','".$this->objeto->getTipoPago()."',1)";

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


}


?>