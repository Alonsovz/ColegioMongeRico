<?php

class SolicitudController extends ControladorBase {

    public static function fichaAlumno() {
       
        self::loadMain();
      
        require_once './app/view/Solicitud/fichaAlumno.php';
    }

    public static function fichaMaestro() {
       
        self::loadMain();
      
        require_once './app/view/Solicitud/fichaMaestro.php';
    }


    public function guardarSolicitudMaestro(){

        $dao = new DaoSolicitudMaestro();

        $dao->objeto->setNombre($_REQUEST["nombre"]);
        $dao->objeto->setApellido($_REQUEST["apellido"]);
        $dao->objeto->setFechaNac($_REQUEST["fechaNac"]);
        $dao->objeto->setLugarNacimiento($_REQUEST["lugarNac"]);
        $dao->objeto->setSexo($_REQUEST["sexo"]);
        $dao->objeto->setDireccionRes($_REQUEST["direccion"]);
        $dao->objeto->setTelRes($_REQUEST["telefonoRes"]);
        $dao->objeto->setTelMovil($_REQUEST["telefonoMovil"]);
        $dao->objeto->setEmail($_REQUEST["correo"]);
        $dao->objeto->setDui($_REQUEST["dui"]);
        $dao->objeto->setNit($_REQUEST["nit"]);
        $dao->objeto->setNip($_REQUEST["nip"]);
        $dao->objeto->setAfp($_REQUEST["afp"]);

        if($_REQUEST["sectorPublico"]=='si'){
        $dao->objeto->setNumeroPartida($_REQUEST["numeroPartida"]);
        $dao->objeto->setSubNumero($_REQUEST["subNumero"]);
        }
        else{
            $dao->objeto->setNumeroPartida("No definido");
            $dao->objeto->setSubNumero("No definido");
        }
        $dao->objeto->setNivelAcademico($_REQUEST["nivelAcademico"]);
        $dao->objeto->setNivel($_REQUEST["nivel"]);
        $dao->objeto->setEspecialidad($_REQUEST["especialidad"]);
        $dao->objeto->setFechaIngreso($_REQUEST["fechaIngre"]);
        $dao->objeto->setHabilidades($_REQUEST["habilidades"]);
        $dao->objeto->setTipoPago($_REQUEST["tipoPago"]);
        $dao->objeto->setSueldo($_REQUEST["sueldo"]);

        $daoU = new DaoUsuario();

        $daoU->objeto->setNombre($_REQUEST["nombre"]);
        $daoU->objeto->setApellido($_REQUEST["apellido"]);
        $daoU->objeto->setNomUsuario($_REQUEST["usuarioSesion"]);
        $daoU->objeto->setPass(123);
        $daoU->objeto->setEmail($_REQUEST["correo"]);
        $daoU->objeto->setDireccion($_REQUEST["direccion"]);
        $daoU->objeto->setDui($_REQUEST["dui"]);
        $daoU->objeto->setTelefono($_REQUEST["telefonoMovil"]);
        $daoU->objeto->setFechaNacimiento($_REQUEST["fechaNac"]);
        $daoU->objeto->setCodigoRol(2);


        echo $daoU->registrar();

        echo $dao->registrarDatos();
      echo $dao->registrarDatosPlanilla();

        
    }



