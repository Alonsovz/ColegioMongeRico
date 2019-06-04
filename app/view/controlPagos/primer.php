
<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");
  $listado = $mysqli -> query ("select p.talonario as talonario,p.*, f.nombre as nombre from pagosAlumnos p
  inner join fichaAlumno f on f.idAlumno=p.idAlumno
  where f.grado=1 and p.anio = year(CURRENT_DATE()) and p.estado=1 order by f.nombre asc");
 ?>
 <head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 </head>
 <body>
<div id="app">
        <div class="ui grid">
            <div class="row">
                <div class="titulo">
                        <a href="?1=PagosController&2=prekinder" class="ui blue button" id="prekinder">Prekinder</a>
                        <a href="?1=PagosController&2=kinder" class="ui teal button" id="kinder">Kinder</a>
                        <a href="?1=PagosController&2=preparatoria" class="ui green button" id="prepa">Preparatoria</a>
                        <a href="?1=PagosController&2=primerGrado" class="ui red button" id="primer">1er Grado</a>
                        <a href="?1=PagosController&2=segundoGrado" class="ui orange button" id="segundo">2do Grado</a>
                        <a href="?1=PagosController&2=tercerGrado" class="ui yellow button" id="tercer">3er Grado</a>
                        <a href="?1=PagosController&2=cuartoGrado" class="ui purple button" id="cuarto">4to Grado</a>
                        <a href="?1=PagosController&2=quintoGrado" class="ui violet button" id="quinto">5to Grado</a>
                        <a href="?1=PagosController&2=sextoGrado" class="ui brown button" id="sexto">6to Grado</a>
                        <a href="?1=PagosController&2=septimoGrado" class="ui black button" id="septimo">7mo Grado</a>
                        <a href="?1=PagosController&2=octavoGrado" class="ui olive button" id="octavo">8vo Grado</a>
                        <a href="?1=PagosController&2=novenoGrado" class="ui gray button" id="noveno">9no Grado</a>
                        <br><br><br>
                        <font color="#D93C2F" size="6px">
                        <i class="file icon"></i><i class="dollar icon"></i>
                        Control de pagos 1er Grado</font>
                        <font color="#210B61" size="20px"> .</font>
                </div>
            </div>
        </div>   
        <br><br>
        <table class="ui selectable very compact celled table" style="width:100%; margin:auto; text-align:center;">
            <thead>
                <tr>
                    <th style="background-color: #EB5065; color:white;">Nombre del Alumno/a</th>
                    <th style="background-color: #EB5065; color:white;">Talonario</th>
                    <th style="background-color: #EB5065; color:white;">Enero</th>
                    <th style="background-color: #EB5065; color:white;">Febrero</th>
                    <th style="background-color: #EB5065; color:white;">Marzo</th>
                    <th style="background-color: #EB5065; color:white;">Abril</th>
                    <th style="background-color: #EB5065; color:white;">Mayo</th>
                    <th style="background-color: #EB5065; color:white;">Junio</th>
                    <th style="background-color: #EB5065; color:white;">Julio</th>
                    <th style="background-color: #EB5065; color:white;">Agosto</th>
                    <th style="background-color: #EB5065; color:white;">Septiembre</th>
                    <th style="background-color: #EB5065; color:white;">Octubre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    while ($valores = mysqli_fetch_array($listado)) {
                        echo '
                        <td>'.utf8_encode($valores["nombre"]).'</td>
                        <td>'.$valores["talonario"].'</td>
                        ';
                        if($valores["e"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["e"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrarE(this)" class="ui blue button">C'.$valores["e"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["e"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrarE(this)">'.$valores["e"].'</td>';
                        }
                        if($valores["f"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["f"].'"  nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["f"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["f"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["f"].'</td>';
                         }
                         if($valores["m"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["m"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["m"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'"  cuota="'.$valores["m"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["m"].'</td>';
                         }

                         if($valores["a"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["a"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["a"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["a"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["a"].'</td>';
                         }

                         if($valores["ma"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["ma"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ma"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["ma"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["ma"].'</td>';
                         }

                         if($valores["ju"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["ju"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ju"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["ju"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["ju"].'</td>';
                         }

                         if($valores["jul"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["jul"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["jul"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["jul"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["jul"].'</td>';
                         }

                         if($valores["ago"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["ago"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ago"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["ago"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["ago"].'</td>';
                         }

                         if($valores["sep"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["sep"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["sep"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["sep"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["sep"].'</td>';
                         }

                         if($valores["oc"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["oc"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["oc"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["oc"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["oc"].'</td>
                            </tr>
            ';
                         }

                    }
                ?>
                </tbody>
        </table>
                
<div class="ui tiny modal" id="cobroCuota">
<div class="header">
<a style="color: black; font-size:15px;" id="tituloM"></a>
</div>
<div class="content">
<button id="pagoNormal" class="ui black button"> <i class="close icon"></i> Pago Normal</button>
<button id="pagoAde" class="ui blue button"> <i class="window close outline icon"></i> Pago adelantado</button>
<button id="pagoAtra" class="ui red button"> <i class="window close outline icon"></i> Pago atrasado</button>
</div>
<div class="actions">
<button class="ui  teal deny button">
Cancelar
</button>
<button class="ui  blue button">
Cobrar
</button>
</button>
</div>
</div>
 </div>
 </body>
 <script>
    $(document).ready(function(){
    $("#primer").removeClass("ui red button");
    $("#primer").addClass("ui red basic button");
    });

    
 var cobrarE=(ele)=>{
       var idA= $(ele).attr("id");
       var nombre =$(ele).attr("nombre");
       var cu =  $(ele).attr("cuota");

       if(cu==""){
        $("#tituloM").text("Cobrar cuota del mes de enero al alumno/a: "+nombre);
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de enero al alumno/a: "+nombre);
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
       }else if(cu=="<i class='window close outilne icon' style='font-size:30px; color:blue;'></i>"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de enero al alumno/a: "+nombre);
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
       }else if(cu=="<i class='window close outilne icon' style='font-size:30px; color:red;'></i>"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de enero al alumno/a: "+nombre);
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
       }
      
     
       $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
     }
</script>

        

