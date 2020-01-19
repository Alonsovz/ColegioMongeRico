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
        '".$this->objeto->getTelP()."', '".$this->objeto->getNombreMadre()."','".$this->objeto->getLugarTrabajoM()."',
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
        '".$this->objeto->getNumeroIden()."', '".$this->objeto->getFamiliar()."','".$this->objeto->getParentesco()."',
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



    public function editarDatos() {
        $_query = "update  fichaAlumno set nie = '".$this->objeto->getNie()."',
        nombre = '".$this->objeto->getNombre()."',
        grado = ".$this->objeto->getGradoEstudiar().",
        sexo= '".$this->objeto->getSexo()."',
        repiteGrado = '".$this->objeto->getRepGrado()."',
        nuevoIngreso  = '".$this->objeto->getNuevoIngreso()."',
        reingreso = '".$this->objeto->getReingreso()."',
        religion = '".$this->objeto->getReligion()."',
        insAnterior = '".$this->objeto->getInsAnterior()."',
        fechaNac = '".$this->objeto->getFechaNac()."',
        departamentoNac ='".$this->objeto->getDeparNac()."',
        municipioNac = '".$this->objeto->getLugarNac()."',
        nacionalidad = '".$this->objeto->getNacionalidad()."',
        naturalizado = '".$this->objeto->getNaturalizado()."',
        discapacidad = '".$this->objeto->getDiscapacidad()."',
        expDiscapacidad = '".$this->objeto->getExpDiscapacidad()."',
        enfermedad = '".$this->objeto->getEnfermedad()."',
        expEnfermedad = '".$this->objeto->getExpEnfermedad()."',
        alergia= '".$this->objeto->getAlergia()."',
        expAlergia = '".$this->objeto->getExpAlergia()."',
        tipoSangre = '".$this->objeto->getTipoSangre()."',
        direccionRes = '".$this->objeto->getDireccionRes()."',
        medioTransporte = '".$this->objeto->getMedioTransporte()."',
        distancia = '".$this->objeto->getDistancia()."',
        factoresRiesgo = '".$this->objeto->getRiesgos()."',
        ocupacion = '".$this->objeto->getOcupacion()."',
        trabaja = '".$this->objeto->getTrabaja()."',
        dependenciaEco = '".$this->objeto->getDependenciaEco()."',
        correo = '".$this->objeto->getEmail()."',
        telefono = '".$this->objeto->getTelefono()."',
        viveCon = '".$this->objeto->getViveCon()."',
        viveOtro = '".$this->objeto->getViveOtro()."'
        where idAlumno = ".$this->objeto->getId();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }




    public function editarDatosPadre() {

       
        $_query = "update datosPadre set  nombrePadre='".$this->objeto->getNombrePadre()."',
        lugarTrabajoP = '".$this->objeto->getLugarTrabajoP()."',
        telefonoPadre = '".$this->objeto->getTelP()."', 
        nombreMadre = '".$this->objeto->getNombreMadre()."',
        lugarTrabajoM = '".$this->objeto->getLugarTrabajoM()."',
        telefonoMadre = '".$this->objeto->getTelM()."'
        where idAlumno = ".$this->objeto->getId();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }



    public function editarDatosResponsable() {
        

        $_query = "update datosResponsable set nombre ='".$this->objeto->getNombreRes()."',
        tipoIden = '".$this->objeto->getTipoIden()."',
        numeroIden = '".$this->objeto->getNumeroIden()."',
        familiar = '".$this->objeto->getFamiliar()."',
        parentesco = '".$this->objeto->getParentesco()."',
        sexo = '".$this->objeto->getSexoRes()."',
        estadoFamiliar = '".$this->objeto->getEstadoFam()."',
        fechaNac = '".$this->objeto->getFechaNacRes()."',
        departamentoNac = '".$this->objeto->getDeparNacRes()."',
        municipioNac = '".$this->objeto->getMunicipioNacRes()."',
        nacionalidad = '".$this->objeto->getNacionalidadRes()."',
        profesion = '".$this->objeto->getProfesion()."',
        escolaridad = '".$this->objeto->getEscolaridad()."',
        lugarTrabajo = '".$this->objeto->getLugarTrabajoRes()."',
        telTrabajo = '".$this->objeto->getTelefonoRes()."',
        discapcidad = '".$this->objeto->getDiscapacidadRes()."',
        expDiscapacidad = '".$this->objeto->getExpDiscapacidadRes()."',
        tipoSangre = '".$this->objeto->getTipoSangreRes()."',
        direccionRes = '".$this->objeto->getDireccionRespon()."',
        telRes1 = '".$this->objeto->getTel1()."',
        telRes2 = '".$this->objeto->getTel2()."',
        correo = '".$this->objeto->getEmailRes()."'
        where idAlumno = ".$this->objeto->getId();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }



    public function editarOtrosDatos() {
   

        $_query = "update  otrosDatos set emergencia1 = '".$this->objeto->getContacto1()."',
        telEmergencia1 = '".$this->objeto->getContacto1Tel()."',
        emergencia2 = '".$this->objeto->getContacto2()."',
        telEmergencia2 =  '".$this->objeto->getContacto2Tel()."',
        retiro1 = '".$this->objeto->getAuto1()."',
        parentesco1 = '".$this->objeto->getAuto1Tel()."',
        retiro2 = '".$this->objeto->getAuto2()."',
         parentesco2 = '".$this->objeto->getAuto2Tel()."',
         viajaraSolo = '".$this->objeto->getViaje()."',
         microbusDe = '".$this->objeto->getMicroProp()."',
         telMicro = '".$this->objeto->getMicroPropTel()."'
         where idAlumno = ".$this->objeto->getId();

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
            ".$idExp.",0,0,0,0,0,'Febrero','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Marzo','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Abril','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Mayo','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Junio','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Julio','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Agosto','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Septiembre','".$anioAc."')";

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
            ".$idExp.",0,0,0,0,0,'Octubre','".$anioAc."')";

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

        $_query = "select f.*, dp.*, dr.nombre as nomResponsable,
        dr.tipoIden, dr.numeroIden, dr.familiar, dr.parentesco, dr.sexo as sexoRes,
        dr.estadoFamiliar,dr.fechaNac as fechaNacRes, dr.departamentoNac as depRes, 
        dr.municipioNac as munNac, dr.nacionalidad as nacRes, dr.profesion as proRes,
        dr.escolaridad as escRes, dr.lugarTrabajo as traRes,dr.telTrabajo, dr.discapcidad as discRes,
        dr.expDiscapacidad as expDiscRes, dr.tipoSangre as sangRes, dr.direccionRes as direRec,
        dr.telRes1, dr.telRes2, dr.correo as correoRes, od.* from fichaAlumno f
        inner join datosPadre dp on dp.idAlumno = f.idAlumno
        inner join datosResponsable dr on dr.idAlumno = f.idAlumno
        inner join otrosDatos od on od.idAlumno = f.idAlumno
        where f.grado=".$idGrado." and f.anio 
        = '".$anioAc."' and f.idEliminado = 1 group by f.nie order by f.nombre asc";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {
            $btnEditar='';
            $object = json_encode($fila);

$btnEditar .= '<button id=\"'.$fila["idAlumno"].'\" nie = \"'.$fila["nie"].'\" nombre = \"'.$fila["nombre"].'\" ';
$btnEditar .= '<button grado=\"'.$fila["grado"].'\" sexo = \"'.$fila["sexo"].'\" repiteGrado = \"'.$fila["repiteGrado"].'\" ';
$btnEditar .= '<button nuevoIngreso=\"'.$fila["nuevoIngreso"].'\" reingreso = \"'.$fila["reingreso"].'\" religion = \"'.$fila["religion"].'\" ';
$btnEditar .= '<button escuelaAnterior=\"'.$fila["insAnterior"].'\" fechaNac = \"'.$fila["fechaNac"].'\" departamento = \"'.$fila["departamentoNac"].'\" ';
$btnEditar .= '<button municipio=\"'.$fila["municipioNac"].'\" nacionalidad = \"'.$fila["nacionalidad"].'\" naturalizado = \"'.$fila["naturalizado"].'\" ';
$btnEditar .= '<button discapacidad=\"'.$fila["discapacidad"].'\" expDiscapacidad = \"'.$fila["expDiscapacidad"].'\" enfermedad = \"'.$fila["enfermedad"].'\" ';
$btnEditar .= '<button expEnfermedad=\"'.$fila["expEnfermedad"].'\" alergia = \"'.$fila["alergia"].'\" expAlergia = \"'.$fila["expAlergia"].'\" ';
$btnEditar .= '<button tipoSangre=\"'.$fila["tipoSangre"].'\" direccionRes = \"'.$fila["direccionRes"].'\" medioTransporte = \"'.$fila["medioTransporte"].'\" ';
$btnEditar .= '<button distancia=\"'.$fila["distancia"].'\" factoresRiesgos = \"'.$fila["factoresRiesgo"].'\" ocupacion = \"'.$fila["ocupacion"].'\" ';
$btnEditar .= '<button trabaja=\"'.$fila["trabaja"].'\" dependenciaEco = \"'.$fila["dependenciaEco"].'\" correo = \"'.$fila["correo"].'\" telefono = \"'.$fila["telefono"].'\" ';
$btnEditar .= '<button nomPadre=\"'.$fila["nombrePadre"].'\" lugarTrabajoP = \"'.$fila["lugarTrabajoP"].'\" telefonoPadre = \"'.$fila["telefonoPadre"].'\" ';
$btnEditar .= '<button nomMadre=\"'.$fila["nombreMadre"].'\" lugarTrabajoM = \"'.$fila["lugarTrabajoM"].'\" telefonoMadre = \"'.$fila["telefonoMadre"].'\" ';
$btnEditar .= '<button viveCon=\"'.$fila["viveCon"].'\" viveOtro = \"'.$fila["viveOtro"].'\"';

$btnEditar .= '<button nomResponsable=\"'.$fila["nomResponsable"].'\" tipoIden = \"'.$fila["tipoIden"].'\"';
$btnEditar .= '<button numeroIden=\"'.$fila["numeroIden"].'\" familiar = \"'.$fila["familiar"].'\"';
$btnEditar .= '<button parentesco=\"'.$fila["parentesco"].'\" sexoRes = \"'.$fila["sexoRes"].'\"';
$btnEditar .= '<button estadoFamiliar=\"'.$fila["estadoFamiliar"].'\" fechaNacRes = \"'.$fila["fechaNacRes"].'\"';
$btnEditar .= '<button depRes=\"'.$fila["depRes"].'\" munRes = \"'.$fila["munNac"].'\" nacRes = \"'.$fila["nacRes"].'\"';
$btnEditar .= '<button proRes=\"'.$fila["proRes"].'\" escRes = \"'.$fila["escRes"].'\" traRes = \"'.$fila["traRes"].'\"';
$btnEditar .= '<button discRes=\"'.$fila["discRes"].'\" expDiscRes = \"'.$fila["expDiscRes"].'\" sangRes = \"'.$fila["sangRes"].'\"';
$btnEditar .= '<button direRec=\"'.$fila["direRec"].'\" telRes1 = \"'.$fila["telRes1"].'\" telRes2 = \"'.$fila["telRes2"].'\"';
$btnEditar .= '<button correoRes=\"'.$fila["correoRes"].'\"  telTrabajo=\"'.$fila["telTrabajo"].'\"';


$btnEditar .= '<button emergencia1=\"'.$fila["emergencia1"].'\"  telEmergencia1=\"'.$fila["telEmergencia1"].'\"';
$btnEditar .= '<button emergencia2=\"'.$fila["emergencia2"].'\"  telEmergencia2=\"'.$fila["telEmergencia2"].'\"';
$btnEditar .= '<button retiro1=\"'.$fila["retiro1"].'\"  parentesco1=\"'.$fila["parentesco1"].'\"';
$btnEditar .= '<button retiro2=\"'.$fila["retiro2"].'\"  parentesco2=\"'.$fila["parentesco2"].'\"';
$btnEditar .= '<button viajaraSolo=\"'.$fila["viajaraSolo"].'\"  microbusDe=\"'.$fila["microbusDe"].'\" telMicro=\"'.$fila["telMicro"].'\"';

$btnEditar .= 'class=\"ui icon blue small button\" onclick=\"verNomina(this)\"><i class=\"edit icon\"></i> Ver Detalles</button>';
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