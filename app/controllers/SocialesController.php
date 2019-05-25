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

}

?>