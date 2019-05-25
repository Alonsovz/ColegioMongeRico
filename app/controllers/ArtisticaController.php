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

}

?>