<?php 

class soliAlumno extends ModeloBase{
      //datos
        private $id;
        private $nie;
        private $nombre;
        private $gradoEstudiar;
        private $sexo;
        private $repGrado;
        private $nuevoIngreso;
        private $reingreso;
        private $religion;
        private $insAnterior;
        private $fechaNac;
        private $deparNac;
        private $lugarNac;
        private $nacionalidad;
        private $naturalizado;
        private $discapacidad;
        private $expDiscapacidad;
        private $enfermedad;
        private $expEnfermedad;
        private $alergia;
        private $expAlergia;
        private $tipoSangre;
        private $direccionRes;
        private $medioTransporte;
        private $distancia;
        private $riesgos;
        private $ocupacion;
        private $trabaja;
        private $dependenciaEco;
        private $email;
        private $telefono;
        private $fechaIngreso;
        private $viveCon;
        private $viveOtro;

        //datosPadres

        private $nombrePadre;
        private $lugarTrabajoP;
        private $telP;
        private $nombreMadre;
        private $lugarTrabajoM;
        private $telM;

        //datosResponsable

        private $nombreRes;
        private $tipoIden;
        private $numeroIden;
        private $familiar;
        private $parentesco;
        private $sexoRes;
        private $estadoFam;
        private $fechaNacRes;
        private $deparNacRes;
        private $municipioNacRes;
        private $nacionalidadRes;
        private $profesion;
        private $escolaridad;
        private $lugarTrabajoRes;
        private $telefonoRes;
        private $discapacidadRes;
        private $expDiscapacidadRes;
        private $tipoSangreRes;
        private $direccionRespon;
        private $tel1;
        private $tel2;
        private $emailRes;
        private $riesgoRes;

        //emergencias

        private $contacto1;
        private $contacto2;
        private $contacto1Tel;
        private $contacto2Tel;

        //retiros

        private $auto1;
        private $auto2;
        private $auto1Tel;
        private $auto2Tel;
        private $viaje;
        private $microProp;
        private $microPropTel;

        //hermanos

        private $nombreHer;
        private $gradoHer;

