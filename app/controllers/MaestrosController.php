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


        $mes = (isset($_REQUEST['mes']))? $_REQUEST['mes']:0;
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $dao = new DaoSolicitudMaestro();

        echo $dao->mostrarPlanilla($mes , $anio);
       
    }



}
