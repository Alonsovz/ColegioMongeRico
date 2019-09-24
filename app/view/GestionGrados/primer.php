
<div id="app">
        <div class="ui grid">
            <div class="row">
                   
            <div class="titulo">
                    <a href="?1=GestionGradosController&2=prekinder" class="ui compact blue button" id="prekinder">Prekinder</a>
                    <a href="?1=GestionGradosController&2=kinder" class="ui compact  teal button" id="kinder">Kinder</a>
                    <a href="?1=GestionGradosController&2=preparatoria" class="ui compact green button" id="prepa">Preparatoria</a>
                    <a href="?1=GestionGradosController&2=primerGrado" class="ui compact red button" id="primer">1er Grado</a>
                    <a href="?1=GestionGradosController&2=segundoGrado" class="ui compact orange button" id="segundo">2do Grado</a>
                    <a href="?1=GestionGradosController&2=tercerGrado" class="ui compact yellow button" id="tercer">3er Grado</a>
                    <a href="?1=GestionGradosController&2=cuartoGrado" class="ui compact purple button" id="cuarto">4to Grado</a>
                    <a href="?1=GestionGradosController&2=quintoGrado" class="ui compact violet button" id="quinto">5to Grado</a>
                    <a href="?1=GestionGradosController&2=sextoGrado" class="ui compact brown button" id="sexto">6to Grado</a>
                    <a href="?1=GestionGradosController&2=septimoGrado" class="ui compact black button" id="septimo">7mo Grado</a>
                    <a href="?1=GestionGradosController&2=octavoGrado" class="ui compact olive button" id="octavo">8vo Grado</a>
                    <a href="?1=GestionGradosController&2=novenoGrado" class="ui compact gray button" id="noveno">9no Grado</a>
                     <br><br>
                    <font color="#B40431" size="6px">
                    <i class="user icon"></i><i class="book icon"></i>
                    Gestión de 1er Grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
