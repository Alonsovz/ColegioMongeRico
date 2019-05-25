<?php

class FisicaController extends ControladorBase {
    
    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Fisica/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Fisica/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Fisica/noveno.php';
    }
}

?>