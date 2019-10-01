<?php

class ArtisticaController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Artistica/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Artistica/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Artistica/noveno.php';
    }

    
    public function mostrarNotasColectoresArtistica() {
        $mes = (isset($_REQUEST['mes']))? $_REQUEST['mes']:0;
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        $dao = new DaoNotas();
       
        
        
        echo $dao->mostrarNotasColectoresArtistica($mes,$anio,$grado);
    
    }

    public function mostrarNotasTrimestralesArtistica() {
        $dao = new DaoNotas();
       
        
        $anio = (isset($_REQUEST['anio']))? $_REQUEST['anio']:0;
        $grado = (isset($_REQUEST['grado']))? $_REQUEST['grado']:0;
        
        echo $dao->mostrarNotasTrimestralesArtistica($anio,$grado);
    
    }


    public function guardarNotas(){
        $id = $_REQUEST["id"];
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $dao = new DaoNotas();
       
        
        
        echo $dao->guardarNotasArtistica($id,$nota1,$nota2,$nota3,$mes,$anio);
    }

}

?>