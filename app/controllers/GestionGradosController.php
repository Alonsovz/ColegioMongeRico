<?php

class GestionGradosController extends ControladorBase {

    public static function primerGrado() {
       
       

        self::loadMain();
      
        require_once './app/view/GestionGrados/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/GestionGrados/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/GestionGrados/noveno.php';
    }

    public static function prekinder() {
        self::loadMain();
      
        require_once './app/view/GestionGrados/prekinder.php';
    }

    public static function kinder() {
        self::loadMain();
      
        require_once './app/view/GestionGrados/kinder.php';
    }

    public static function preparatoria() {
        self::loadMain();
      
        require_once './app/view/GestionGrados/prepa.php';
    }

    public function mostrarAlumnosPrimer() {
        $idGrado = (isset($_REQUEST['idGrado']))? $_REQUEST['idGrado']:0;

        $dao = new DaoSolictudAlumno();

        echo $dao->mostrarAlumnosPrimer($idGrado);
    }

}

?>