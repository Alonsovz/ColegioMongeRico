<?php 

class Inventario extends ModeloBase{
    private $id;
    private $talla;
    private $existencia;
    private $producto;

    public function __construct() {

    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }


    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }


}

?>