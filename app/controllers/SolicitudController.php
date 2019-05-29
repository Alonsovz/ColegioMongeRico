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

        $words=str_word_count($_REQUEST["nombre"], 1);

        $dao->objeto->setNomUsuario($words[0]);
        $dao->objeto->setPass(123);

        echo $dao->registrarDatos();
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


}


?>