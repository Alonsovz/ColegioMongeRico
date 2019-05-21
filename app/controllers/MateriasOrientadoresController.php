<?php

class MateriasOrientadoresController extends ControladorBase {
    
    public static function primerGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/noveno.php';
    }

    public static function prekinder() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/prekinder.php';
    }

    public static function kinder() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/kinder.php';
    }

    public static function preparatoria() {
        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/prepa.php';
    }


}



?>