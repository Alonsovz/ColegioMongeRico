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

}

?>