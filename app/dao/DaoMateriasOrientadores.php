<?php 

class DaoMateriasOrientadores extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new MateriasOrientadores();
    }


    public function datosGenerales()
    {
        $_query = "select d.*,u.nombre as nomO,u.apellido as apeO,s.nombre as nomOM,s.apellido as apeOM,a.nombre as nomOS,a.apellido as apeOS,
        r.nombre as nomOC,r.apellido as apeOC,i.nombre as nomOL,i.apellido as apeOL,o.nombre as nomOI,o.apellido as apeOI,f.nombre as nomOAR,f.apellido as apeOAR,
        c.nombre as nomOMO,c.apellido as apeOMO,w.nombre as nomOIN,w.apellido as apeOIN,x.nombre as nomOFIS,x.apellido as apeOFIS from datosGrados d
        inner join usuario u on u.codigoUsuario = d.orientador
        inner join usuario s on s.codigoUsuario = d.orientadorMate
        inner join usuario a on a.codigoUsuario = d.orientadorSoc
        inner join usuario r on r.codigoUsuario = d.orientadorCien
        inner join usuario i on i.codigoUsuario = d.orientadorLen
        inner join usuario o on o.codigoUsuario = d.orientadorIng
        inner join usuario f on f.codigoUsuario = d.orientadorArt
        inner join usuario c on c.codigoUsuario = d.orientadorMo
        inner join usuario w on w.codigoUsuario = d.orientadorInfo
        inner join usuario x on x.codigoUsuario = d.orientadorFis
        where d.idGrado=".$this->objeto->getIdGrado();

        

        $resultado = $this->con->ejecutar($_query);

        $resultado = $this->con->ejecutar($_query);

         $json = json_encode($resultado->fetch_assoc());
 
         return $json;
    }

    public function guardarDatos()
    {
        $_query = "update datosGrados set orientador='".$this->objeto->getOrientador()."',
         orientadorMate='".$this->objeto->getOrientadorMate()."',
         orientadorLen='".$this->objeto->getOrientadorLen()."',
         orientadorCien='".$this->objeto->getOrientadorCien()."',
         orientadorSoc='".$this->objeto->getOrientadorSoc()."',
         orientadorIng='".$this->objeto->getOrientadorIng()."',
         orientadorArt='".$this->objeto->getOrientadorArt()."',
         orientadorInfo='".$this->objeto->getOrientadorInfo()."',
         orientadorMo='".$this->objeto->getOrientadorMo()."',
         orientadorFis='".$this->objeto->getOrientadorFis()."'
        where idGrado = ".$this->objeto->getIdGrado();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    


}

?>