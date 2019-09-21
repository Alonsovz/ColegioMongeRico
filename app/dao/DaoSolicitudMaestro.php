<?php 

class DaoSolicitudMaestro extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new soliMaestro();
    }

    public function registrarDatos() {
        $_query = "insert into maestros values(null,'".$this->objeto->getNombre()."','".$this->objeto->getApellido()."',
         '".$this->objeto->getFechaNac()."',
        '".$this->objeto->getLugarNacimiento()."', '".$this->objeto->getSexo()."','".$this->objeto->getDireccionRes()."',
        '".$this->objeto->getTelRes()."','".$this->objeto->getTelMovil()."',
         '".$this->objeto->getEmail()."','".$this->objeto->getDui()."',
         '".$this->objeto->getNit()."','".$this->objeto->getNip()."','".$this->objeto->getAfp()."',
        '".$this->objeto->getNumeroPartida()."','".$this->objeto->getSubNumero()."',
        '".$this->objeto->getNivelAcademico()."','".$this->objeto->getNivel()."',
        '".$this->objeto->getEspecialidad()."','".$this->objeto->getFechaIngreso()."',
        '".$this->objeto->getHabilidades()."','".$this->objeto->getTipoPago()."','".$this->objeto->getSueldo()."',1,'','')";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }



    public function editarDatos() {
        $_query = "update  maestros set nombre= '".$this->objeto->getNombre()."',
        apellido='".$this->objeto->getApellido()."',
         fechaNacimiento = '".$this->objeto->getFechaNac()."',
        lugarNacimiento = '".$this->objeto->getLugarNacimiento()."', 
        sexo = '".$this->objeto->getSexo()."',
        direccionResidencia = '".$this->objeto->getDireccionRes()."',
        telResidencia = '".$this->objeto->getTelRes()."',
        telMovil = '".$this->objeto->getTelMovil()."',
         correo = '".$this->objeto->getEmail()."',
         dui='".$this->objeto->getDui()."',
         nit = '".$this->objeto->getNit()."',
         nip = '".$this->objeto->getNip()."',
         afp = '".$this->objeto->getAfp()."',
         numeroPartida = '".$this->objeto->getNumeroPartida()."',
         subnumero = '".$this->objeto->getSubNumero()."',
        nivelAcademico = '".$this->objeto->getNivelAcademico()."',
        nivel = '".$this->objeto->getNivel()."',
        especialidad = '".$this->objeto->getEspecialidad()."',
        fechaIngreso = '".$this->objeto->getFechaIngreso()."',
        habilidades = '".$this->objeto->getHabilidades()."',
        tipoPago = '".$this->objeto->getTipoPago()."',
        sueldo = '".$this->objeto->getSueldo()."'
        where idMaestro = ".$this->objeto->getId();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }
    public function registrarDatosPlanilla() {
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $mes = date("m");
        while($mes < 13){
            
         $_query = "insert into planilla values(null,".$idExp.",0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,
        '".$mes."',year(CURRENT_DATE()));
        ";

        $resultado = $this->con->ejecutar($_query);
        $mes++;
        }
        
        

        

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    
    public function registrarTitulos(){
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $query = "Insert into titulosObtenidos values (null,'".$this->objeto->getTitulo()."',".$idExp.");";

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }

    public function registrarCapacitacion(){
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $query = "Insert into capacitaciones values (null,'".$this->objeto->getCapacitacion()."',".$idExp.");";

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }

    public function registrarExperiencia(){
        $corr= "(select max(idMaestro) as id from maestros)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $query = "Insert into experienciaLaboral values (null,'".$this->objeto->getInstitucion()."',
        '".$this->objeto->getCargo()."','".$this->objeto->getGrado()."','".$this->objeto->getAsignaturas()."',
        '".$this->objeto->getDesde()."','".$this->objeto->getHasta()."',".$idExp.");";

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }


    public function mostrarMaestros() {
        $_query = "select concat(m.nombre,' ',m.apellido) as nombreD, m.*,
        TIMESTAMPDIFF(YEAR,fechaNacimiento,CURDATE()) AS edad,
        format (m.sueldo,2) as sueldoD
         from maestros m where m.idEliminado=1;";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idMaestro"].'\" nombreTxt=\"'.$fila["nombreD"].'\" ';
            $btnEditar .= 'nombre=\"'.$fila["nombre"].'\"  apellido=\"'.$fila["apellido"].'\" ';
            $btnEditar .= 'fechaNacimiento=\"'.$fila["fechaNacimiento"].'\"  lugarNacimiento=\"'.$fila["lugarNacimiento"].'\" ';
            $btnEditar .= 'sexo=\"'.$fila["sexo"].'\" direccion=\"'.$fila["direccionResidencia"].'\"';
            $btnEditar .= 'edad=\"'.$fila["edad"].'\" telResidencia=\"'.$fila["telResidencia"].'\" telMovil=\"'.$fila["telMovil"].'\"';
            $btnEditar .= 'correo=\"'.$fila["correo"].'\" dui=\"'.$fila["dui"].'\" nit=\"'.$fila["nit"].'\"';
            $btnEditar .= 'nip=\"'.$fila["nip"].'\" afp=\"'.$fila["afp"].'\" numeroPartida=\"'.$fila["numeroPartida"].'\"  subnumero=\"'.$fila["subnumero"].'\" ';
            $btnEditar .= 'nivelAcademico=\"'.$fila["nivelAcademico"].'\" nivel=\"'.$fila["nivel"].'\" especialidad=\"'.$fila["especialidad"].'\"';
            $btnEditar .= 'fechaIngreso=\"'.$fila["fechaIngreso"].'\" habilidades=\"'.$fila["habilidades"].'\" tipoPago=\"'.$fila["tipoPago"].'\"';
            $btnEditar .= 'sueldo=\"'.$fila["sueldoD"].'\" ';
            $btnEditar .= 'class=\"ui  icon blue small button\" onclick=\"detalles(this)\"><i class=\"edit icon\"></i> Ver Detalles</button>';
            
            $btnEliminar = '<button id=\"'.$fila["idMaestro"].'\"  nombreTxt=\"'.$fila["nombreD"].'\" nombre=\"'.$fila["nombre"].'\"  apellido=\"'.$fila["apellido"].'\"  onclick=\"eliminar(this)\" class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.' '.$btnEliminar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }



    public function mostrarMaestrosBajas() {
        $_query = "select concat(m.nombre,' ',m.apellido) as nombreD, m.*,
        TIMESTAMPDIFF(YEAR,fechaNacimiento,CURDATE()) AS edad,
        format (m.sueldo,2) as sueldoD,
        DATE_FORMAT(fechaBaja, '%d/%m/%Y') as fechaBajaM
         from maestros m where m.idEliminado=2;";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["idMaestro"].'\" nombreTxt=\"'.$fila["nombreD"].'\" ';
            $btnEditar .= 'nombre=\"'.$fila["nombre"].'\"  apellido=\"'.$fila["apellido"].'\" ';
            $btnEditar .= 'fechaNacimiento=\"'.$fila["fechaNacimiento"].'\"  lugarNacimiento=\"'.$fila["lugarNacimiento"].'\" ';
            $btnEditar .= 'sexo=\"'.$fila["sexo"].'\" direccion=\"'.$fila["direccionResidencia"].'\"';
            $btnEditar .= 'edad=\"'.$fila["edad"].'\" telResidencia=\"'.$fila["telResidencia"].'\" telMovil=\"'.$fila["telMovil"].'\"';
            $btnEditar .= 'correo=\"'.$fila["correo"].'\" dui=\"'.$fila["dui"].'\" nit=\"'.$fila["nit"].'\"';
            $btnEditar .= 'nip=\"'.$fila["nip"].'\" afp=\"'.$fila["afp"].'\" numeroPartida=\"'.$fila["numeroPartida"].'\"  subnumero=\"'.$fila["subnumero"].'\" ';
            $btnEditar .= 'nivelAcademico=\"'.$fila["nivelAcademico"].'\" nivel=\"'.$fila["nivel"].'\" especialidad=\"'.$fila["especialidad"].'\"';
            $btnEditar .= 'fechaIngreso=\"'.$fila["fechaIngreso"].'\" habilidades=\"'.$fila["habilidades"].'\" tipoPago=\"'.$fila["tipoPago"].'\"';
            $btnEditar .= 'sueldo=\"'.$fila["sueldoD"].'\" razonBaja=\"'.$fila["razonBaja"].'\"';
            $btnEditar .= 'txtFecha=\"'.$fila["fechaBajaM"].'\" ';
            $btnEditar .= 'class=\"ui  icon blue small button\" onclick=\"detalles(this)\"><i class=\"edit icon\"></i> Ver Detalles</button>';
            
            $btnEliminar = '<button id=\"'.$fila["idMaestro"].'\"  nombreTxt=\"'.$fila["nombreD"].'\" nombre=\"'.$fila["nombre"].'\"  apellido=\"'.$fila["apellido"].'\"  onclick=\"eliminar(this)\" class=\"ui btnEliminar icon negative small button\"><i class=\"trash icon\"></i> Eliminar</button>';

            $acciones = ', "Acciones": "'.$btnEditar.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarPlanilla($mes=0 , $anio=0) {
        $_query = "select p.*, concat(m.nombre,' ',m.apellido) as nombre, m.tipoPago as pago,
        format(m.sueldo,2) as sueldoFijo,
      concat('$', ' ',  format((m.sueldo),2) ) as sueldoM,
        format((p.sueldoD),2) as sueldoD,
        format((p.vacacion),2) as vacacion,
        format((p.aguinaldo),2) as aguinaldo,
        format((p.afpEmV),2) as afpEmV,
        format((p.afpEmC),2) as afpEmC,
        format((p.isssE),2) as isssE,
        format((p.renta),2) as renta,
        format((p.otros),2) as otros,
        format((p.totalDesM),2) as totalDesM,
        format((p.totalP),2) as totalP
         from planilla p 
        inner join maestros m on m.idMaestro = p.idMaestro 
        where m.idEliminado=1 and p.mes=".$mes." and anio=".$anio."  order by nombre asc";

        $resultado = $this->con->ejecutar($_query);

        $_json = '';

        while($fila = $resultado->fetch_assoc()) {
            $btnEditar = "";
            $object = json_encode($fila);

            $btnEditar .= '<button id=\"'.$fila["idMaestro"].'\"   nombre=\"'.$fila["nombre"].'\" ';
            $btnEditar .= ' sueldo =\"'.$fila["sueldoFijo"].'\" tipoPago =\"'.$fila["pago"].'\" ';
            $btnEditar .= 'idPlanilla = \"'.$fila["id"].'\" sueldoD =\"'.$fila["sueldoD"].'\" ';
            $btnEditar .= ' vacacion =\"'.$fila["vacacion"].'\" aguinaldo =\"'.$fila["aguinaldo"].'\" ';
            $btnEditar .= ' afpEmV =\"'.$fila["afpEmV"].'\" afpEmC =\"'.$fila["afpEmC"].'\" ';
            $btnEditar .= ' isssE =\"'.$fila["isssE"].'\" renta =\"'.$fila["renta"].'\" ';
            $btnEditar .= ' otros =\"'.$fila["otros"].'\" totalDesM =\"'.$fila["totalDesM"].'\" ';
            $btnEditar .= 'totalP =\"'.$fila["totalP"].'\" diasT =\"'.$fila["diasT"].'\" class=\"ui btnEditar icon orange small button\" onclick=\"planilla(this)\"><i class=\"edit icon\"></i> Ver Detalles</button>';
            $btnVoucher = '<button id=\"'.$fila["idMaestro"].'\" nombre =\"'.$fila["nombre"].'\" sueldoD =\"'.$fila["totalP"].'\" tipoPago =\"'.$fila["pago"].'\" class=\"ui  icon green small button\" onclick=\"voucher(this)\"><i class=\"print icon\"></i> Imprimir </button>';

            $acciones = ', "Acciones": "'.$btnEditar.' '.$btnVoucher.'"';

            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function actualizarDatosPlanilla(){
       

        $query = "update planilla set diasT = ".$this->objeto->getDiasT().",
        vacacion = ".$this->objeto->getVacacion().",
        afpEmV = ".$this->objeto->getAfpVejez().",
        afpEmC = ".$this->objeto->getAfpComision().",
        isssE = ".$this->objeto->getIsss().",
        renta = ".$this->objeto->getRenta().",
        otros = ".$this->objeto->getOtros().",
        aguinaldo = ".$this->objeto->getAguinaldo().",
        sueldoD = ".$this->objeto->getSueldoD().",
        totalDesM = ".$this->objeto->getTotalDes().",
        totalP = ".$this->objeto->getTotalP()."
         where id =".$this->objeto->getIdPlanilla();

        $resultado = $this->con->ejecutar($query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }

    }

    public function sueldoDevengado ($mes=0 , $anio=0, $id=0){

    $_query="select format(sum(totalP),2) as sueldo from planilla
     where idMaestro='".$id."' and mes='".$mes."' and anio ='".$anio."' ";
       
    $resultado=$this->con->ejecutar($_query)->fetch_assoc();
    return $resultado['sueldo'];

    }



    public function descRenta ($mes=0 , $anio=0, $id=0){

        $_query="select format(sum(renta),2) as sueldo from planilla
         where idMaestro='".$id."' and mes='".$mes."' and anio ='".$anio."' ";
           
        $resultado=$this->con->ejecutar($_query)->fetch_assoc();
        return $resultado['sueldo'];
    
        }


        public function otrosD ($mes=0 , $anio=0, $id=0){

            $_query="select format(sum(otros),2) as sueldo from planilla
             where idMaestro='".$id."' and mes='".$mes."' and anio ='".$anio."' ";
               
            $resultado=$this->con->ejecutar($_query)->fetch_assoc();
            return $resultado['sueldo'];
        
        }



        public function nombreMaestro ($id=0){

            $_query="select concat (nombre,' ', apellido) as nombre from maestros
             where idMaestro=".$id;
               
            $resultado=$this->con->ejecutar($_query)->fetch_assoc();
            return $resultado['nombre'];
        
        }


         public function direccion ($id=0){

            $_query="select direccionResidencia as direccion from maestros
             where idMaestro=".$id;
               
            $resultado=$this->con->ejecutar($_query)->fetch_assoc();
            return $resultado['direccion'];
        
        }


        public function nit ($id=0){

            $_query="select nit as nit from maestros
             where idMaestro=".$id;
               
            $resultado=$this->con->ejecutar($_query)->fetch_assoc();
            return $resultado['nit'];
        
        }


        public function ISSS ($mes=0 , $anio=0, $id=0){

            $_query="select format(sum(isssE),2) as sueldo from planilla
             where idMaestro='".$id."' and mes='".$mes."' and anio ='".$anio."' ";
               
            $resultado=$this->con->ejecutar($_query)->fetch_assoc();
            return $resultado['sueldo'];
        
        }


        public function afp ($mes=0 , $anio=0, $id=0){

            $_query="select format(sum(afpEmC) + sum(afpEmV),2) as sueldo from planilla
             where idMaestro='".$id."' and mes='".$mes."' and anio ='".$anio."' ";
               
            $resultado=$this->con->ejecutar($_query)->fetch_assoc();
            return $resultado['sueldo'];
        
        }

        public function eliminarDocente (){

            $_query="update maestros set idEliminado = 2, razonBaja = '".$this->objeto->getHabilidades()."',
            fechaBaja = curdate()
            where idMaestro = ".$this->objeto->getId();
               
            $resultado = $this->con->ejecutar($_query);

            if($resultado) {
                return 1;
            } else {
                return 0;
            }
           
        
        }


        public function eliminarUser() {
            $_query = "update usuario set idEliminado=2 where nombre = '".$this->objeto->getNombre()."' and
            apellido = '".$this->objeto->getApellido()."'";
    
            $resultado = $this->con->ejecutar($_query);
    
            if($resultado) {
                return 1;
            } else {
                return 0;
            }
        }

        


}


?>