    
<?php
class Funciones extends ControladorBase {

    public function sueldosMensuales (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosMensuales = $mysqli -> query ("select format(sum(ma.sueldo),2) as sueldo from maestros ma
        inner join planilla pl on pl.idMaestro = ma.idMaestro
        where pl.mes = '".$mes."' and pl.anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosMensuales)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function sueldoDevengados (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(sueldoD),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function afpImv (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(afpEmV),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function afpCo (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(afpEmC),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function isss (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(isssE),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function otroR (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(otros),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }

    public function isr (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(renta),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function vacacion (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(vacacion),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function aguinaldo (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(aguinaldo),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."';");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo $sueldosMen;
    }


    public function retenciones (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(
          (sum(afpEmV) + sum(afpEmC) + sum(isssE) + sum(renta) + sum(otros))
          ,2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."' group by anio, mes;");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo "$".$sueldosMen;

        
    }


    public function pagos (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(sum(totalP),2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."' group by anio, mes;");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo "$".$sueldosMen;
    }


    public function gr (){
        $mes= $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];

        $mysqli = new mysqli("localhost","root","","colegioMongeRico");
        $sueldosDe = $mysqli -> query ("select format(
        (  sum(afpEmV) + sum(afpEmC) + sum(isssE) + sum(renta) + sum(otros) +
            sum(totalP) ) ,2) as sueldo from  planilla 
        where mes = '".$mes."' and anio = '".$anio."' group by anio, mes;");
        
        $sueldosMen = "";
        while ($sueldosM = mysqli_fetch_array($sueldosDe)) {
          $sueldosMen = $sueldosM["sueldo"];
        }

        echo "$".$sueldosMen;
    }




}



?>