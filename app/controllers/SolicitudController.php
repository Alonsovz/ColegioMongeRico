<?php

class SolicitudController extends ControladorBase {

    public static function llenar() {
       
        self::loadMain();
      
        require_once './app/view/Solicitud/llenar.php';
    }

}


?>