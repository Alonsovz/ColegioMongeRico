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


    public function guardarPlanilla(){

        $dao = new DaoSolicitudMaestro();

       $id = $_REQUEST["idPlanilla"];
       $idMaestro = $_REQUEST["idMaestro"];
       $diasT = $_REQUEST["dias"];
       $vacacion = $_REQUEST["vacacion"];
       $afpVejez = $_REQUEST["afpVejez"];
       $afpComision = $_REQUEST["afpComision"];
       $isss = $_REQUEST["isss"];
       $otros = $_REQUEST["otros"];
       $renta = $_REQUEST["renta"];
       $aguinaldo = $_REQUEST["aguinaldo"];
       $sueldoDevengado = $_REQUEST["sueldoDevengado"];
       $descuentos = $_REQUEST["descuentos"];
       $totalPago = $_REQUEST["totalPago"];

       $dao->objeto->setIdPlanilla($id);
       $dao->objeto->setDiasT($diasT);
       $dao->objeto->setVacacion($vacacion);
       $dao->objeto->setAfpComision($afpComision);
       $dao->objeto->setAfpVejez($afpVejez);
       $dao->objeto->setISSS($isss);
       $dao->objeto->setRenta($renta);
       $dao->objeto->setOtros($otros);
       $dao->objeto->setAguinaldo($aguinaldo);
       $dao->objeto->setSueldoD($sueldoDevengado);
       $dao->objeto->setTotalDes($descuentos);
       $dao->objeto->setTotalP($totalPago);
      

       echo $dao->actualizarDatosPlanilla();

    }



}
