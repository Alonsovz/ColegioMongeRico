<?php 

class MateriasOrientadores extends ModeloBase{
    private $idGrado;
    private $orientador;
    private $orientadorMate;
    private $orientadorLen;
    private $orientadorCien;
    private $orientadorSoc;
    private $orientadorIng;
    private $orientadorArt;
    private $orientadorFi;
    private $orientadorMo;
    private $orientadorInfo;
    private $aula;

    public function __construct() {

    }

    public function getIdGrado()
    {
        return $this->idGrado;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setIdGrado($idGrado)
    {
        $this->idGrado = $idGrado;

        return $this;
    }

    public function getOrientador()
    {
        return $this->orientador;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientador($orientador)
    {
        $this->orientador = $orientador;

        return $this;
    }

    public function getOrientadorMate()
    {
        return $this->orientadorMate;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorMate($orientadorMate)
    {
        $this->orientadorMate = $orientadorMate;

        return $this;
    }

    public function getOrientadorLen()
    {
        return $this->orientadorLen;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorLen($orientadorLen)
    {
        $this->orientadorLen = $orientadorLen;

        return $this;
    }

    public function getOrientadorSoc()
    {
        return $this->orientadorSoc;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorSoc($orientadorSoc)
    {
        $this->orientadorSoc = $orientadorSoc;

        return $this;
    }

    public function getOrientadorCien()
    {
        return $this->orientadorCien;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorCien($orientadorCien)
    {
        $this->orientadorCien = $orientadorCien;

        return $this;
    }

    public function getOrientadorIng()
    {
        return $this->orientadorIng;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorIng($orientadorIng)
    {
        $this->orientadorIng = $orientadorIng;

        return $this;
    }

    public function getOrientadorArt()
    {
        return $this->orientadorArt;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorArt($orientadorArt)
    {
        $this->orientadorArt = $orientadorArt;

        return $this;
    }

    public function getOrientadorInfo()
    {
        return $this->orientadorInfo;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorInfo($orientadorInfo)
    {
        $this->orientadorInfo = $orientadorInfo;

        return $this;
    }

    public function getOrientadorMo()
    {
        return $this->orientadorMo;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorMo($orientadorMo)
    {
        $this->orientadorMo = $orientadorMo;

        return $this;
    }

    public function getOrientadorFis()
    {
        return $this->orientadorFis;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setOrientadorFis($orientadorFis)
    {
        $this->orientadorFis = $orientadorFis;

        return $this;
    }

    public function getAula()
    {
        return $this->aula;
    }

    /**
     * Set the value of codigoUsuario
     *
     * @return  self
     */ 
    public function setAula($aula)
    {
        $this->aula = $aula;

        return $this;
    }

}


?>