<br>
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
                    <font color="#DF7401" size="6px">
                    <i class="user icon"></i><i class="book icon"></i>
                    Gestión de 2do Grado</font>
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
                                        <option value="1">Normales</option>
                                        <option value="2">Mensuales</option>
                                        <option value="3">Trimestrales</option>
                                        <option value="4">Generales</option>                                        
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
                        
                            <th style="background-color: #DF7401; color:white;">N°</th>
                            <th style="background-color: #DF7401; color:white;">NIE</th>
                            <th style="background-color: #DF7401; color:white;">Nombre</th>
                            <th style="background-color: #DF7401; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
            </div>
 </div>
 <script src="./res/tablas/tablaAlumnos.js"></script>
 <script>

$(document).ready(function(){
    var idGrado=2;
    mostrarAlumnos(idGrado);
});

$(document).ready(function(){
    $("#segundo").removeClass("ui orange button");
    $("#segundo").addClass("ui orange basic button");
   
    });

$("#accion").change(function(){
var acc = $(this).val();

if(acc == 2){
 $("#sePro").hide();
 $("#nominaGe").hide();
   $("#seMat").show(1000);
}
if(acc == 3){
   $("#seMat").hide();
   $("#nominaGe").hide();
   $("#sePro").show(1000);
}
if(acc == 1){
   $("#seMat").hide(1000);
   $("#sePro").hide(1000);
   $("#nominaGe").show(1000);
}

});
 </script>
        

