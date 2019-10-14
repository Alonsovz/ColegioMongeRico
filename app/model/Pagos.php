<?php 

class Pagos extends ModeloBase{
    private $idGrado;
    private $idAlumno;
    private $cuota;
    private $estado;
    private $talonario;
    private $fecha;

    public function __construct() {

    }


    public function getFecha()
    {
        return $this->fecha;
    }

   
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIdGrado()
    {
        return $this->idGrado;
    }

   
    public function setIdGrado($idGrado)
    {
        $this->idGrado = $idGrado;

        return $this;
    }


    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

   
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    public function getCuota()
    {
        return $this->cuota;
    }

   
    public function setCuota($cuota)
    {
        $this->cuota = $cuota;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

   
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    

    public function getTalonario()
    {
        return $this->talonario;
    }

   
    public function setTalonario($talonario)
    {
        $this->talonario = $talonario;

        return $this;
    }


}

?>