</div>
            <br><hr><br>
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
                                        <option value="ninguno" set selected>Seleccione</option>
                                        <option value="1">Lenguaje</option>
                                        <option value="2">Matemáticas</option>
                                        <option value="3">Ciencias</option>
                                        <option value="4">Sociales</option>
                                        <option value="5">Íngles</option>
                                        <option value="6">Artística</option>
                                        <option value="7">Educación en la Fe</option>
                                        <option value="8">Moral</option>
                                        <option value="9">Computación</option>
                                        <option value="10">Educación Física</option>
                                        <option value="11">Conducta</option>
                                        
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
                                <div class="four wide field" id="mesMat" style="display:none;">
                                <label>Mes a ver: </label>
                                <select name="mesNotas" id="mesNotas" class="ui dropdown">
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
            </form>
            
    <div id="nominaGe">
            <h2><i class="file icon"></i>Nómina general</h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNomina" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #B40431; color:white;">N°</th>
                            <th style="background-color: #B40431; color:white;">NIE</th>
                            <th style="background-color: #B40431; color:white;">Nombre</th>
                            <th style="background-color: #B40431; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br><br>
    <div id="notasLenguaje" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Lenguaje del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
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


    <div id="notasMatematicas" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de matematicas del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasMatematica" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #230495; color:white;">N°</th>
                            <th style="background-color: #230495; color:white;">Alumno</th>
                            <th style="background-color: #230495; color:white;">Nota 1</th>
                            <th style="background-color: #230495; color:white;">Nota 2</th>
                            <th style="background-color: #230495; color:white;">Nota 3</th>
                            <th style="background-color: #230495; color:white;">Promedio</th>
                            <th style="background-color: #230495; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasCiencias" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Ciencias Naturales del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasCiencias" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #038919; color:white;">N°</th>
                            <th style="background-color: #038919; color:white;">Alumno</th>
                            <th style="background-color: #038919; color:white;">Nota 1</th>
                            <th style="background-color: #038919; color:white;">Nota 2</th>
                            <th style="background-color: #038919; color:white;">Nota 3</th>
                            <th style="background-color: #038919; color:white;">Promedio</th>
                            <th style="background-color: #038919; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasSociales" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Estudios Sociales del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasSociales" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #2D97FA; color:white;">N°</th>
                            <th style="background-color: #2D97FA; color:white;">Alumno</th>
                            <th style="background-color: #2D97FA; color:white;">Nota 1</th>
                            <th style="background-color: #2D97FA; color:white;">Nota 2</th>
                            <th style="background-color: #2D97FA; color:white;">Nota 3</th>
                            <th style="background-color: #2D97FA; color:white;">Promedio</th>
                            <th style="background-color: #2D97FA; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasIngles" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Ingles del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasIngles" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #C4BC03; color:black;">N°</th>
                            <th style="background-color: #C4BC03; color:black;">Alumno</th>
                            <th style="background-color: #C4BC03; color:black;">Nota 1</th>
                            <th style="background-color: #C4BC03; color:black;">Nota 2</th>
                            <th style="background-color: #C4BC03; color:black;">Nota 3</th>
                            <th style="background-color: #C4BC03; color:black;">Promedio</th>
                            <th style="background-color: #C4BC03; color:black;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasArtistica" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Educación Artística del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasArtistica" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #02DABD; color:black;">N°</th>
                            <th style="background-color: #02DABD; color:black;">Alumno</th>
                            <th style="background-color: #02DABD; color:black;">Nota 1</th>
                            <th style="background-color: #02DABD; color:black;">Nota 2</th>
                            <th style="background-color: #02DABD; color:black;">Nota 3</th>
                            <th style="background-color: #02DABD; color:black;">Promedio</th>
                            <th style="background-color: #02DABD; color:black;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasFe" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Educación en la Fe del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasFe" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #6102DA; color:white;">N°</th>
                            <th style="background-color: #6102DA; color:white;">Alumno</th>
                            <th style="background-color: #6102DA; color:white;">Nota 1</th>
                            <th style="background-color: #6102DA; color:white;">Nota 2</th>
                            <th style="background-color: #6102DA; color:white;">Nota 3</th>
                            <th style="background-color: #6102DA; color:white;">Promedio</th>
                            <th style="background-color: #6102DA; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasMoral" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Moral del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasMoral" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #D702DA; color:white;">N°</th>
                            <th style="background-color: #D702DA; color:white;">Alumno</th>
                            <th style="background-color: #D702DA; color:white;">Nota 1</th>
                            <th style="background-color: #D702DA; color:white;">Nota 2</th>
                            <th style="background-color: #D702DA; color:white;">Nota 3</th>
                            <th style="background-color: #D702DA; color:white;">Promedio</th>
                            <th style="background-color: #D702DA; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div id="notasInfo" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Computación del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasInfo" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: black; color:white;">N°</th>
                            <th style="background-color: black; color:white;">Alumno</th>
                            <th style="background-color: black; color:white;">Nota 1</th>
                            <th style="background-color: black; color:white;">Nota 2</th>
                            <th style="background-color: black; color:white;">Nota 3</th>
                            <th style="background-color: black; color:white;">Promedio</th>
                            <th style="background-color: black; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasFisica" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Educación Física del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasFisica" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #37CA04; color:black;">N°</th>
                            <th style="background-color: #37CA04; color:black;">Alumno</th>
                            <th style="background-color: #37CA04; color:black;">Nota 1</th>
                            <th style="background-color: #37CA04; color:black;">Nota 2</th>
                            <th style="background-color: #37CA04; color:black;">Nota 3</th>
                            <th style="background-color: #37CA04; color:black;">Promedio</th>
                            <th style="background-color: #37CA04; color:black;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="notasConducta" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Conducta del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtNotasConducta" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #C80854; color:white;">N°</th>
                            <th style="background-color: #C80854; color:white;">Alumno</th>
                            <th style="background-color: #C80854; color:white;">Nota 1</th>
                            <th style="background-color: #C80854; color:white;">Nota 2</th>
                            <th style="background-color: #C80854; color:white;">Nota 3</th>
                            <th style="background-color: #C80854; color:white;">Promedio</th>
                            <th style="background-color: #C80854; color:white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

 </div>

<div id="modalNotas" class="ui tiny modal">
    <div class="header" style="color:white; background-color:black">
        Notas  de lenguaje del alumno : <a id="alName" style="color:yellow"></a>
        <br> Del mes de : <a id="mesModal" style="color:aqua"></a>
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

 <script src="./res/tablas/tablaAlumnos.js"></script>
 <script src="./res/tablas/tablaNotasLenguaje.js"></script>
 <script>

$(document).ready(function(){
    var idGrado=1;
    mostrarAlumnos(idGrado);
});

$(document).ready(function(){
    $("#primer").removeClass("ui red button");
    $("#primer").addClass("ui red basic button");
  
    });

