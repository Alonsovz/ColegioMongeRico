<?php

class InformaticaController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Informatica/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Informatica/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/noveno.php';
    }

    public function mostrarNotasColectoresInfo() {
        $mes = (isset($_REQUEST['mes']))? $_REQUEST['mes']:0;
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        $dao = new DaoNotas();
       
        
        
        echo $dao->mostrarNotasColectoresInfo($mes,$anio,$grado);
    
    }


    public function mostrarNotasTrimestralesCompu() {
        $dao = new DaoNotas();
       
        
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        
        echo $dao->mostrarNotasTrimestralesCompu($anio,$grado);
    
    }


    public function guardarNotas(){
        $id = $_REQUEST["id"];
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $dao = new DaoNotas();
       
        
        
        echo $dao->guardarNotasInfo($id,$nota1,$nota2,$nota3,$mes,$anio);
    }

}

?>