<br>
<div id="app">
        <div class="ui grid">
            <div class="row">
                   
                    <font color="#08088A" size="6px">
                    <i class="edit outline icon"></i><i class="book icon"></i>
                    Notas de Lenguaje de 6to grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
            <div class="ui divider"></div>

<form class="ui form" style="font-size:16px;background-color:#DBDDDD;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);">
    <div class="field" style="margin-left: 10px;margin-right: 10px">
            <div class="fields">

                    <div class="six wide field" id="sePro" style="margin-top: 10px;">
                            <label> Promedios: </label>
                            <select name="promedios" id="promedios" class="ui dropdown">
                            <option value="ninguno" set selected>Seleccione</option>
                            <option value="1">Mensuales</option>
                            <option value="2">Trimestrales</option>
                            <option value="3">Generales</option>                                        
                            </select>
                    </div>

                    <div class="six wide field" id="mesCo" style="display:none;margin-top: 10px;">
                    <label>Mes a ver: </label>
                    <select name="mesColectores" id="mesColectores" class="ui dropdown">
                        <option value="ninguno" set selected>Seleccione </option>
                        <option value="Febrero" >Febrero </option>
                        <option value="Marzo">Marzo </option>
                        <option value="Abril" >Abril </option>
                        <option value="Mayo" >Mayo </option>
                        <option value="Junio">Junio </option>
                        <option value="Julio" >Julio </option>
                        <option value="Agosto">Agosto </option>
                        <option value="Septiembre">Septiembre </option>
                        <option value="Octubre">Octubre </option>
                        <option value="Noviembre">Noviembre </option>
                    </select>
                    </div>
            </div>
    </div>
    <br>
</form>

<br><br>
<div id="notasMensuales" style="display:none;background-color:#D8D8D8;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
<hr>



<h2><i class="file icon"></i>Notas de Lenguaje del mes de <a class="mesVisto" style="color:green"></a></h2>
<div class="ui divider"></div>
<div class="row">
<div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
    <table id="dtNotasLenguaje" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
        <thead>
            <tr>
            
                <th style="background-color: #FA7818; color:white;">N°</th>
                <th style="background-color: #FA7818; color:white;">Alumno</th>
                <th style="background-color: #FA7818; color:white;">Nota 1</th>
                <th style="background-color: #FA7818; color:white;">Nota 2</th>
                <th style="background-color: #FA7818; color:white;">Nota 3</th>
                <th style="background-color: #FA7818; color:white;">Promedio</th>
                <th style="background-color: #FA7818; color:white;">Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
</div>



<div id="trimestralesL" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
<hr>


<h2><i class="file icon"></i>Notas Trimestrales  de Lenguaje</h2>
<div class="ui divider"></div>
<div class="row">
<div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
    <table id="dtTrimestralesLenguaje" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
        <thead>
        
        
        
            <tr>
            <th style="background-color: #007CAD; color:white;text-align:center" rowspan="2">N°</th>
            <th style="background-color: #007CAD; color:white;text-align:center" rowspan="2">Alumn@</th>
                <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">1er Trimestre</th>
                <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">2do Trimestre</th>
                <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">3er Trimestre</th>
             
                <th style="background-color: #1D0280; color:white;text-align:center" rowspan="2">Prom F</th>
            </tr>

            <tr > 
            <th style="text-align:center;background-color: #8490B6;color:white;">F</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">M</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">A</th> 
            <th style="text-align:center;background-color: #93C9FF;color:black;">Prom.</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">M</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">J</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">J</th> 
            <th style="text-align:center;background-color: #93C9FF;color:black;">Prom.</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">A</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">S</th> 
            <th style="text-align:center;background-color: #8490B6;color:white;">O</th> 
            <th style="text-align:center;background-color: #93C9FF;color:black;">Prom.</th> 
           
              </tr>
        </thead>
        <tbody style="text-align:center">
        </tbody>
    </table>
</div>
</div>
</div>



</div>


