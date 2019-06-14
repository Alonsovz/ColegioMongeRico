
<div id="app">
        <div class="ui grid">
            <div class="row">
                          
            <div class="titulo">
                    <a href="?1=GestionGradosController&2=prekinder" class="ui blue button" id="prekinder">Prekinder</a>
                    <a href="?1=GestionGradosController&2=kinder" class="ui teal button" id="kinder">Kinder</a>
                    <a href="?1=GestionGradosController&2=preparatoria" class="ui green button" id="prepa">Preparatoria</a>
                    <a href="?1=GestionGradosController&2=primerGrado" class="ui red button" id="primer">1er Grado</a>
                    <a href="?1=GestionGradosController&2=segundoGrado" class="ui orange button" id="segundo">2do Grado</a>
                    <a href="?1=GestionGradosController&2=tercerGrado" class="ui yellow button" id="tercer">3er Grado</a>
                    <a href="?1=GestionGradosController&2=cuartoGrado" class="ui purple button" id="cuarto">4to Grado</a>
                    <a href="?1=GestionGradosController&2=quintoGrado" class="ui violet button" id="quinto">5to Grado</a>
                    <a href="?1=GestionGradosController&2=sextoGrado" class="ui brown button" id="sexto">6to Grado</a>
                    <a href="?1=GestionGradosController&2=septimoGrado" class="ui black button" id="septimo">7mo Grado</a>
                    <a href="?1=GestionGradosController&2=octavoGrado" class="ui olive button" id="octavo">8vo Grado</a>
                    <a href="?1=GestionGradosController&2=novenoGrado" class="ui gray button" id="noveno">9no Grado</a>
                     <br><br>
                    <font color="#DBA206" size="6px">
                    <i class="user icon"></i><i class="book icon"></i>
                    Gestión de 3er Grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
</div>
            <br>
            <form class="ui form" style="font-size:16px;">
                <div class="field">
                        <div class="fields">
                                <div class="four wide field">
                                        <label> Seleccione la acción a realizar: </label>
                                        <select name="accion" id="accion" class="ui dropdown">
                                        <option value="1">Ver nómina general de alumnos/as</option>
                                        <option value="2">Ver notas por materias</option>
                                        <option value="3">Ver promedios</option>
                                        </select>
                                </div>

                                <div class="four wide field" id="seMat" style="display:none;">
                                        <label> Materias: </label>
                                        <select name="materias" id="materias" class="ui dropdown">
                                        <option value="seleccione" set selected>Seleccione una opción</option>
                                        <option value="1">Lenguaje</option>
                                        <option value="2">Matemáticas</option>
                                        <option value="3">Ciencias</option>
                                        <option value="4">Sociales</option>
                                        <option value="5">Íngles</option>
                                        <option value="6">Artística</option>
                                        <option value="7">Educación en la Fe</option>
                                        <option value="8">Moral</option>
                                        <option value="9">Computación</option>
                                        <option value="10">Conducta</option>
                                        
                                        </select>
                                </div>

                                <div class="four wide field" id="sePro" style="display:none;">
                                        <label> Promedios: </label>
                                        <select name="promedios" id="promedios" class="ui dropdown">
                                        <option value="seleccione" set selected>Seleccione una opción</option>
                                        <option value="1">Colectores de Notas</option>
                                        <option value="2">General de Mes</option>
                                        <option value="3">Promedios Mensuales</option>
                                        <option value="4">Cuadro de aprendizajes</option> 
                                        <option value="5">Cuadro de promedios</option>                                        
                                        </select>
                                </div>
                        </div>
                </div>
            </form>

            <div id="nominaGe">
            <h2><i class="file icon"></i>Nómina general</h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNomina" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #DBA206; color:white;">N°</th>
                            <th style="background-color: #DBA206; color:white;">NIE</th>
                            <th style="background-color: #DBA206; color:white;">Nombre</th>
                            <th style="background-color: #DBA206; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
            </div>

            <div id="notasMaterialen" style="display:none">
            <h2><i class="file icon"></i>Notas de Lenguaje</h2>
            <table  class="ui selectable very compact celled table" style="width:100%; margin:auto;text-align:center; border: 1px solid black;">
            <thead>
                    <tr>
                    <th rowspan="2" style="background-color:#EAB352;" >N° </th>
                    <th rowspan="2" style="width:25%;background-color:#EAB352;">Alumn@</th>
                    <th colspan="4" style="background-color:#181156;" ><form class="ui form"> <input type="text" id="mes1" name="mes1" placeholder="MES"></form></th>
                    <th colspan="4" style="background-color:#CDC729;"  ><form class="ui form"> <input type="text" id="mes1" name="mes1" placeholder="MES"></form></th>
                    <th colspan="4" style="background-color:#E12D53;" ><form class="ui form"> <input type="text" id="mes1" name="mes1" placeholder="MES"></form></th>
                    <th rowspan="2" style="background-color:#30AF0B; color:white;"  >PROM T</th>
                    </tr>
                    <tr>
                    <th  style="background-color:#818DF1;">1</th>
                    <th style="background-color:#818DF1;"  >2</th>
                    <th style="background-color:#818DF1;"  >3</th>
                    <th style="background-color:#095AA7; color:white;"  >PROM</th>

                    <th  style="background-color:#F5EF58;">1</th>
                    <th  style="background-color:#F5EF58;">2</th>
                    <th  style="background-color:#F5EF58;">3</th>
                    <th style="background-color:#ADA713; color:white;">PROM</th>


                    <th style="background-color:#F67F98;">1</th>
                    <th style="background-color:#F67F98;">2</th>
                    <th style="background-color:#F67F98;">3</th>
                    <th style="background-color:#9F0223;color:white;">PROM</th>
                    </tr>

                    
  </thead>
                    <tbody style="text-align:center; border: 1px solid black;">
                    <tr  style="border: 1px solid black;">
                    <td>1</td>
                    <td>Fabio Mejia</td>    
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>

                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>

                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>

                                <td>0</td>
                               
                                </tr>
                    </tbody>
                </table>
            </div>
 </div>
 <script src="./res/tablas/tablaAlumnos.js"></script>
 <script>

$(document).ready(function(){
    var idGrado=3;
    mostrarAlumnos(idGrado);
});

$(document).ready(function(){
    $("#tercer").removeClass("ui yellow button");
    $("#tercer").addClass("ui yellow basic button");
   
    });

$("#accion").change(function(){
var acc = $(this).val();

if(acc == 2){
 $("#sePro").hide();
 $("#nominaGe").hide();
 $("#notasMaterialen").hide(1000);
   $("#seMat").show(1000);
}

if(acc == 1){
   $("#seMat").hide(1000);
   $("#sePro").hide(1000);
   $("#notasMaterialen").hide(1000);
   $("#nominaGe").show(1000);
}

});

$("#materias").change(function(){
    var acc = $(this).val();

    if(acc == 1){
 $("#sePro").hide();
 $("#nominaGe").hide(1000);
   $("#sePro").show(1000);
}
});


$("#promedios").change(function(){
    var mat = $("#materias").val();
    var acc = $(this).val();

    if(acc == 1 && mat == 1){

 $("#nominaGe").hide(1000);
   $("#notasMaterialen").show(1000);

}
});


 </script>

 <style>
td{
   border: 1px solid black;
}
th{
    border: 1px solid black;
    
}

tr{
    border: 1px solid black;
}

thead{
    border: 1px solid black;
}

tbody{
    border: 1px solid black;
}

table{
    border: 1px solid black;
}
 </style>
        

