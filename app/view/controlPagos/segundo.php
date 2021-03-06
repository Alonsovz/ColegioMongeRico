
<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");

  $anioC = $mysqli -> query ("select anio from anio");
  $fila1 = $anioC->fetch_assoc();
  
  $anio = $fila1['anio'];

  $listado = $mysqli -> query ("select p.talonario as talonario,p.*, f.nombre as nombre from pagosAlumnos p
  inner join fichaAlumno f on f.idAlumno=p.idAlumno
  where f.grado=2 and p.anio = '".$anio."' and p.estado=1   and f.idEliminado=1 order by f.nombre asc");
 ?>
<div id="app">
        <div class="ui grid">
            <div class="row">
                <div class="titulo">
                <a href="?1=PagosController&2=prekinder" class="ui compact blue button" id="prekinder">Prekinder</a>
                                <a href="?1=PagosController&2=kinder" class="ui compact teal button" id="kinder">Kinder</a>
                                <a href="?1=PagosController&2=preparatoria" class="ui compact green button" id="prepa">Preparatoria</a>
                                <a href="?1=PagosController&2=primerGrado" class="ui compact red button" id="primer">1er Grado</a>
                                <a href="?1=PagosController&2=segundoGrado" class="ui compact orange button" id="segundo">2do Grado</a>
                                <a href="?1=PagosController&2=tercerGrado" class="ui compact yellow button" id="tercer">3er Grado</a>
                                <a href="?1=PagosController&2=cuartoGrado" class="ui compact purple button" id="cuarto">4to Grado</a>
                                <a href="?1=PagosController&2=quintoGrado" class="ui compact violet button" id="quinto">5to Grado</a>
                                <a href="?1=PagosController&2=sextoGrado" class="ui compact brown button" id="sexto">6to Grado</a>
                                <a href="?1=PagosController&2=septimoGrado" class="ui compact black button" id="septimo">7mo Grado</a>
                                <a href="?1=PagosController&2=octavoGrado" class="ui compact olive button" id="octavo">8vo Grado</a>
                                <a href="?1=PagosController&2=novenoGrado" class="ui compact gray button" id="noveno">9no Grado</a>
                                   <br><br>
                        <font color="#F6960C" size="6px">
                        <i class="file icon"></i><i class="dollar icon"></i>
                        Control de pagos 2do Grado</font>
                        <font color="#210B61" size="20px"> .</font><br>
                        <button class="ui right floated black labeled icon button" id="btnReporte">
                        <i class="file icon"></i>
                        Ver Reporte
                    </button>
                </div>
            </div>
        </div>
        <br><br>
        <table class="ui selectable very compact celled table" style="width:100%; margin:auto; text-align:center;">
            <thead>
                <tr>
                    <th style="background-color: #F6960C; color:white;">Nombre del Alumno/a</th>
                    <th style="background-color: #F6960C; color:white;">Talonario</th>
                    <th style="background-color: #F6960C; color:white;">Enero</th>
                    <th style="background-color: #F6960C; color:white;">Febrero</th>
                    <th style="background-color: #F6960C; color:white;">Marzo</th>
                    <th style="background-color: #F6960C; color:white;">Abril</th>
                    <th style="background-color: #F6960C; color:white;">Mayo</th>
                    <th style="background-color: #F6960C; color:white;">Junio</th>
                    <th style="background-color: #F6960C; color:white;">Julio</th>
                    <th style="background-color: #F6960C; color:white;">Agosto</th>
                    <th style="background-color: #F6960C; color:white;">Septiembre</th>
                    <th style="background-color: #F6960C; color:white;">Octubre</th>
                    <th style="background-color: #F6960C; color:white;">Noviembre</th>
                    <th style="background-color: #F6960C; color:white;"><i class="file icon"></i></th>
                </tr>
            </thead>
            <tbody>
               
               <?php
                   while ($valores = mysqli_fetch_array($listado)) {
                       echo '
                       <tr>
                       <td>'.$valores["nombre"].'</td>';

                       if($valores["talonario"]=='000'){
                          echo '<td style="background-color:#EFFB59; color:black" id="'.$valores["idAlumno"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="talonario(this)">Definir</td>';
                       }else{
                          echo '<td id="'.$valores["idAlumno"].'" actual="'.$valores["talonario"].'" nombre="'.$valores["nombre"].'" onclick="talonario(this)">'.$valores["talonario"].'</td>
                          ';
                       }
                       
                       if($valores["e"]==''){
                          echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoEnero"].'" cuota="'.$valores["e"].'" n="1" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["e"].'</button></td>';
                       }else{
                          echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoEnero"].'" cuota="'.$valores["e"].'" n="1" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["e"].'</td>';
                       }
                       if($valores["f"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoFebrero"].'"  cuota="'.$valores["f"].'" n="2"  nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["f"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoFebrero"].'" cuota="'.$valores["f"].'" n="2" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["f"].'</td>';
                        }
                        if($valores["m"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoMarzo"].'" cuota="'.$valores["m"].'" n="3" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["m"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'"  fecha="'.$valores["pagoMarzo"].'" cuota="'.$valores["m"].'" n="3" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["m"].'</td>';
                        }

                        if($valores["a"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'"  fecha="'.$valores["pagoAbril"].'" cuota="'.$valores["a"].'" n="4" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["a"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoAbril"].'" cuota="'.$valores["a"].'" n="4" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["a"].'</td>';
                        }

                        if($valores["ma"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoMayo"].'" cuota="'.$valores["ma"].'" n="5" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ma"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoMayo"].'" cuota="'.$valores["ma"].'"  n="5" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["ma"].'</td>';
                        }

                        if($valores["ju"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoJunio"].'" cuota="'.$valores["ju"].'" n="6" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ju"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoJunio"].'" cuota="'.$valores["ju"].'" n="6" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["ju"].'</td>';
                        }

                        if($valores["jul"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoJulio"].'" cuota="'.$valores["jul"].'" n="7" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["jul"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoJulio"].'" cuota="'.$valores["jul"].'" n="7" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["jul"].'</td>';
                        }

                        if($valores["ago"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoAgosto"].'" cuota="'.$valores["ago"].'" n="8" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ago"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoAgosto"].'" cuota="'.$valores["ago"].'" n="8" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["ago"].'</td>';
                        }

                        if($valores["sep"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoSep"].'" cuota="'.$valores["sep"].'" n="9" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["sep"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoSep"].'" cuota="'.$valores["sep"].'" n="9" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["sep"].'</td>';
                        }

                        if($valores["oc"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoOctubre"].'" cuota="'.$valores["oc"].'" n="10" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["oc"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoOctubre"].'" cuota="'.$valores["oc"].'"  n="10" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["oc"].'</td>
                           </tr>';
                        }
                        if($valores["nov"]==''){
                          echo '<td><button  id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoNov"].'" cuota="'.$valores["nov"].'" n="11" nombre="'.$valores["nombre"].'" onclick="cobrar(this)" class="ui blue button">C'.$valores["nov"].'</button></td>';
                       }else{
                          echo '<td id="'.$valores["idAlumno"].'" fecha="'.$valores["pagoNov"].'" cuota="'.$valores["nov"].'"  n="11" nombre="'.$valores["nombre"].'" onclick="cobrar(this)">'.$valores["nov"].'</td>
                          </tr>';
                       }
                       echo '
                       <td><button id="'.$valores["idAlumno"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick ="verReporte(this)" class="ui compact icon green button"><i class="print icon"></i></button></td>
                       </tr>';
                   }
               ?>
               </tbody>
        </table>
</div>               
<div class="ui tiny modal" id="cobroCuota">
<div class="header">
<a style="color: black; font-size:17px;" id="tituloM"></a>
<br>
<a id="name" style="font-size:17px;"></a>
</div>
<div class="content" style="margin:auto;background-color:#DBDDDD">
<form class="ui form">
<div class="field">
<div class="fields">
<div class="four wide field"></div>
<div class="eight wide field">
    <label><i class="calendar icon"></i> Fecha de cobro </label>
    <input type="date" name="fecha" id="fecha">
    </div>
  </div>
  </div>
</form>
<br>
<center>
<button id="pagoNormal" class="ui black button"> <i class="close icon"></i> Pago Normal</button>
<button id="pagoAde" class="ui blue button"> <i class="window close outline icon"></i> Pago adelantado</button>
<button id="pagoAtra" class="ui red button"> <i class="window close outline icon"></i> Pago atrasado</button>

<br>
<div class="ui divider"></div>
<button id="pendiente" class="ui green button"> <i class="search icon">
</i> Pendiente de recibir</button>


<input type="hidden" id="idAlum" name="idAlum">
<input type="hidden" id="idCuota" name="idCuota">
</center>
</div>
<div class="actions">
<button class="ui  teal deny button">
Cancelar
</button>
</div>
</div>


<div class="ui tiny modal" id="modalTalonario">
   <div class="header">
   Definir número de talonario para el alumno/a:
   <br>
   <a id="nameA" style="font-size:17px;"></a>
   </div>
      <div class="content" style="margin:auto;">

      <input type="hidden" id="idATa" name="idATa">
         <form class="ui form">
            <div class="field">
               <div class="fields">
                  <div class="sixteen wide field">
                  <label style="font-size:20px;"><i class="address card icon"></i>N° de Talonario</label>
                  <input type="text" name="nTalonario" id="nTalonario">
                  </div>
               </div>
            </div>
         </form>
      </div>
   <div class="actions">
   <button class="ui  teal deny button">
   Cancelar
   </button>
   <button class="ui  blue button" id="guardarTalonario">
   Definir
   </button>
   </div>
</div>
 

 <script>
    var talonario=(ele)=>{
       var idA= $(ele).attr("id");
       var nombre =$(ele).attr("nombre");
       var actual =$(ele).attr("actual");

       $("#idATa").val(idA);
       $("#nameA").text(nombre);
       $("#nTalonario").val(actual);

       $('#modalTalonario').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
    }
    

    
    var verReporte=(ele)=>{
        var id = $(ele).attr("id");
      var alumno = $(ele).attr("nombre");

 var grado= '2do Grado';

      var d = new Date();
        var anio = d.getFullYear();

         window.open('?1=PagosController&2=reportePagoCuotasAlumno&id='+id+'&grado='+grado+'&anio='+anio+'&alumno='+alumno,'_blank');
            return false;
     }
    
    var cobrar=(ele)=>{
       var idA= $(ele).attr("id");
       var nombre =$(ele).attr("nombre");
       $("#name").text(nombre);
       
       $("#fecha").val($(ele).attr("fecha"));
       
       var cu =  $(ele).attr("cuota");
       var nCuo =  $(ele).attr("n");

       $("#idAlum").val(idA);
       $("#idCuota").val(nCuo);

       if(cu=="" && nCuo=="1"){
        $("#tituloM").text("Cobrar cuota del mes de enero al alumno/a:");
        
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="1"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de enero al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="1"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de enero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="1"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de enero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="1"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de enero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }



       if(cu=="" && nCuo=="2"){
        $("#tituloM").text("Cobrar cuota del mes de febrero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="2"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de febrero al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="2"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de febrero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="2"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de febrero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="2"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de febrero al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }


       if(cu=="" && nCuo=="3"){
        $("#tituloM").text("Cobrar cuota del mes de marzo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="3"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de marzo al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="3"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de marzo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="3"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de marzo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="3"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de marzo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       if(cu=="" && nCuo=="4"){
        $("#tituloM").text("Cobrar cuota del mes de abril al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="4"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de abril al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="4"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de abril al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="4"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de abril al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="4"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de abril al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       if(cu=="" && nCuo=="5"){
        $("#tituloM").text("Cobrar cuota del mes de mayo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="5"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de mayo al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="4"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de mayo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="5"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de mayo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="5"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de mayo al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       if(cu=="" && nCuo=="6"){
        $("#tituloM").text("Cobrar cuota del mes de junio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="6"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de junio al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="6"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de junio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="6"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de junio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="6"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de junio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       if(cu=="" && nCuo=="7"){
        $("#tituloM").text("Cobrar cuota del mes de julio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="7"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de julio al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="7"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de julio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="7"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de julio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="7"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de julio al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }


       if(cu=="" && nCuo=="8"){
        $("#tituloM").text("Cobrar cuota del mes de agosto al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="8"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de agosto al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="8"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de agosto al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="8"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de agosto al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="8"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de agosto al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }


       if(cu=="" && nCuo=="9"){
        $("#tituloM").text("Cobrar cuota del mes de septiembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="9"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de septiembre al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="9"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de septiembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="9"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de septiembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="9"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de septiembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       if(cu=="" && nCuo=="10"){
        $("#tituloM").text("Cobrar cuota del mes de octubre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="10"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de octubre al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="10"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de octubre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="10"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de octubre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="10"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de octubre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }


       if(cu=="" && nCuo=="11"){
        $("#tituloM").text("Cobrar cuota del mes de noviembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class='close icon' style='font-size:30px;'></i>" && nCuo=="11"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de noviembre al alumno/a: ");
        $("#pagoNormal").hide();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:blue;\'></i>" && nCuo=="11"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de noviembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").hide();
        $("#pagoAtra").show();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }else if(cu=="<i class=\'window close outline icon\' style=\'font-size:30px;color:red;\'></i>" && nCuo=="11"){
        $("#tituloM").text("Modificar cobro de la cuota del mes de noviembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }

       else if(cu=="<i class=\'search icon\' style=\'font-size:30px;color:orange;\'></i>" && nCuo=="11"){
        $("#tituloM").text("Asignar tipo de cobro de la cuota del mes de noviembre al alumno/a: ");
        $("#pagoNormal").show();
        $("#pagoAde").show();
        $("#pagoAtra").show();
        $("#pendiente").hide();
        $('#cobroCuota').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
       }
      
     }
</script>
<script>
 $("#pendiente").click(function(){
        var idAl = $("#idAlum").val();
        var idC = $("#idCuota").val();
        var fecha = $("#fecha").val();

        alertify.confirm("¿Pendiente de recibir voucher del cobro del alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=pendienteVoucher',
                data: {
                   idAl: idAl,
                   idC: idC,
                   fecha: fecha,
                },
                success: function(r) {
                    if(r == 1) {
                        $('#cobroCuota').modal('hide');
                        swal({
                            title: 'Realizado',
                            text: 'Guardado con éxito',
                            type: 'success',
                            showConfirmButton: true,
                              

                        }).then((result) => {
                            location.reload();
                        }); 
                        
                    } 
                }
            });

         },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
     });
</script>
<script>
 $("#pagoNormal").click(function(){
        var idAl = $("#idAlum").val();
        var idC = $("#idCuota").val();
        var fecha = $("#fecha").val();
        alertify.confirm("¿Desea guardar el cobro al alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarPagoNo',
                data: {
                   idAl: idAl,
                   idC: idC,
                   fecha: fecha,
                },
                success: function(r) {
                    if(r == 1) {
                        $('#cobroCuota').modal('hide');
                        swal({
                            title: 'Cobro realizado',
                            text: 'Guardado con éxito',
                            type: 'success',
                            showConfirmButton: true,
                              

                        }).then((result) => {
                            location.reload();
                        }); 
                        
                    } 
                }
            });

         },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
     });
</script>



<script>
 $("#pagoAde").click(function(){
        var idAl = $("#idAlum").val();
        var idC = $("#idCuota").val();
        var fecha = $("#fecha").val();
        alertify.confirm("¿Desea guardar el cobro de manera adelantada al alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarPagoAde',
                data: {
                   idAl: idAl,
                   idC: idC,
                   fecha: fecha,
                },
                success: function(r) {
                    if(r == 1) {
                        $('#cobroCuota').modal('hide');
                        swal({
                            title: 'Cobro realizado',
                            text: 'Guardado con éxito',
                            type: 'success',
                            showConfirmButton: true,
                              

                        }).then((result) => {
                            location.reload();
                        }); 
                        
                    } 
                }
            });

         },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
     });
</script>


<script>
 $("#pagoAtra").click(function(){
        var idAl = $("#idAlum").val();
        var idC = $("#idCuota").val();
        var fecha = $("#fecha").val();
        alertify.confirm("¿Desea guardar el cobro de manera atrasada al alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarPagoAtr',
                data: {
                   idAl: idAl,
                   idC: idC,
                   fecha:fecha,
                },
                success: function(r) {
                    if(r == 1) {
                        $('#cobroCuota').modal('hide');
                        swal({
                            title: 'Cobro realizado',
                            text: 'Guardado con éxito',
                            type: 'success',
                            showConfirmButton: true,
                              

                        }).then((result) => {
                            location.reload();
                        }); 
                        
                    } 
                }
            });

         },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
     });
</script>


<script>
 $("#guardarTalonario").click(function(){
        var idAl = $("#idATa").val();
        var nT = $("#nTalonario").val();

        alertify.confirm("¿Desea guardar el número de talonario para "+$("#nameA").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarTalonario',
                data: {
                   idAl: idAl,
                   nT: nT,
                },
                success: function(r) {
                    if(r == 1) {
                        $('#modalTalonario').modal('hide');
                        swal({
                            title: 'Guardado!',
                            text: 'N° talonario definido correctamente',
                            type: 'success',
                            showConfirmButton: true,
                              

                        }).then((result) => {
                            location.reload();
                        }); 
                        
                    } 
                }
            });

         },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
     });
</script>


        


 <script>
    $(document).ready(function(){
    $("#segundo").removeClass("ui orange button");
    $("#segundo").addClass("ui orange basic button");
    });

    $("#btnReporte").click(function(){
      var id = 2;
      var grado= '2do Grado';

      var d = new Date();
        var anio = d.getFullYear();

window.open('?1=PagosController&2=reportesPagoCuotas&id='+id+'&grado='+grado+'&anio='+anio,'_blank');
return false;
     });
</script>

