<?php

class InventarioController extends ControladorBase {

    public static function uniformes() {
       
        self::loadMain();
      
        require_once './app/view/Inventario/uniformes.php';
    }

    public static function calcetas() {
        self::loadMain();
        require_once './app/view/Inventario/calcetas.php';
    }

    public static function otros() {
        self::loadMain();
        require_once './app/view/Inventario/otrosProductos.php';
    }

    public function mostrarUniformes() {
        $dao = new DaoInventario();

        echo $dao->mostrarUniformes();
    }

    public function mostrarCalcetas() {
        $dao = new DaoInventario();

        echo $dao->mostrarCalcetas();
    }



    public function mostrarOtros() {
        $dao = new DaoInventario();

        echo $dao->mostrarOtros();
    }

    public function eliminarC() {
        $datos = $_REQUEST["id"];

        $dao = new DaoInventario();

        $dao->objeto->setId($datos);

        echo $dao->eliminarC();
    }

    public function eliminarU() {
        $datos = $_REQUEST["id"];

        $dao = new DaoInventario();

        $dao->objeto->setId($datos);

        echo $dao->eliminarU();
    }

    public function registrarTallaC() {
        $talla = $_REQUEST["nombre"];
        $existencia = $_REQUEST["existencia"];

        $dao = new DaoInventario();

        $dao->objeto->setTalla($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->registrarC();
    }


    public function registrarProducto() {
        $talla = $_REQUEST["nombre"];
        $existencia = $_REQUEST["existencia"];

        $dao = new DaoInventario();

        $dao->objeto->setProducto($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->registrarProducto();
    }

    public function registrarTallaU() {
        $talla = $_REQUEST["nombre"];
        $existencia = $_REQUEST["existencia"];

        $dao = new DaoInventario();

        $dao->objeto->setTalla($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->registrarU();
    }

    public function nuevaVentaU() {
        $talla = $_REQUEST["idTalla"];
        $existencia = $_REQUEST["vendidos"];

        $dao = new DaoInventario();

        $dao->objeto->setId($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->nuevaVentaU();
    }

    public function nuevaVentaC() {
        $talla = $_REQUEST["idTalla"];
        $existencia = $_REQUEST["vendidos"];

        $dao = new DaoInventario();

        $dao->objeto->setId($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->nuevaVentaC();
    }

    public function nuevaExisC() {
        $talla = $_REQUEST["idTallaEx"];
        $existencia = $_REQUEST["cantidadEx"];

        $dao = new DaoInventario();

        $dao->objeto->setId($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->nuevaExisC();
    }

    public function nuevaExisU() {
        $talla = $_REQUEST["idTallaEx"];
        $existencia = $_REQUEST["cantidadEx"];

        $dao = new DaoInventario();

        $dao->objeto->setId($talla);
        $dao->objeto->setExistencia($existencia);

        echo $dao->nuevaExisU();
    }
}

?>