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
        '".$this->objeto->getTel1()."','".$this->objeto->getTel2()."','".$this->objeto->getEmailRes()."',".$idExp.")";

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


   

    public function guardarNotasLenguajeF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasLenguajeMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasLenguajeAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasLenguajeMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasLenguajeJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasLenguajeJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasLenguajeAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasLenguajeS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasLenguajeO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasLenguaje values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    

    public function guardarNotasMatematicaF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMatematicaMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMatematicaAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMatematicaMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMatematicaJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMatematicaJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMatematicaAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMatematicaS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMatematicaO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMatematica values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasSocialesF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasSocialesMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasSocialesAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasSocialesMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasSocialesJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasSocialesJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasSocialesAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasSocialesS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasSocialesO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasSociales values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasCienciasF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasCienciasMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasCienciasAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasCienciasMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasCienciasJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasCienciasJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasCienciasAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasCienciasS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasCienciasO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCiencias values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInglesF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInglesMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInglesAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInglesMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInglesJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInglesJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInglesAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInglesS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInglesO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasIngles values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }



    public function guardarNotasArtisticaF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasArtisticaMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasArtisticaAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasArtisticaMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasArtisticaJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasArtisticaJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasArtisticaAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasArtisticaS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasArtisticaO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasArtistica values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMoralF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMoralMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMoralAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMoralMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasMoralJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMoralJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMoralAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMoralS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasMoralO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasMoral values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasFisicaF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasFisicaMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasFisicaAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasFisicaMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasFisicaJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasFisicaJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasFisicaAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasFisicaS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasFisicaO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasFisica values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInfoF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInfoMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInfoAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInfoMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasInfoJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInfoJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInfoAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInfoS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasInfoO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasCompu values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasEduFeF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasEduFeMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasEduFeAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasEduFeMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasEduFeJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasEduFeJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasEduFeAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasEduFeS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasEduFeO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasEduFe values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasConductaF() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Febrero','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasConductaMar() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Marzo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasConductaAb() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Abril','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasConductaMay() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Mayo','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarNotasConductaJun() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Junio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasConductaJul() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Julio','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasConductaAg() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Agosto','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasConductaS() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Septiembre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarNotasConductaO() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into  notasConducta values(null, 
            ".$idExp.",0,0,0,'Octubre','".$anioAc."')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    


    
    public function mostrarAlumnosPrimer($idGrado=0) {

        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "select * from fichaAlumno  where grado=".$idGrado." and anio 
        = '".$anioAc."'  group by nie order by nombre asc";

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