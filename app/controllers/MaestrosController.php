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



    public function voucherRenta() {
        $dao = new DaoSolicitudMaestro();

        require_once './app/reportes/voucherRenta.php';

        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];
        $id = $_REQUEST["id"];

        $reporte = new Reporte();


        if($mes == "01"){
            $nombre = "Enero";
        }
        if($mes == "02"){
            $nombre = "Febrero";
        }
        if($mes == "03"){
            $nombre = "Marzo";
        }
        if($mes == "04"){
            $nombre = "Abril";
        }
        if($mes == "05"){
            $nombre = "Mayo";
        }
        if($mes == "06"){
            $nombre = "Junio";
        }
        if($mes == "07"){
            $nombre = "Julio";
        }
        if($mes == "08"){
            $nombre = "Agosto";
        }
        if($mes == "09"){
            $nombre = "Septiembre";
        }
        if($mes == "10"){
            $nombre = "Octubre";
        }
        if($mes == "11"){
            $nombre = "Noviembre";
        }
        if($mes == "12"){
            $nombre = "Diciembre";
        }

        $mesVoucher = $nombre. " " . $anio;
 
        $sueldoD = $dao -> sueldoDevengado($mes,$anio,$id);
        $renta = $dao -> descRenta($mes,$anio,$id);
        $otrosD = $dao -> otrosD($mes,$anio,$id);
        $nombreMaestro = $dao -> nombreMaestro($id);
        $direccion = $dao -> direccion($id);
        $nit = $dao -> nit($id);
        $me = $mesVoucher;
        $letras = $_REQUEST["letras"];
        $reporte->voucherRenta($sueldoD,$renta,$otrosD,$nombreMaestro,$nit,$direccion,$me,$letras);
    }


    public function voucherSeguro() {
        $dao = new DaoSolicitudMaestro();

        require_once './app/reportes/voucherSeguro.php';

        

        $reporte = new Reporte();

        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];
        $id = $_REQUEST["id"];


        if($mes == "01"){
            $nombre = "Enero";
        }
        if($mes == "02"){
            $nombre = "Febrero";
        }
        if($mes == "03"){
            $nombre = "Marzo";
        }
        if($mes == "04"){
            $nombre = "Abril";
        }
        if($mes == "05"){
            $nombre = "Mayo";
        }
        if($mes == "06"){
            $nombre = "Junio";
        }
        if($mes == "07"){
            $nombre = "Julio";
        }
        if($mes == "08"){
            $nombre = "Agosto";
        }
        if($mes == "09"){
            $nombre = "Septiembre";
        }
        if($mes == "10"){
            $nombre = "Octubre";
        }
        if($mes == "11"){
            $nombre = "Noviembre";
        }
        if($mes == "12"){
            $nombre = "Diciembre";
        }

        $mesVoucher = $nombre. " " . $anio;
 
        $sueldoD = $dao -> sueldoDevengado($mes,$anio,$id);
        $isss = $dao -> ISSS($mes,$anio,$id);
        $afp = $dao -> afp($mes,$anio,$id);
        $otrosD = $dao -> otrosD($mes,$anio,$id);
        $nombreMaestro = $dao -> nombreMaestro($id);
        $nit = $dao -> nit($id);
        $direccion = $dao -> direccion($id);
        $letras = $_REQUEST["letras"];
        $me = $mesVoucher;
        $reporte->voucherSeguro($sueldoD,$isss,$afp,$otrosD,$nombreMaestro,$nit,$direccion,$me,$letras);
    }

}
