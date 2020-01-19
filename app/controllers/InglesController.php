<?php

class InglesController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Ingles/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Ingles/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Ingles/noveno.php';
    }


    public function mostrarNotasColectoresIngles() {
        $mes = (isset($_REQUEST['mes']))? $_REQUEST['mes']:0;
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        $dao = new DaoNotas();
       
        
        
        echo $dao->mostrarNotasColectoresIngles($mes,$anio,$grado);
    
    }


    public function mostrarNotasTrimestralesIngles() {
        $dao = new DaoNotas();
       
        
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        
        echo $dao->mostrarNotasTrimestralesIngles($anio,$grado);
    
    }

    public function guardarNotas(){
        $id = $_REQUEST["id"];
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $nota4 = $_REQUEST["nota4"];
        $nota5 = $_REQUEST["nota5"];
        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $dao = new DaoNotas();
       
        
        
        echo $dao->guardarNotasIngles($id,$nota1,$nota2,$nota3,$nota4,$nota5,$mes,$anio);
    }


}

?>