<?php

class CienciasController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Ciencias/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Ciencias/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Ciencias/noveno.php';
    }

}

?>