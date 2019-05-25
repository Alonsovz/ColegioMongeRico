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

    


}

?>