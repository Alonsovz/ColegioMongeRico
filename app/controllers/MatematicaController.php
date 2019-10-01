<?php

class MatematicaController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Matematica/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Matematica/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Matematica/noveno.php';
    }


    public function mostrarNotasColectoresMatematicas() {
        $mes = (isset($_REQUEST['mes']))? $_REQUEST['mes']:0;
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        $dao = new DaoNotas();
       
        
        
        echo $dao->mostrarNotasColectoresMatematicas($mes,$anio,$grado);
    
    }


    public function mostrarNotasTrimestralesMatematicas() {
        $dao = new DaoNotas();
       
        
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        
        echo $dao->mostrarNotasTrimestralesMatematicas($anio,$grado);
    
    }


    public function guardarNotas(){
        $id = $_REQUEST["id"];
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $dao = new DaoNotas();
       
        
        
        echo $dao->guardarNotasMatematicas($id,$nota1,$nota2,$nota3,$mes,$anio);
    }
    


}

?>