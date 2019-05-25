<?php

class LenguajeController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Lenguaje/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Lenguaje/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Lenguaje/noveno.php';
    }
}

?>