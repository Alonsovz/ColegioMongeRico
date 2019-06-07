<?php 

class DaoPagos extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new Pagos();
    }


    public function registrarPagos() {
        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];

        $_query = "insert into pagosAlumnos values(".$corr.",'000','','','','','','','','','','',year(CURRENT_DATE()),1);";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarTalonario() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set talonario='".$this->objeto->getTalonario()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoEn() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoFe() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMar() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoA() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMa() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJun() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJul() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAgo() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoSep() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoOc() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoEnA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoFeA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMarA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMaA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJunA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJulA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAgoA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoSepA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoOcA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }



    public function guardarPagoEnAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoFeAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMarAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMaAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJunAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJulAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAgoAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoSepAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoOcAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function reportesPagoCuotas() {
        $query = "select p.talonario as talonario,p.*, f.nombre as nombre from pagosAlumnos p
        inner join fichaAlumno f on f.idAlumno=p.idAlumno
        where f.grado=".$this->objeto->getIdGrado()." and p.anio = year(CURRENT_DATE()) and p.estado=1 order by f.nombre asc";

        $resultado = $this->con->ejecutar($query);

        return $resultado;
    }




}


?>