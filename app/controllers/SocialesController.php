<?php

class SocialesController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Sociales/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Sociales/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Sociales/noveno.php';
    }

    public function mostrarNotasColectoresSociales() {
        $mes = (isset($_REQUEST['mes']))? $_REQUEST['mes']:0;
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        $dao = new DaoNotas();
       
        
        
        echo $dao->mostrarNotasColectoresSociales($mes,$anio,$grado);
    
    }


    public function mostrarNotasTrimestralesSociales() {
        $dao = new DaoNotas();
       
        
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        
        echo $dao->mostrarNotasTrimestralesSociales($anio,$grado);
    
    }

    public function guardarNotas(){
        $id = $_REQUEST["id"];
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $dao = new DaoNotas();
       
        
        
        echo $dao->guardarNotasSociales($id,$nota1,$nota2,$nota3,$mes,$anio);
    }

}

?>