    public function __construct() {
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNie()
    {
        return $this->nie;
    }

   
    public function setNie($nie)
    {
        $this->nie = $nie;

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

    public function getGradoEstudiar()
    {
        return $this->gradoEstudiar;
    }

  
    public function setGradoEstudiar($gradoEstudiar)
    {
        $this->gradoEstudiar = $gradoEstudiar;

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

    

    public function getRepGrado()
    {
        return $this->repGrado;
    }

    
    public function setRepGrado($repGrado)
    {
        $this->repGrado = $repGrado;

        return $this;
    }

    public function getNuevoIngreso()
    {
        return $this->nuevoIngreso;
    }

    
    public function setNuevoIngreso($nuevoIngreso)
    {
        $this->nuevoIngreso = $nuevoIngreso;

        return $this;
    }


    public function getReingreso()
    {
        return $this->reingreso;
    }

    
    public function setReingreso($reingreso)
    {
        $this->reingreso = $reingreso;

        return $this;
    }

    public function getReligion()
    {
        return $this->religion;
    }

    
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    public function getInsAnterior()
    {
        return $this->insAnterior;
    }

    
    public function setInsAnterior($insAnterior)
    {
        $this->insAnterior = $insAnterior;

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

    public function getDeparNac()
    {
        return $this->deparNac;
    }

    
    public function setDeparNac($deparNac)
    {
        $this->deparNac = $deparNac;

        return $this;
    }

    public function getLugarNac()
    {
        return $this->lugarNac;
    }

    
    public function setLugarNac($lugarNac)
    {
        $this->lugarNac = $lugarNac;

        return $this;
    }

    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getNaturalizado()
    {
        return $this->naturalizado;
    }

    
    public function setNaturalizado($naturalizado)
    {
        $this->naturalizado = $naturalizado;

        return $this;
    }


    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;

        return $this;
    }

    public function getExpDiscapacidad()
    {
        return $this->expDiscapacidad;
    }

    
    public function setExpDiscapacidad($expDiscapacidad)
    {
        $this->expDiscapacidad = $expDiscapacidad;

        return $this;
    }

    public function getAlergia()
    {
        return $this->alergia;
    }

    
    public function setAlergia($alergia)
    {
        $this->alergia = $alergia;

        return $this;
    }

    public function getExpAlergia()
    {
        return $this->expAlergia;
    }

    
    public function setExpAlergia($expAlergia)
    {
        $this->expAlergia = $expAlergia;

        return $this;
    }

    public function getEnfermedad()
    {
        return $this->enfermedad;
    }

    
    public function setEnfermedad($enfermedad)
    {
        $this->enfermedad = $enfermedad;

        return $this;
    }

    public function getExpEnfermedad()
    {
        return $this->expEnfermedad;
    }

    
    public function setExpEnfermedad($expEnfermedad)
    {
        $this->expEnfermedad = $expEnfermedad;

        return $this;
    }

    public function getTipoSangre()
    {
        return $this->tipoSangre;
    }

    
    public function setTipoSangre($tipoSangre)
    {
        $this->tipoSangre = $tipoSangre;

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

    public function getMedioTransporte()
    {
        return $this->medioTransporte;
    }

    
    public function setMedioTransporte($medioTransporte)
    {
        $this->medioTransporte = $medioTransporte;

        return $this;
    }

    public function getDistancia()
    {
        return $this->distancia;
    }

    
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;

        return $this;
    }

    public function getRiesgos()
    {
        return $this->riesgos;
    }

    
    public function setRiesgos($riesgos)
    {
        $this->riesgos = $riesgos;

        return $this;
    }

    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }


    public function getTrabaja()
    {
        return $this->trabaja;
    }

    
    public function setTrabaja($trabaja)
    {
        $this->trabaja = $trabaja;

        return $this;
    }

    public function getDependenciaEco()
    {
        return $this->dependenciaEco;
    }

    
    public function setDependenciaEco($dependenciaEco)
    {
        $this->dependenciaEco = $dependenciaEco;

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

    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

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


    public function getViveCon()
    {
        return $this->viveCon;
    }

    
    public function setViveCon($viveCon)
    {
        $this->viveCon = $viveCon;

        return $this;
    }

    public function getViveOtro()
    {
        return $this->viveOtro;
    }

    
    public function setViveOtro($viveOtro)
    {
        $this->viveOtro = $viveOtro;

        return $this;
    }

    public function getNombrePadre()
    {
        return $this->nombrePadre;
    }

   
    public function setNombrePadre($nombrePadre)
    {
        $this->nombrePadre = $nombrePadre;

        return $this;
    }

    public function getLugarTrabajoP()
    {
        return $this->lugarTrabajoP;
    }

   
    public function setLugarTrabajoP($lugarTrabajoP)
    {
        $this->lugarTrabajoP = $lugarTrabajoP;

        return $this;
    }

    public function getTelP()
    {
        return $this->telP;
    }

   
    public function setTelP($telP)
    {
        $this->telP = $telP;

        return $this;
    }


    public function getNombreMadre()
    {
        return $this->nombreMadre;
    }

   
    public function setNombreMadre($nombreMadre)
    {
        $this->nombreMadre = $nombreMadre;

        return $this;
    }

    public function getLugarTrabajoM()
    {
        return $this->lugarTrabajoM;
    }

   
    public function setLugarTrabajoM($lugarTrabajoM)
    {
        $this->lugarTrabajoM = $lugarTrabajoM;

        return $this;
    }

    public function getTelM()
    {
        return $this->telM;
    }

   
    public function setTelM($telM)
    {
        $this->telM = $telM;

        return $this;
    }

    public function getNombreRes()
    {
        return $this->nombreRes;
    }

   
    public function setNombreRes($nombreRes)
    {
        $this->nombreRes = $nombreRes;

        return $this;
    }

    public function getTipoIden()
    {
        return $this->tipoIden;
    }

   
    public function setTipoIden($tipoIden)
    {
        $this->tipoIden = $tipoIden;

        return $this;
    }

    public function getNumeroIden()
    {
        return $this->numeroIden;
    }

   
    public function setNumeroIden($numeroIden)
    {
        $this->numeroIden = $numeroIden;

        return $this;
    }

    public function getFamiliar()
    {
        return $this->familiar;
    }

   
    public function setFamiliar($familiar)
    {
        $this->familiar = $familiar;

        return $this;
    }

    public function getParentesco()
    {
        return $this->parentesco;
    }

   
    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;

        return $this;
    }

    public function getSexoRes()
    {
        return $this->sexoRes;
    }

  
    public function setSexoRes($sexoRes)
    {
        $this->sexoRes = $sexoRes;

        return $this;
    }

    
    public function getEstadoFam()
    {
        return $this->estadoFam;
    }

  
    public function setEstadoFam($estadoFam)
    {
        $this->estadoFam = $estadoFam;

        return $this;
    }

    public function getFechaNacRes()
    {
        return $this->fechaNacRes;
    }

    
    public function setFechaNacRes($fechaNacRes)
    {
        $this->fechaNacRes = $fechaNacRes;

        return $this;
    }

    public function getDeparNacRes()
    {
        return $this->deparNacRes;
    }

    
    public function setDeparNacRes($deparNacRes)
    {
        $this->deparNacRes = $deparNacRes;

        return $this;
    }

    public function getMunicipioNacRes()
    {
        return $this->municipioNacRes;
    }

    
    public function setMunicipioNacRes($municipioNacRes)
    {
        $this->municipioNacRes = $municipioNacRes;

        return $this;
    }

    public function getNacionalidadRes()
    {
        return $this->nacionalidadRes;
    }

    
    public function setNacionalidadRes($nacionalidadRes)
    {
        $this->nacionalidadRes = $nacionalidadRes;

        return $this;
    }

    public function getProfesion()
    {
        return $this->profesion;
    }

    
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    public function getEscolaridad()
    {
        return $this->escolaridad;
    }

    
    public function setEscolaridad($escolaridad)
    {
        $this->escolaridad = $escolaridad;

        return $this;
    }

    public function getLugarTrabajoRes()
    {
        return $this->lugarTrabajoRes;
    }

    
    public function setLugarTrabajoRes($lugarTrabajoRes)
    {
        $this->lugarTrabajoRes = $lugarTrabajoRes;

        return $this;
    }

    public function getTelefonoRes()
    {
        return $this->telefonoRes;
    }

    
    public function setTelefonoRes($telefonoRes)
    {
        $this->telefonoRes = $telefonoRes;

        return $this;
    }

    public function getDiscapacidadRes()
    {
        return $this->discapacidadRes;
    }

    
    public function setDiscapacidadRes($discapacidadRes)
    {
        $this->discapacidadRes = $discapacidadRes;

        return $this;
    }

    public function getExpDiscapacidadRes()
    {
        return $this->expDiscapacidadRes;
    }

    
    public function setExpDiscapacidadRes($expDiscapacidadRes)
    {
        $this->expDiscapacidadRes = $expDiscapacidadRes;

        return $this;
    }

    public function getTipoSangreRes()
    {
        return $this->tipoSangreRes;
    }

    
    public function setTipoSangreRes($tipoSangreRes)
    {
        $this->tipoSangreRes = $tipoSangreRes;

        return $this;
    }

    public function getDireccionRespon()
    {
        return $this->direccionRespon;
    }

    
    public function setDireccionRespon($direccionRespon)
    {
        $this->direccionRespon = $direccionRespon;

        return $this;
    }

    public function getTel1()
    {
        return $this->tel1;
    }

    
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2()
    {
        return $this->tel2;
    }

    
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getEmailRes()
    {
        return $this->emailRes;
    }

   
    public function setEmailRes($emailRes)
    {
        $this->emailRes = $emailRes;

        return $this;
    }


    public function getRiesgoRes()
    {
        return $this->riesgoRes;
    }

   
    public function setRiesgoRes($riesgoRes)
    {
        $this->riesgoRes = $riesgoRes;

        return $this;
    }
    

    public function getContacto1()
    {
        return $this->contacto1;
    }

    

   
    public function setContacto1($contacto1)
    {
        $this->contacto1 = $contacto1;

        return $this;
    }

    public function getContacto1Tel()
    {
        return $this->contacto1Tel;
    }

   
    public function setContacto1Tel($contacto1Tel)
    {
        $this->contacto1Tel = $contacto1Tel;

        return $this;
    }

    public function getContacto2()
    {
        return $this->contacto2;
    }

   
    public function setContacto2($contacto2)
    {
        $this->contacto2 = $contacto2;

        return $this;
    }

    public function getContacto2Tel()
    {
        return $this->contacto2Tel;
    }

   
    public function setContacto2Tel($contacto2Tel)
    {
        $this->contacto2Tel = $contacto2Tel;

        return $this;
    }


    public function getAuto1()
    {
        return $this->auto1;
    }

   
    public function setAuto1($auto1)
    {
        $this->auto1 = $auto1;

        return $this;
    }

    public function getAuto1Tel()
    {
        return $this->auto1Tel;
    }

   
    public function setAuto1Tel($auto1Tel)
    {
        $this->auto1Tel = $auto1Tel;

        return $this;
    }

    public function getAuto2()
    {
        return $this->auto2;
    }

   
    public function setAuto2($auto2)
    {
        $this->auto2 = $auto2;

        return $this;
    }

    public function getAuto2Tel()
    {
        return $this->auto2Tel;
    }

   
    public function setAuto2Tel($auto2Tel)
    {
        $this->auto2Tel = $auto2Tel;

        return $this;
    }

    public function getViaje()
    {
        return $this->viaje;
    }

   
    public function setViaje($viaje)
    {
        $this->viaje = $viaje;

        return $this;
    }

    public function getMicroProp()
    {
        return $this->microProp;
    }

   
    public function setMicroProp($microProp)
    {
        $this->microProp = $microProp;

        return $this;
    }


    public function getMicroPropTel()
    {
        return $this->microPropTel;
    }

   
    public function setMicroPropTel($microPropTel)
    {
        $this->microPropTel = $microPropTel;

        return $this;
    }

    
    public function getNombreHer()
    {
        return $this->nombreHer;
    }

   
    public function setNombreHer($nombreHer)
    {
        $this->nombreHer = $nombreHer;

        return $this;
    }

    public function getGradoHer()
    {
        return $this->gradoHer;
    }

   
    public function setGradoHer($gradoHer)
    {
        $this->gradoHer = $gradoHer;

        return $this;
    }









    
}



?>