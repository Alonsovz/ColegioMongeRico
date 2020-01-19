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


        $anio= "(select anio from anio)";

        $resultado2 = $this->con->ejecutar($anio);

        $fila1 = $resultado2->fetch_assoc();
        $anioAc = $fila1['anio'];

        $_query = "insert into pagosAlumnos values(".$corr.",
        '000','','','','','','','','','','','','','','','','','','','','','','',
        '".$anioAc."',1);";

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



    public function guardarTalonarioNe() {


        $corr= "(select max(idAlumno) as id from fichaAlumno)";

        $resultado1 = $this->con->ejecutar($corr);

        $fila = $resultado1->fetch_assoc();
        $idExp = $fila['id'];


        $_query = "update pagosAlumnos set talonario='".$this->objeto->getTalonario()."' where idAlumno=".$idExp;

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherE() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color', pagoEnero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherF() {
        $color="<i class=\'search icon\' style=\'font-size:30px; color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' , pagoFebrero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherM() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color' , pagoMarzo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherA() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color' , pagoAbril = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherMa() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color' , pagoMayo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherJu() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color' , pagoJunio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherJul() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color' , pagoJulio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherAgo() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color' , pagoAgosto = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherSep() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' , pagoSep = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherOc() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color' , pagoOctubre = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function pendienteVoucherNov() {
        $color="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>";

        
        $_query = "update pagosAlumnos set nov='$color' , pagoNov = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoEn() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color', pagoEnero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoFe() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' , pagoFebrero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMar() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color' , pagoMarzo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoA() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color' , pagoAbril = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMa() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color' , pagoMayo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJun() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color' , pagoJunio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJul() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color' , pagoJulio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAgo() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color' , pagoAgosto = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoSep() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' , pagoSep = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoOc() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color' , pagoOctubre = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoNov() {
        $color="<i class=\'close icon\' style=\'font-size:30px;\'></i>";

        
        $_query = "update pagosAlumnos set nov='$color' , pagoNov = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoEnA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color',
         pagoEnero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoFeA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' , pagoFebrero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMarA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color' , pagoMarzo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color' , pagoAbril = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMaA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color' , pagoMayo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJunA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color' , pagoJunio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJulA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color' , pagoJulio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAgoA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color' , pagoAgosto = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoSepA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' , pagoSep = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoOcA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color' , pagoOctubre = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoNovA() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>";

        
        $_query = "update pagosAlumnos set nov='$color' , pagoNov = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }




    public function guardarPagoEnAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set e='$color' , pagoEnero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function guardarPagoFeAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set f='$color' , pagoFebrero = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMarAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set m='$color', pagoMarzo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set a='$color', pagoAbril = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoMaAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set ma='$color', pagoMayo = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJunAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set ju='$color', pagoJunio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoJulAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set jul='$color', pagoJulio = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoAgoAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set ago='$color', pagoAgosto = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoSepAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set sep='$color' , pagoSep = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoOcAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set oc='$color', pagoOctubre = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function guardarPagoNovAt() {
        $color="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>";

        
        $_query = "update pagosAlumnos set nov='$color', pagoNov = '".$this->objeto->getFecha()."' where idAlumno=".$this->objeto->getIdAlumno();

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



    public function reportesPagoCuotasAlumno() {
        $query = "select p.talonario as talonario,p.*, f.nombre as nombre,
        DATE_FORMAT(p.pagoEnero, '%d/%m/%Y') as pagoEnero,
        DATE_FORMAT(p.pagoFebrero, '%d/%m/%Y') as pagoFebrero,
        DATE_FORMAT(p.pagoMarzo, '%d/%m/%Y') as pagoMarzo,
        DATE_FORMAT(p.pagoAbril, '%d/%m/%Y') as pagoAbril,
        DATE_FORMAT(p.pagoMayo, '%d/%m/%Y') as pagoMayo,
        DATE_FORMAT(p.pagoJunio, '%d/%m/%Y') as pagoJunio,
        DATE_FORMAT(p.pagoJulio, '%d/%m/%Y') as pagoJulio,
        DATE_FORMAT(p.pagoAgosto, '%d/%m/%Y') as pagoAgosto,
        DATE_FORMAT(p.pagoSep, '%d/%m/%Y') as pagoSep,
        DATE_FORMAT(p.pagoOctubre, '%d/%m/%Y') as pagoOctubre,
        DATE_FORMAT(p.pagoNov, '%d/%m/%Y') as pagoNov

        from pagosAlumnos p
        inner join fichaAlumno f on f.idAlumno=p.idAlumno
        where f.idAlumno=".$this->objeto->getIdAlumno();

        $resultado = $this->con->ejecutar($query);

        return $resultado;
    }




}


?>