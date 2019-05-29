<?php 

class soliMaestro extends ModeloBase{

    private $id;
    private $nombre;
    private $fechaNac;
    private $lugarNacimiento;
    private $sexo;
    private $direccionRes;
    private $telRes;
    private $telMovil;
    private $email;
    private $dui;
    private $nit;
    private $nip;
    private $afp;
    private $numeroPartida;
    private $subNumero;
    private $nivelAcademico;
    private $nivel;
    private $titulo;
    private $especialidad;
    private $capacitacion;
    private $institucion;
    private $cargo;
    private $grado;
    private $asignaturas;
    private $desde;
    private $hasta;
    private $fechaIngreso;
    private $habilidades;
    private $nomUsuario;
    private $pass;

    public function __construct() {

    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

   
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }


    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }


    public function getSexo()
    {
        return $this->sexo;
    }

  
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getDireccionRes()
    {
        return $this->direccionRes;
    }

    
    public function setDireccionRes($direccionRes)
    {
        $this->direccionRes = $direccionRes;

        return $this;
    }


    public function getTelRes()
    {
        return $this->telRes;
    }

   
    public function setTelRes($telRes)
    {
        $this->telRes = $telRes;

        return $this;
    }


    public function getTelMovil()
    {
        return $this->telMovil;
    }

    
    public function setTelMovil($telMovil)
    {
        $this->telMovil = $telMovil;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

   
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getDui()
    {
        return $this->dui;
    }

    
    public function setDui($dui)
    {
        $this->dui = $dui;

        return $this;
    }


    public function getNit()
    {
        return $this->nit;
    }

    
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    public function getAfp()
    {
        return $this->afp;
    }

   
    public function setAfp($afp)
    {
        $this->afp = $afp;

        return $this;
    }

    public function getNumeroPartida()
    {
        return $this->numeroPartida;
    }

    
    public function setNumeroPartida($numeroPartida)
    {
        $this->numeroPartida = $numeroPartida;

        return $this;
    }


    public function getSubNumero()
    {
        return $this->subNumero;
    }

    
    public function setSubNumero($subNumero)
    {
        $this->subNumero = $subNumero;

        return $this;
    }

    public function getNivelAcademico()
    {
        return $this->nivelAcademico;
    }

    public function setNivelAcademico($nivelAcademico)
    {
        $this->nivelAcademico = $nivelAcademico;

        return $this;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

  
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }


    public function getCapacitacion()
    {
        return $this->capacitacion;
    }

   
    public function setCapacitacion($capacitacion)
    {
        $this->capacitacion = $capacitacion;

        return $this;
    }

    public function getInstitucion()
    {
        return $this->institucion;
    }

    
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }


    public function getCargo()
    {
        return $this->cargo;
    }

    
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getGrado()
    {
        return $this->grado;
    }

   
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

   
    public function setAsignaturas($asignaturas)
    {
        $this->asignaturas = $asignaturas;

        return $this;
    }

    
    public function getDesde()
    {
        return $this->desde;
    }

    
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    public function getHasta()
    {
        return $this->hasta;
    }

  
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }


    public function getHabilidades()
    {
        return $this->habilidades;
    }

    public function setHabilidades($habilidades)
    {
        $this->habilidades = $habilidades;

        return $this;
    }

    public function getNomUsuario()
    {
        return $this->nomUsuario;
    }

    public function setNomUsuario($nomUsuario)
    {
        $this->nomUsuario = $nomUsuario;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }


    


}

?>
