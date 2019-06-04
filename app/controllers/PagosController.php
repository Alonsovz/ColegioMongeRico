<?php

class PagosController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/controlPagos/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/controlPagos/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/noveno.php';
    }

    public static function prekinder() {
        self::loadMain();
        require_once './app/view/controlPagos/prekinder.php';
    }

    public static function kinder() {
        self::loadMain();
        require_once './app/view/controlPagos/kinder.php';
    }

    public static function preparatoria() {
        self::loadMain();
        require_once './app/view/controlPagos/prepa.php';
    }

    public function guardarPagoNo(){
        $idAlumno = $_REQUEST["idAl"];
        $idCuota = $_REQUEST["idC"];

        $dao = new DaoPagos();
        $dao->objeto->setIdAlumno($idAlumno);
        if($idCuota==1){

            echo $dao->guardarPagoEn();
        }
        if($idCuota==2){

            echo $dao->guardarPagoFe();
        }
        if($idCuota==3){

            echo $dao->guardarPagoMar();
        }
        if($idCuota==4){

            echo $dao->guardarPagoA();
        }
        if($idCuota==5){

            echo $dao->guardarPagoMa();
        }
        if($idCuota==6){

            echo $dao->guardarPagoJun();
        }
        if($idCuota==7){

            echo $dao->guardarPagoJul();
        }
        if($idCuota==8){

            echo $dao->guardarPagoAgo();
        }
        if($idCuota==9){

            echo $dao->guardarPagoSep();
        }
        if($idCuota==10){

            echo $dao->guardarPagoOc();
        }

       
    }



    public function guardarPagoAde(){
        $idAlumno = $_REQUEST["idAl"];
        $idCuota = $_REQUEST["idC"];

        $dao = new DaoPagos();
        $dao->objeto->setIdAlumno($idAlumno);
        if($idCuota==1){

            echo $dao->guardarPagoEnA();
        }
        if($idCuota==2){

            echo $dao->guardarPagoFeA();
        }
        if($idCuota==3){

            echo $dao->guardarPagoMarA();
        }
        if($idCuota==4){

            echo $dao->guardarPagoAA();
        }
        if($idCuota==5){

            echo $dao->guardarPagoMaA();
        }
        if($idCuota==6){

            echo $dao->guardarPagoJunA();
        }
        if($idCuota==7){

            echo $dao->guardarPagoJulA();
        }
        if($idCuota==8){

            echo $dao->guardarPagoAgoA();
        }
        if($idCuota==9){

            echo $dao->guardarPagoSepA();
        }
        if($idCuota==10){

            echo $dao->guardarPagoOcA();
        }

       
    }


    public function guardarPagoAtr(){
        $idAlumno = $_REQUEST["idAl"];
        $idCuota = $_REQUEST["idC"];

        $dao = new DaoPagos();
        $dao->objeto->setIdAlumno($idAlumno);
        if($idCuota==1){

            echo $dao->guardarPagoEnAt();
        }
        if($idCuota==2){

            echo $dao->guardarPagoFeAt();
        }
        if($idCuota==3){

            echo $dao->guardarPagoMarAt();
        }
        if($idCuota==4){

            echo $dao->guardarPagoAAt();
        }
        if($idCuota==5){

            echo $dao->guardarPagoMaAt();
        }
        if($idCuota==6){

            echo $dao->guardarPagoJunAt();
        }
        if($idCuota==7){

            echo $dao->guardarPagoJulAt();
        }
        if($idCuota==8){

            echo $dao->guardarPagoAgoAt();
        }
        if($idCuota==9){

            echo $dao->guardarPagoSepAt();
        }
        if($idCuota==10){

            echo $dao->guardarPagoOcAt();
        }

       
    }


    public function guardarTalonario(){
        $idAlumno = $_REQUEST["idAl"];
        $talonario = $_REQUEST["nT"];

        $dao = new DaoPagos();
        $dao->objeto->setIdAlumno($idAlumno);
        $dao->objeto->setTalonario($talonario);
        

         echo $dao->guardarTalonario();

    }

}

?>