    public function editarDatosMaestros(){

        $dao = new DaoSolicitudMaestro();

        $dao->objeto->setNombre($_REQUEST["nombre"]);
        $dao->objeto->setApellido($_REQUEST["apellido"]);
        $dao->objeto->setFechaNac($_REQUEST["fechaNac"]);
        $dao->objeto->setLugarNacimiento($_REQUEST["lugarNac"]);
        $dao->objeto->setSexo($_REQUEST["sexo"]);
        $dao->objeto->setDireccionRes($_REQUEST["direccion"]);
        $dao->objeto->setTelRes($_REQUEST["telefonoRes"]);
        $dao->objeto->setTelMovil($_REQUEST["telefonoMovil"]);
        $dao->objeto->setEmail($_REQUEST["correo"]);
        $dao->objeto->setDui($_REQUEST["dui"]);
        $dao->objeto->setNit($_REQUEST["nit"]);
        $dao->objeto->setNip($_REQUEST["nip"]);
        $dao->objeto->setAfp($_REQUEST["afp"]);

        
        $dao->objeto->setNumeroPartida($_REQUEST["numeroPartida"]);
        $dao->objeto->setSubNumero($_REQUEST["subNumero"]);
        
        $dao->objeto->setNivelAcademico($_REQUEST["nivelAcademico"]);
        $dao->objeto->setNivel($_REQUEST["nivel"]);
        $dao->objeto->setEspecialidad($_REQUEST["especialidad"]);
        $dao->objeto->setFechaIngreso($_REQUEST["fechaIngre"]);
        $dao->objeto->setHabilidades($_REQUEST["habilidades"]);
        $dao->objeto->setTipoPago($_REQUEST["tipoPago"]);
        $dao->objeto->setSueldo($_REQUEST["sueldo"]);
        $dao->objeto->setId($_REQUEST["idMaestro"]);

        echo $dao->editarDatos();
    

        
    }


    public function bajaMaestro (){
        $dao = new DaoSolicitudMaestro();
        $daoU = new DaoUsuario();

        $dao->objeto->setId($_REQUEST["idBaja"]);
        $dao->objeto->setHabilidades($_REQUEST["baja"]);
        $dao->objeto->setNombre($_REQUEST["nombreBaja"]);
        $dao->objeto->setApellido($_REQUEST["apellidoBaja"]);


        echo $dao->eliminarDocente();
        echo $dao->eliminarUser();
    }



    public function guardarTitulos(){
        $detalles = json_decode($_REQUEST["lista"]);

        $contador = 0;

        $dao = new DaoSolicitudMaestro();

        foreach($detalles as $detalle) {
            $dao->objeto->setTitulo($detalle->titulos);
    

            if($dao->registrarTitulos()) {
                $contador++;
            } else {
                echo 'nell';
            }
        }

        if($contador == count($detalles)) {
            echo 1;
        } else {
            echo 2;
        }
    }

    public function pruebaPlanilla(){
        $dao = new DaoSolicitudMaestro();
        echo $dao->registrarDatosPlanilla();
    }


    public function guardarCapacitaciones(){
        $detalles = json_decode($_REQUEST["listaCapa"]);

        $contador = 0;

        $dao = new DaoSolicitudMaestro();

        foreach($detalles as $detalle) {
            $dao->objeto->setCapacitacion($detalle->nombre);
    

            if($dao->registrarCapacitacion()) {
                $contador++;
            } else {
                echo 'nell';
            }
        }

        if($contador == count($detalles)) {
            echo 1;
        } else {
            echo 2;
        }
    }


    public function guardarExperiencia(){
        $detalles = json_decode($_REQUEST["listaExp"]);

        $contador = 0;

        $dao = new DaoSolicitudMaestro();

        foreach($detalles as $detalle) {
            $dao->objeto->setInstitucion($detalle->nombre);
            $dao->objeto->setCargo($detalle->cargo);
            $dao->objeto->setGrado($detalle->grado);
            $dao->objeto->setAsignaturas($detalle->asignaturas);
            $dao->objeto->setDesde($detalle->desde);
            $dao->objeto->setHasta($detalle->hasta);
    

            if($dao->registrarExperiencia()) {
                $contador++;
            } else {
                echo 'nell';
            }
        }

        if($contador == count($detalles)) {
            echo 1;
        } else {
            echo 2;
        }
    }