$("#accion").change(function(){
var acc = $(this).val();

if(acc == 2){
 $("#sePro").hide();
 $("#nominaGe").hide();
   $("#seMat").show(1000);
   $("#mesMat").show(1000);
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

$("#materias").change(function(){
    $("#mesNotas").dropdown('set selected', 'ninguno');
    $("#notasMatematicas").hide();
    $("#notasLenguaje").hide();
    $("#notasCiencias").hide();
    $("#notasSociales").hide();
    $("#notasIngles").hide();
    $("#notasArtistica").hide();
    $("#notasFe").hide();
    $("#notasMoral").hide();
    $("#notasInfo").hide();
    $("#notasFisica").hide();
    $("#notasConducta").hide();
});




$("#mesNotas").change(function(){
     var materia = $("#materias").val();

     var mesR = $("#mesNotas option:selected").text();

$(".mesVisto").text(mesR);
var d = new Date();
var anio = d.getFullYear();

var grado = "1";

    if(materia == 1){
        var acc = $("#mesNotas").val();

        
       
        var table = $('#dtNotasLenguaje').DataTable();
        table.destroy();
        $("#sePro").hide();
        $("#nominaGe").hide();

        fitrarTabla(acc,anio,grado);

        $("#notasLenguaje").fadeIn(1000);
        $("#dtNotasLenguaje").fadeIn(1000);
        
        $("#notasSociales").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }
    else if(materia == 2){
        
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasMatematicas").fadeIn(1000);
        $("#dtNotasMatematica").fadeIn(1000);


        $("#notasSociales").hide();
        $("#notasLenguaje").hide();
        $("#notasCiencias").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }
    else if(materia == 3){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasCiencias").fadeIn(1000);
        $("#dtNotasCiencias").fadeIn(1000);
        

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }

    else if(materia == 4){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasSociales").fadeIn(1000);
        $("#dtNotasSociales").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }


    else if(materia == 5){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasIngles").fadeIn(1000);
        $("#dtNotasIngles").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }

    else if(materia == 6){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasArtistica").fadeIn(1000);
        $("#dtNotasArtistica").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }
    else if(materia == 7){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasFe").fadeIn(1000);
        $("#dtNotasFe").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }

    else if(materia == 8){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasMoral").fadeIn(1000);
        $("#dtNotasMoral").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }

    else if(materia == 9){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasInfo").fadeIn(1000);
        $("#dtNotasInfo").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasFisica").hide();
        $("#notasConducta").hide();
    }

    else if(materia == 10){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasFisica").fadeIn(1000);
        $("#dtNotasFisica").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasConducta").hide();
    }

    else if(materia == 11){
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasConducta").fadeIn(1000);
        $("#dtNotasConducta").fadeIn(1000);

        $("#notasLenguaje").hide();
        $("#notasMatematicas").hide();
        $("#notasCiencias").hide();
        $("#notasSociales").hide();
        $("#notasIngles").hide();
        $("#notasArtistica").hide();
        $("#notasFe").hide();
        $("#notasMoral").hide();
        $("#notasInfo").hide();
        $("#notasFisica").hide();
    }
    

    


});


var notas=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

        var id = $(ele).attr("id");

        var nota1 = $(ele).attr("nota1");
        var nota2 = $(ele).attr("nota2");
        var nota3 = $(ele).attr("nota3");

        $("#nota1").val(nota1);
        $("#nota2").val(nota2);
        $("#nota3").val(nota3);

        $("#idAlumnoNota").val(id);
            $("#alName").text($(ele).attr("nombre"));
            $("#mesModal").text(mesR);
        $('#modalNotas').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
}


$("#guardar").click(function(){
    var id= $("#idAlumnoNota").val();
    var nota1 = $("#nota1").val();
    var nota2 = $("#nota2").val();
    var nota3 = $("#nota3").val();
    var mes = $("#mesNotas").val();

    $.ajax({
               
                type: 'POST',
                url: '?1=LenguajeController&2=guardarNotas',
                data: {
                    id:id,
                    nota1 : nota1,
                    nota2 : nota2,
                    nota3 : nota3,
                    mes : mes
                },
                success: function(r) {
                    if(r == 1) {
                        $('#dtNotasLenguaje').DataTable().ajax.reload();
                        $('#modalNotas').modal('hide');
                        $.amaran({

                    'theme'     :'awesome ok',
                    'content'   :{
                    title:'Listo!',
                    message:'Datos modificados con éxito!',
                    info:'Cambios guardados',
                    icon:'check icon'
                    },
                    'cssanimationOut'   :random(salidas),
                            'position'  : random(positions) ,
                            'inEffect'  : random(inEffects)
                    });
                    }
                }
            });
});
 </script>
        