<div id="modalNotas" class="ui tiny modal">
<div class="header" style="color:white; background-color:#009C95">
Notas  de <a id="materia" style="color:white"></a> del alumno :
<br> <a id="alName" style="color:yellow"></a>
<br> Del mes de : <a id="mesModal" style="color:#04F8FB"></a>
</div>
<div class="content" style="background-color:#DBDDDD ">
<form class="ui form">
<div class="field">
    <div class="fields">
    <div class="six wide field">
    <input type="hidden" name="idAlumnoNota" id="idAlumnoNota">
            <label>Nota 1</label>
            <input type="text" name="nota1" id="nota1" placeholder="Nota 1">
    </div>
    <div class="six wide field">
            <label>Nota 2</label>
            <input type="text" name="nota2" id="nota2" placeholder="Nota 2">
    </div>
    <div class="six wide field">
            <label>Nota 3</label>
            <input type="text" name="nota3" id="nota3" placeholder="Nota 3">
    </div>
    </div>
</div>
</form>
</div>
<div class="actions">
<button class="ui black deny button">Cancelar</button>
<button class="ui teal button" id="guardar">Guardar</button>
</div>
</div>

<script src="./res/tablas/tablaNotasLenguaje.js"></script>
<script src="./res/tablas/tablaNotasTrimestralesLenguaje.js"></script>


<script>

var notasLenguaje=(ele)=>{
var mesR = $("#mesColectores option:selected").text();
var d = new Date();
var anio = d.getFullYear();

var id = $(ele).attr("id");
$("#materia").text("Lenguaje");

var nota1 = $(ele).attr("nota1");
var nota2 = $(ele).attr("nota2");
var nota3 = $(ele).attr("nota3");

$("#nota1").val(nota1);
$("#nota2").val(nota2);
$("#nota3").val(nota3);

$("#idAlumnoNota").val(id);
$("#alName").text($(ele).attr("nombre"));
$("#mesModal").text(mesR + '' +anio);
$('#modalNotas').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
}


$(document).ready(function(){
$("#promedios").change(function(){
    var vista = $(this).val();

    if(vista == 1){
            $("#mesCo").show(1000);
            $("#mesColectores").dropdown('set selected', 'ninguno');
            $("#trimestralesL").hide();
    }else if(vista == 2){
            $("#mesCo").hide();
            $("#notasMensuales").hide();
            var d = new Date();
            var anio = d.getFullYear();
            var grado = "6";


            filtrarTablaTrimestreLenguaje(anio,grado);
            var table = $('#dtTrimestralesLenguaje').DataTable();
            table.destroy();

            $("#trimestralesL").fadeIn(1000);
            $("#dtTrimestralesLenguaje").fadeIn(1000);
    }
});



$("#mesColectores").change(function(){
    var materia = 1;
    var d = new Date();
    var anio = d.getFullYear();

    var mesR = $("#mesColectores option:selected").text();

    $(".mesVisto").text(mesR + '' +anio);

    var acc = $("#mesColectores").val();
    var grado = "6";

if(materia == 1){
    if(acc == 'ninguno'){

}else{
    $("#notasMensuales").hide();
    var table = $('#dtNotasLenguaje').DataTable();
    table.destroy();
  

    fitrarTablaLenguaje(acc,anio,grado);

    $("#notasMensuales").fadeIn(1000);
    $("#dtNotasLenguaje").fadeIn(1000);
}

}
});




$("#guardar").click(function(){
var id= $("#idAlumnoNota").val();
var nota1 = $("#nota1").val();
var nota2 = $("#nota2").val();
var nota3 = $("#nota3").val();
var mes = $("#mesColectores").val();
var d = new Date();
var anio = d.getFullYear();
var materia = $("#materia").text();

alertify.confirm("¿Desea guardar los datos?",
function(){    


$.ajax({
   
   type: 'POST',
   url: '?1=LenguajeController&2=guardarNotas',
   data: {
       id:id,
       nota1 : nota1,
       nota2 : nota2,
       nota3 : nota3,
       mes : mes,
       anio: anio,
   },
   success: function(r) {
       if(r == 1) {
          
           $('#modalNotas').modal('hide');
           Swal.fire({
            title: '<h2 style="color:#0020FF;">Notas de Lenguaje modificadas</h2>',
            text: 'Alumno/a : '+$("#alName").text(),
            imageUrl: './res/img/book.gif',
            imageWidth: 325,
            imageHeight: 300,
            allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        backdrop: 'rgb(37, 37, 37)'
            });
            $('#dtNotasLenguaje').DataTable().ajax.reload();
       }
   }
});


},
function(){
    //$("#modalCalendar").modal('toggle');
    alertify.error('Cancelado');
    
}); 

});


});



</script>