    public function guardarSolicitudAlumno(){

        $dao = new DaoSolictudAlumno();
        $daoP = new DaoPagos();

        $dao->objeto->setNie($_REQUEST["nie"]);
        $dao->objeto->setNombre($_REQUEST["nombre"]);
        $dao->objeto->setGradoEstudiar($_REQUEST["grado"]);
        $dao->objeto->setSexo($_REQUEST["sexo"]);
        $dao->objeto->setRepGrado($_REQUEST["repite"]);
        $dao->objeto->setNuevoIngreso($_REQUEST["nuevoIngreso"]);
        $dao->objeto->setReingreso($_REQUEST["reingreso"]);
        $dao->objeto->setInsAnterior($_REQUEST["escuelaAnterior"]);
        $dao->objeto->setReligion($_REQUEST["religion"]);
        $dao->objeto->setFechaNac($_REQUEST["fechaNac"]);
        $dao->objeto->setDeparNac($_REQUEST["departamentoNac"]);
        $dao->objeto->setLugarNac($_REQUEST["municipio"]);
        $dao->objeto->setNacionalidad($_REQUEST["nacionalidad"]);
        $dao->objeto->setNaturalizado($_REQUEST["naturalizado"]);
        $dao->objeto->setDiscapacidad($_REQUEST["discapacidad"]);

        if($_REQUEST["discapacidad"]=='no'){
            $dao->objeto->setExpDiscapacidad("Ninguna");
        }else{
            $dao->objeto->setExpDiscapacidad($_REQUEST["expDiscapacidad"]);
        }

        
        $dao->objeto->setEnfermedad($_REQUEST["enfermedad"]);

        if($_REQUEST["enfermedad"]=='no'){
            $dao->objeto->setExpEnfermedad("Ninguna");
        }else{
            $dao->objeto->setExpEnfermedad($_REQUEST["expEnfermedad"]);
        }

        
        $dao->objeto->setAlergia($_REQUEST["alergia"]);

        if($_REQUEST["alergia"]=='no'){
            $dao->objeto->setExpAlergia("Ninguna");
        }else{
            $dao->objeto->setExpAlergia($_REQUEST["expAlergia"]);
        }


       
        $dao->objeto->setTipoSangre($_REQUEST["tipoSangre"]);
        $dao->objeto->setDireccionRes($_REQUEST["direccion"]);
        $dao->objeto->setMedioTransporte($_REQUEST["transporte"]);
        $dao->objeto->setDistancia($_REQUEST["distanciaKM"]);
        $dao->objeto->setRiesgos($_REQUEST["riesgos"]);
        $dao->objeto->setOcupacion($_REQUEST["ocupacion"]);
        $dao->objeto->setTrabaja($_REQUEST["trabajo"]);
        $dao->objeto->setDependenciaEco($_REQUEST["dependenciaEco"]);
        $dao->objeto->setEmail($_REQUEST["correo"]);
        $dao->objeto->setTelefono($_REQUEST["telefono"]);

        $dao->objeto->setViveCon($_REQUEST["viveCon"]);

       

        if($_REQUEST["viveCon"]=='Otro'){
            $dao->objeto->setViveOtro($_REQUEST["viveOtro"]);
        }else{
            $dao->objeto->setViveOtro("");
        }

        
        $dao->objeto->setNombrePadre($_REQUEST["nombrePadre"]);
        $dao->objeto->setLugarTrabajoP($_REQUEST["lugarTPad"]);
        $dao->objeto->setTelP($_REQUEST["telPadre"]);
        $dao->objeto->setNombreMadre($_REQUEST["nombreMadre"]);
        $dao->objeto->setLugarTrabajoM($_REQUEST["lugarTMad"]);
        $dao->objeto->setTelM($_REQUEST["telMadre"]);

        $dao->objeto->setNombreRes($_REQUEST["nombreRes"]);
        $dao->objeto->setTipoIden($_REQUEST["tipoIdRes"]);
        $dao->objeto->setNumeroIden($_REQUEST["numeroID"]);
        $dao->objeto->setFamiliar($_REQUEST["familiar"]);

        if($_REQUEST["familiar"]=="no"){
            $dao->objeto->setParentesco("Ninguno");
        }else{
            $dao->objeto->setParentesco($_REQUEST["parentesco"]);
        }

        
        $dao->objeto->setSexoRes($_REQUEST["sexoRes"]);
        $dao->objeto->setEstadoFam($_REQUEST["estadoFam"]);
        $dao->objeto->setFechaNacRes($_REQUEST["fechaNacRes"]);
        $dao->objeto->setDeparNacRes($_REQUEST["departamentoNacRes"]);
        $dao->objeto->setMunicipioNacRes($_REQUEST["municipioRes"]);
        $dao->objeto->setNacionalidadRes($_REQUEST["nacionalidadRes"]);
        $dao->objeto->setProfesion($_REQUEST["profesionRes"]);
        $dao->objeto->setEscolaridad($_REQUEST["escolaridad"]);
        $dao->objeto->setLugarTrabajoRes($_REQUEST["lugarTRes"]);
        $dao->objeto->setTelefonoRes($_REQUEST["telRes"]);
        $dao->objeto->setDiscapacidadRes($_REQUEST["discapacidadRes"]);

        if($_REQUEST["discapacidadRes"]=='no'){
            $dao->objeto->setExpDiscapacidadRes("Ninguna");
        }else{
            $dao->objeto->setExpDiscapacidadRes($_REQUEST["expDiscapacidadRes"]);
        }

        
        $dao->objeto->setTipoSangreRes($_REQUEST["tipoSangreRes"]);
        $dao->objeto->setDireccionRespon($_REQUEST["direccionRes"]);
        $dao->objeto->setTel1($_REQUEST["telDiRes1"]);
        $dao->objeto->setTel2($_REQUEST["telDiRes2"]);
        $dao->objeto->setEmailRes($_REQUEST["correoRes"]);

        $dao->objeto->setContacto1($_REQUEST["emergencia1"]);
        $dao->objeto->setContacto1Tel($_REQUEST["telEmer1"]);
        $dao->objeto->setContacto2($_REQUEST["emergencia2"]);
        $dao->objeto->setContacto2Tel($_REQUEST["telEmer2"]);
        $dao->objeto->setAuto1($_REQUEST["auto1"]);
        $dao->objeto->setAuto1Tel($_REQUEST["autoParen1"]);
        $dao->objeto->setAuto2($_REQUEST["auto2"]);
        $dao->objeto->setAuto2Tel($_REQUEST["autoParen2"]);
        $dao->objeto->setViaje($_REQUEST["viaje"]);

        if($_REQUEST["viaje"]=='no'){
            $dao->objeto->setMicroProp($_REQUEST["propMicro"]);
            $dao->objeto->setMicroPropTel($_REQUEST["propMicroTel"]);
        }else{
            $dao->objeto->setMicroProp("");
        $dao->objeto->setMicroPropTel("");
        }

        

        echo $dao->registrarDatos();

       echo $dao->registrarDatosPadre();
       echo $dao->registrarDatosResponsable();
        echo $dao->registrarOtrosDatos();
        echo $daoP->registrarPagos();
        
        echo $dao->guardarNotasLenguajeF();
        echo $dao->guardarNotasLenguajeMar();
        echo $dao->guardarNotasLenguajeAb();
        echo $dao->guardarNotasLenguajeMay();
        echo $dao->guardarNotasLenguajeJun();
        echo $dao->guardarNotasLenguajeJul();
        echo $dao->guardarNotasLenguajeAg();
        echo $dao->guardarNotasLenguajeS();
        echo $dao->guardarNotasLenguajeO();

        echo $dao->guardarNotasMatematicaF();
        echo $dao->guardarNotasMatematicaMar();
        echo $dao->guardarNotasMatematicaAb();
        echo $dao->guardarNotasMatematicaMay();
        echo $dao->guardarNotasMatematicaJun();
        echo $dao->guardarNotasMatematicaJul();
        echo $dao->guardarNotasMatematicaAg();
        echo $dao->guardarNotasMatematicaS();
        echo $dao->guardarNotasMatematicaO();

        echo $dao->guardarNotasSocialesF();
        echo $dao->guardarNotasSocialesMar();
        echo $dao->guardarNotasSocialesAb();
        echo $dao->guardarNotasSocialesMay();
        echo $dao->guardarNotasSocialesJun();
        echo $dao->guardarNotasSocialesJul();
        echo $dao->guardarNotasSocialesAg();
        echo $dao->guardarNotasSocialesS();
        echo $dao->guardarNotasSocialesO();

        echo $dao->guardarNotasCienciasF();
        echo $dao->guardarNotasCienciasMar();
        echo $dao->guardarNotasCienciasAb();
        echo $dao->guardarNotasCienciasMay();
        echo $dao->guardarNotasCienciasJun();
        echo $dao->guardarNotasCienciasJul();
        echo $dao->guardarNotasCienciasAg();
        echo $dao->guardarNotasCienciasS();
        echo $dao->guardarNotasCienciasO();

        echo $dao->guardarNotasInglesF();
        echo $dao->guardarNotasInglesMar();
        echo $dao->guardarNotasInglesAb();
        echo $dao->guardarNotasInglesMay();
        echo $dao->guardarNotasInglesJun();
        echo $dao->guardarNotasInglesJul();
        echo $dao->guardarNotasInglesAg();
        echo $dao->guardarNotasInglesS();
        echo $dao->guardarNotasInglesO();

        echo $dao->guardarNotasArtisticaF();
        echo $dao->guardarNotasArtisticaMar();
        echo $dao->guardarNotasArtisticaAb();
        echo $dao->guardarNotasArtisticaMay();
        echo $dao->guardarNotasArtisticaJun();
        echo $dao->guardarNotasArtisticaJul();
        echo $dao->guardarNotasArtisticaAg();
        echo $dao->guardarNotasArtisticaS();
        echo $dao->guardarNotasArtisticaO();

        echo $dao->guardarNotasMoralF();
        echo $dao->guardarNotasMoralMar();
        echo $dao->guardarNotasMoralAb();
        echo $dao->guardarNotasMoralMay();
        echo $dao->guardarNotasMoralJun();
        echo $dao->guardarNotasMoralJul();
        echo $dao->guardarNotasMoralAg();
        echo $dao->guardarNotasMoralS();
        echo $dao->guardarNotasMoralO();

        echo $dao->guardarNotasFisicaF();
        echo $dao->guardarNotasFisicaMar();
        echo $dao->guardarNotasFisicaAb();
        echo $dao->guardarNotasFisicaMay();
        echo $dao->guardarNotasFisicaJun();
        echo $dao->guardarNotasFisicaJul();
        echo $dao->guardarNotasFisicaAg();
        echo $dao->guardarNotasFisicaS();
        echo $dao->guardarNotasFisicaO();


        
     echo $dao->guardarNotasInfoF();
     echo $dao->guardarNotasInfoMar();
     echo $dao->guardarNotasInfoAb();
     echo $dao->guardarNotasInfoMay();
     echo $dao->guardarNotasInfoJun();
     echo $dao->guardarNotasInfoJul();
     echo $dao->guardarNotasInfoAg();
     echo $dao->guardarNotasInfoS();
     echo $dao->guardarNotasInfoO();

     
     echo $dao->guardarNotasEduFeF();
        echo $dao->guardarNotasEduFeMar();
        echo $dao->guardarNotasEduFeAb();
        echo $dao->guardarNotasEduFeMay();
        echo $dao->guardarNotasEduFeJun();
        echo $dao->guardarNotasEduFeJul();
        echo $dao->guardarNotasEduFeAg();
        echo $dao->guardarNotasEduFeS();
        echo $dao->guardarNotasEduFeO();

        
     echo $dao->guardarNotasConductaF();
     echo $dao->guardarNotasConductaMar();
     echo $dao->guardarNotasConductaAb();
     echo $dao->guardarNotasConductaMay();
     echo $dao->guardarNotasConductaJun();
     echo $dao->guardarNotasConductaJul();
     echo $dao->guardarNotasConductaAg();
     echo $dao->guardarNotasConductaS();
     echo $dao->guardarNotasConductaO();

    }

    public function guardarHermanos(){
        $detalles = json_decode($_REQUEST["lista"]);

        $contador = 0;

        $dao = new DaoSolictudAlumno();

        foreach($detalles as $detalle) {
            $dao->objeto->setNombreHer($detalle->nombreHer);
            $dao->objeto->setGradoHer($detalle->gradoHer);
    

            if($dao->guardarHermanos()) {
                $contador++;
            } else {
                echo 'nell';
            }
        }

        if($contador == count($detalles)) {
            echo 1;
        } else {
            echo 2;
        }
    }



}


?>