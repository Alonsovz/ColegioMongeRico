
<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");
  $listado = $mysqli -> query ("select p.talonario as talonario,p.*, f.nombre as nombre from pagosAlumnos p
  inner join fichaAlumno f on f.idAlumno=p.idAlumno
  where f.grado=1 and p.anio = year(CURRENT_DATE()) and p.estado=1 order by f.nombre asc");
 ?>
 
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
                    <th style="background-color: #C41813; color:white;">Nombre del Alumno/a</th>
                    <th style="background-color: #C41813; color:white;">Talonario</th>
                    <th style="background-color: #C41813; color:white;">Enero</th>
                    <th style="background-color: #C41813; color:white;">Febrero</th>
                    <th style="background-color: #C41813; color:white;">Marzo</th>
                    <th style="background-color: #C41813; color:white;">Abril</th>
                    <th style="background-color: #C41813; color:white;">Mayo</th>
                    <th style="background-color: #C41813; color:white;">Junio</th>
                    <th style="background-color: #C41813; color:white;">Julio</th>
                    <th style="background-color: #C41813; color:white;">Agosto</th>
                    <th style="background-color: #C41813; color:white;">Septiembre</th>
                    <th style="background-color: #C41813; color:white;">Octubre</th>
                    <th style="background-color: #C41813; color:white;">Noviembre</th>
                </tr>
            </thead>
            <tbody>
               
                <?php
                    while ($valores = mysqli_fetch_array($listado)) {
                        echo '
                        <tr>
                        <td>'.utf8_encode($valores["nombre"]).'</td>';

                        if($valores["talonario"]=='000'){
                           echo '<td style="background-color:#EFFB59; color:black" id="'.$valores["idAlumno"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="talonario(this)">Definir</td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" actual="'.$valores["talonario"].'" nombre="'.utf8_encode($valores["nombre"]).'" onclick="talonario(this)">'.$valores["talonario"].'</td>
                           ';
                        }
                        
                        if($valores["e"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["e"].'" n="1" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["e"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["e"].'" n="1" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["e"].'</td>';
                        }
                        if($valores["f"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["f"].'" n="2"  nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["f"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["f"].'" n="2" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["f"].'</td>';
                         }
                         if($valores["m"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["m"].'" n="3" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["m"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'"  cuota="'.$valores["m"].'" n="3" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["m"].'</td>';
                         }

                         if($valores["a"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["a"].'" n="4" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["a"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["a"].'" n="4" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["a"].'</td>';
                         }

                         if($valores["ma"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["ma"].'" n="5" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ma"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["ma"].'"  n="5" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["ma"].'</td>';
                         }

                         if($valores["ju"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["ju"].'" n="6" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ju"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["ju"].'" n="6" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["ju"].'</td>';
                         }

                         if($valores["jul"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["jul"].'" n="7" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["jul"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["jul"].'" n="7" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["jul"].'</td>';
                         }

                         if($valores["ago"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["ago"].'" n="8" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["ago"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["ago"].'" n="8" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["ago"].'</td>';
                         }

                         if($valores["sep"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["sep"].'" n="9" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["sep"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["sep"].'" n="9" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["sep"].'</td>';
                         }

                         if($valores["oc"]==''){
                            echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["oc"].'" n="10" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["oc"].'</button></td>';
                         }else{
                            echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["oc"].'"  n="10" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["oc"].'</td>
                            </tr>';
                         }
                         if($valores["nov"]==''){
                           echo '<td><button  id="'.$valores["idAlumno"].'" cuota="'.$valores["nov"].'" n="11" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)" class="ui blue button">C'.$valores["nov"].'</button></td>';
                        }else{
                           echo '<td id="'.$valores["idAlumno"].'" cuota="'.$valores["nov"].'"  n="11" nombre="'.utf8_encode($valores["nombre"]).'" onclick="cobrar(this)">'.$valores["nov"].'</td>
                           </tr>';
                        }
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
<div class="content" style="margin:auto;">
<center>
<button id="pagoNormal" class="ui black button"> <i class="close icon"></i> Pago Normal</button>
<button id="pagoAde" class="ui blue button"> <i class="window close outline icon"></i> Pago adelantado</button>
<button id="pagoAtra" class="ui red button"> <i class="window close outline icon"></i> Pago atrasado</button>
<br><br>
<div class="ui divider"></div>
<button id="pendiente" class="ui green button"> <i class="search icon"></i> Pendiente de recibir</button>
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
    $(document).ready(function(){
    $("#primer").removeClass("ui red button");
    $("#primer").addClass("ui red basic button");
    });

    var talonario=(ele)=>{
       var idA= $(ele).attr("id");
       var nombre =$(ele).attr("nombre");
       var actual =$(ele).attr("actual");

       $("#idATa").val(idA);
       $("#nameA").text(nombre);
       $("#nTalonario").val(actual);

       $('#modalTalonario').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
    }
    
    
 
    var cobrar=(ele)=>{
       var idA= $(ele).attr("id");
       var nombre =$(ele).attr("nombre");
       $("#name").text(nombre);
       
       
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

        alertify.confirm("¿Pendiente de recibir voucher del cobro del alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=pendienteVoucher',
                data: {
                   idAl: idAl,
                   idC: idC,
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

        alertify.confirm("¿Desea guardar el cobro al alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarPagoNo',
                data: {
                   idAl: idAl,
                   idC: idC,
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

        alertify.confirm("¿Desea guardar el cobro de manera adelantada al alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarPagoAde',
                data: {
                   idAl: idAl,
                   idC: idC,
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

        alertify.confirm("¿Desea guardar el cobro de manera atrasada al alumno/a : "+$("#name").text()+ "?",
            function(){

        $.ajax({
                
                type: 'POST',
                url: '?1=PagosController&2=guardarPagoAtr',
                data: {
                   idAl: idAl,
                   idC: idC,
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



     $("#btnReporte").click(function(){
      var id = 1;
      var grado= '1er Grado';

      var d = new Date();
        var anio = d.getFullYear();

window.open('?1=PagosController&2=reportesPagoCuotas&id='+id+'&grado='+grado+'&anio='+anio,'_blank');
return false;
     });
   

</script>


        

