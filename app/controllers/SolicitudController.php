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

}


?>