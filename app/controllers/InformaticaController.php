<?php

class InformaticaController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/Informatica/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/Informatica/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/Informatica/noveno.php';
    }

}

?>