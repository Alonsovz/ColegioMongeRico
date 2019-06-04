<?php

class PagosController extends ControladorBase {

    public static function primerGrado() {
       
        self::loadMain();
      
        require_once './app/view/controlPagos/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
       
        require_once './app/view/controlPagos/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        require_once './app/view/controlPagos/noveno.php';
    }

    public static function prekinder() {
        self::loadMain();
        require_once './app/view/controlPagos/prekinder.php';
    }

    public static function kinder() {
        self::loadMain();
        require_once './app/view/controlPagos/kinder.php';
    }

    public static function preparatoria() {
        self::loadMain();
        require_once './app/view/controlPagos/prepa.php';
    }

}

?>