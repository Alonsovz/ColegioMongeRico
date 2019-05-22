<?php

class MateriasOrientadoresController extends ControladorBase {
    
    public static function primerGrado() {
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();

        self::loadMain();
      
        require_once './app/view/MateriasOrientadores/primer.php';
    }

    public static function segundoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
      
        require_once './app/view/MateriasOrientadores/segundo.php';
    }

    public static function tercerGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
        require_once './app/view/MateriasOrientadores/tercer.php';
    }

    public static function cuartoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
        require_once './app/view/MateriasOrientadores/cuarto.php';
    }

    public static function quintoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
        require_once './app/view/MateriasOrientadores/quinto.php';
    }

    public static function sextoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
        require_once './app/view/MateriasOrientadores/sexto.php';
    }

    public static function septimoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
        require_once './app/view/MateriasOrientadores/septimo.php';
    }

    public static function octavoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
        require_once './app/view/MateriasOrientadores/octavo.php';
    }

    public static function novenoGrado() {
        self::loadMain();
        $dao = new DaoUsuario();
        $maestros = $dao->mostrarMaestrosCmb();
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


    public function datosGenerales() {
        $dao = new DaoMateriasOrientadores();
      
        $idGrado = $_REQUEST["grado"];
       $dao->objeto->setIdGrado($idGrado);

        echo $dao->datosGenerales();        
    }

    public function guardarDatos() {
        $dao = new DaoMateriasOrientadores();
      
       $dao->objeto->setIdGrado($_REQUEST["idGrado"]);
       $dao->objeto->setOrientador($_REQUEST["orientador"]);
       $dao->objeto->setOrientadorMate($_REQUEST["orientadorMate"]);
       $dao->objeto->setOrientadorLen($_REQUEST["orientadorLen"]);
       $dao->objeto->setOrientadorCien($_REQUEST["orientadorCien"]);
       $dao->objeto->setOrientadorSoc($_REQUEST["orientadorSoc"]);
       $dao->objeto->setOrientadorIng($_REQUEST["orientadorIng"]);
       $dao->objeto->setOrientadorArt($_REQUEST["orientadorArt"]);
       $dao->objeto->setOrientadorFis($_REQUEST["orientadorFis"]);
       $dao->objeto->setOrientadorInfo($_REQUEST["orientadorInfo"]);
       $dao->objeto->setOrientadorMo($_REQUEST["orientadorMo"]);

        echo $dao->guardarDatos();        
    }


}



?>