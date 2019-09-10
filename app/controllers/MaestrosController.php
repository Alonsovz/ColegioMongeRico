<?php

class MaestrosController extends ControladorBase {

    public static function gestion() {
        self::loadMain();
        
        require_once './app/view/Maestros/gestion.php';
    }

    public static function planilla() {
        self::loadMain();
        
        require_once './app/view/Maestros/planilla.php';
    }


    public function mostrarMaestros() {
        $dao = new DaoSolicitudMaestro();

        echo $dao->mostrarMaestros();
    }

    public function mostrarPlanilla() {
        $dao = new DaoSolicitudMaestro();

        echo $dao->mostrarPlanilla();
    }



}
