
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
                    <font color="#86B404" size="6px">
                    <i class="user icon"></i><i class="book icon"></i>
                    Gestión de 8vo Grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
</div>
<br><hr><br>
            <form class="ui form" style="font-size:16px;background-color:#DBDDDD;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);">
                <div class="field" style="margin-left: 10px;margin-right: 10px;">
                        <div class="fields">
                                <div class="six wide field">
                                        <label> Seleccione la acción a realizar: </label>
                                        <select name="accion" id="accion" class="ui dropdown">
                                        <option value="1">Ver nómina general de alumnos/as</option>
                                        <option value="2">Ver notas por materias</option>
                                        <option value="3">Ver promedios</option>
                                        </select>
                                </div>

                                <div class="six wide field" id="seMat" style="display:none;">
                                        <label> Materias: </label>
                                        <select name="materias" id="materias" class="ui dropdown">
                                        <option value="ninguno" set selected>Seleccione</option>
                                        <option value="1">Lenguaje</option>
                                        <option value="2">Matemáticas</option>
                                        <option value="3">Ciencias Naturales</option>
                                        <option value="4">Estudios Sociales</option>
                                        <option value="5">Íngles</option>
                                        <option value="7">Educación en la Fe</option>
                                        <option value="8">Moral</option>
                                        <option value="9">Computación</option>
                                        <option value="10">Educación Física</option>
                                        <option value="11">Conducta</option>
                                        
                                        </select>
                                </div>


                               

                                <div class="six wide field" id="sePro" style="display:none;">
                                        <label> Promedios: </label>
                                        <select name="promedios" id="promedios" class="ui dropdown">
                                        <option value="ninguno" set selected>Seleccione</option>
                                        <option value="1">Mensuales</option>
                                        <option value="2">Trimestrales</option>
                                        <option value="3">Generales</option>                                        
                                        </select>
                                </div>

                                <div class="six wide field" id="triMat" style="display:none;">
                                        <label> Materia a seleccionar: </label>
                                        <select name="materiasTri" id="materiasTri" class="ui dropdown">
                                        <option value="ninguno" set selected>Seleccione</option>
                                        <option value="1">Lenguaje</option>
                                        <option value="2">Matemáticas</option>
                                        <option value="3">Ciencias Naturales</option>
                                        <option value="4">Estudios Sociales</option>
                                        <option value="5">Íngles</option>
                                        <option value="6">Educación Artística</option>
                                        <option value="7">Educación en la Fe</option>
                                        <option value="8">Moral</option>
                                        <option value="9">Computación</option>
                                        <option value="10">Educación Física</option>
                                        <option value="11">Conducta</option>
                                        
                                        </select>
                                </div>
                                <div class="six wide field" id="mesMat" style="display:none;">
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


                                <div class="six wide field" id="mesCo" style="display:none;">
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
    <div id="nominaGe" style="background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
            <h2><i class="file icon"></i>Nómina general</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtNomina" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #86B404; color:white;">N°</th>
                            <th style="background-color: #86B404; color:white;">NIE</th>
                            <th style="background-color: #86B404; color:white;">Nombre</th>
                            <th style="background-color: #86B404; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
            </div>

            <br>
    <div id="notasLenguaje" style="display:none;background-color:#D8D8D8;
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


    <div id="notasMatematicas" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de matematicas del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtNotasMatematicas" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
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


    <div id="notasCiencias" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Ciencias Naturales del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasSociales" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Estudios Sociales del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasIngles" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Ingles del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasArtistica" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Educación Artística del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasFe" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Educación en la Fe del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasMoral" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Moral del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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



    <div id="notasInfo" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Computación del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasFisica" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Educación Física del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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


    <div id="notasConducta" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas de Conducta del mes de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
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



    <div id="colectorMes" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Colector de notas de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtColector" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #C80854; color:white;">N°</th>
                            <th style="background-color: #C80854; color:white;">Alumno</th>
                            <th style="background-color: #C80854; color:white;">Lenguaje</th>
                            <th style="background-color: #C80854; color:white;">Matemáticas</th>
                            <th style="background-color: #C80854; color:white;">Ciencias</th>
                            <th style="background-color: #C80854; color:white;">Sociales</th>
                            <th style="background-color: #C80854; color:white;">Íngles</th>
                            <th style="background-color: #C80854; color:white;">Artística</th>
                            <th style="background-color: #C80854; color:white;">Física</th>
                            <th style="background-color: #C80854; color:white;">Edu. Fe</th>
                            <th style="background-color: #C80854; color:white;">Moral</th>
                            <th style="background-color: #C80854; color:white;">Computación</th>
                            <th style="background-color: #C80854; color:white;">Conducta</th>
                   
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



    <div id="trimestralesM" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Matemáticas</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesMate" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #02AAD8; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #02AAD8; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #1D0280; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #088C8A;color:white;">F</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">M</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">A</th> 
                        <th style="text-align:center;background-color: #46EBA9;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">M</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">J</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">J</th> 
                        <th style="text-align:center;background-color: #46EBA9;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">A</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">S</th> 
                        <th style="text-align:center;background-color: #088C8A;color:white;">O</th> 
                        <th style="text-align:center;background-color: #46EBA9;color:black;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div id="trimestralesC" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Ciencias Naturales</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesCiencias" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #1D8031; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #1D8031; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #0F4018; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #0F4018; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #0F4018; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #0F4018; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">F</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">M</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">A</th> 
                        <th style="text-align:center;background-color: #72FC80;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">M</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">J</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">J</th> 
                        <th style="text-align:center;background-color: #72FC80;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">A</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">S</th> 
                        <th style="text-align:center;background-color: #2CBF49;color:white;">O</th> 
                        <th style="text-align:center;background-color: #72FC80;color:black;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div id="trimestralesS" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Estudios Sociales</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesSociales" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #0E7FA6; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #0E7FA6; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #001747; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #001747; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #001747; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #001747; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #138C6B;color:white;">F</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">M</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">A</th> 
                        <th style="text-align:center;background-color: #70D6BC;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">M</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">J</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">J</th> 
                        <th style="text-align:center;background-color: #70D6BC;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">A</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">S</th> 
                        <th style="text-align:center;background-color: #138C6B;color:white;">O</th> 
                        <th style="text-align:center;background-color: #70D6BC;color:black;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div id="trimestralesI" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Íngles</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesIngles" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #0E7FA6; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #0E7FA6; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #001747; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #001747; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #001747; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #001747; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #FF8837;color:white;">F</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">M</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">A</th> 
                        <th style="text-align:center;background-color: #FF6700;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">M</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">J</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">J</th> 
                        <th style="text-align:center;background-color: #FF6700;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">A</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">S</th> 
                        <th style="text-align:center;background-color: #FF8837;color:white;">O</th> 
                        <th style="text-align:center;background-color: #FF6700;color:white;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="trimestralesArt" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Educación Artística</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesArtistica" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #002E40; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #002E40; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #2A5769; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #2A5769; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #2A5769; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #2A5769; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #FA9600;color:white;">F</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">M</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">A</th> 
                        <th style="text-align:center;background-color: #FABD4A;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">M</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">J</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">J</th> 
                        <th style="text-align:center;background-color: #FABD4A;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">A</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">S</th> 
                        <th style="text-align:center;background-color: #FA9600;color:white;">O</th> 
                        <th style="text-align:center;background-color: #FABD4A;color:black;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div id="trimestralesFe" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Educación en la Fe</h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesFe" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #002736; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #002736; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #B35C15; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #B35C15; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #B35C15; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #B35C15; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #F24416;color:white;">F</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">M</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">A</th> 
                        <th style="text-align:center;background-color: #FFBF33;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">M</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">J</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">J</th> 
                        <th style="text-align:center;background-color: #FFBF33;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">A</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">S</th> 
                        <th style="text-align:center;background-color: #F24416;color:white;">O</th> 
                        <th style="text-align:center;background-color: #FFBF33;color:black;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="trimestralesMo" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Moral</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesMoral" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #1C1919; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #1C1919; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #403D3C; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #403D3C; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #403D3C; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #403D3C; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #456F74;color:white;">F</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">M</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">A</th> 
                        <th style="text-align:center;background-color: #EB5937;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">M</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">J</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">J</th> 
                        <th style="text-align:center;background-color: #EB5937;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">A</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">S</th> 
                        <th style="text-align:center;background-color: #456F74;color:white;">O</th> 
                        <th style="text-align:center;background-color: #EB5937;color:white;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <div id="trimestralesCo" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Computación</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesCompu" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #403952; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #403952; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #34133A; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #34133A; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #34133A; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #34133A; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #7A0099;color:white;">F</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">M</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">A</th> 
                        <th style="text-align:center;background-color: #C497D4;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">M</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">J</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">J</th> 
                        <th style="text-align:center;background-color: #C497D4;color:black;">Prom.</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">A</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">S</th> 
                        <th style="text-align:center;background-color: #7A0099;color:white;">O</th> 
                        <th style="text-align:center;background-color: #C497D4;color:black;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div id="trimestralesFi" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Educación Física</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesFisica" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #403952; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #403952; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #341358; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #341358; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #341358; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #341358; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">F</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">M</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">A</th> 
                        <th style="text-align:center;background-color: #F27999;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">M</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">J</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">J</th> 
                        <th style="text-align:center;background-color: #F27999;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">A</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">S</th> 
                        <th style="text-align:center;background-color: #8B3A5A;color:white;">O</th> 
                        <th style="text-align:center;background-color: #F27999;color:white;">Prom.</th> 
                       
                          </tr>
                    </thead>
                    <tbody style="text-align:center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="trimestralesCon" style="display:none;background-color:#D8D8D8;
-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Conducta</h2>
            <div class="ui divider"></div>
            <div class="row">
           <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtTrimestralesConducta" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #2D4A7F; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #2D4A7F; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #07317F; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #07317F; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #07317F; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #07317F; color:white;text-align:center" rowspan="2">Prom F</th>
                        </tr>

                        <tr > 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">F</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">M</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">A</th> 
                        <th style="text-align:center;background-color: #5A93FF;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">M</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">J</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">J</th> 
                        <th style="text-align:center;background-color: #5A93FF;color:white;">Prom.</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">A</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">S</th> 
                        <th style="text-align:center;background-color: #0B4ECC;color:white;">O</th> 
                        <th style="text-align:center;background-color: #5A93FF;color:white;">Prom.</th> 
                       
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



<div id="modalNomina" class="ui fullscreen modal">
    <div class="header" style="color:white; background-color:#009C95">
        Datos del alumno :  <a id="nomNomina" style="color:yellow"></a>
        
    </div>
    <center><br>
            <button class="ui teal button" id="btnDatosAlumno"><i class="child icon"></i>Datos del alumno/a</button>
            <button class="ui blue button" id="btnDatosPadres"><i class="male icon"></i><i class="female icon"></i>
            Datos de los padres</button>
            <button class="ui black button" id="btnDatosRes"><i class="user circle icon"></i>Datos del reponsable</button>
            <button class="ui orange button" id="btnOtrosDatos"><i class="exclamation triangle icon"></i>Otros datos</button>
           <br><br></center>
    <div class="scrolling content" style="text-align:center; border: 1px solid black; background-color: #DBDDDD;">
   
    <form class="ui form" style="font-size:23px;margin-left:20px;margin-right:20px; " id="frmAlumno" method="POST" method="POST" enctype="multipart/form-data">
        <div id="datosAlumnos">
            <h2 style="color:#04B486;"><i class="child icon"></i> Datos del alumno/a</h2>
            <hr><br>
                    <div class="field">
                        <div class="fields">
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="address card outline icon"></i>NIE:</label>
                                <input type="text" id="nie" name="nie" placeholder="NIE">

                                <input type="hidden" id="idEditar" name="idEditar" placeholder="NIE">
                            </div>

                            <div class="eight wide field" style="font-size:16px;">
                                <label><i class="user icon"></i>Nombre completo del Alumno/a: (Apellidos-Nombre)</label>
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre completo del alumno/a">
                            </div>

                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="chart bar outline icon"></i>Grado a estudiar:</label>
                                <select name="grado" id="grado" class="ui dropdown">
                                <option value="10">PreKinder</option>
                                    <option value="11">Kinder</option>
                                    <option value="12">Preparatoria</option>
                                    <option value="1">1er Grado</option>
                                    <option value="2">2do Grado</option>
                                    <option value="3">3er Grado</option>
                                    <option value="4">4to Grado</option>
                                    <option value="5">5to Grado</option>
                                    <option value="6">6to Grado</option>
                                    <option value="7">7mo Grado</option>
                                    <option value="8">8vo Grado</option>
                                    <option value="9">9no Grado</option>
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="mars icon"></i> <i class="venus icon"></i> Sexo:</label>
                                <input type="radio" name="sexo" value="F"> F &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sexo" value="M"> M<br>
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="question icon"></i> Repite grado:</label>
                                <input type="radio" name="repite" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="repite" value="no"> No<br>
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="question icon"></i> Nuevo Ingreso:</label>
                                <input type="radio" name="nuevoIngreso" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="nuevoIngreso" value="no"> No<br>
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="question icon"></i> Reingreso:</label>
                                <input type="radio" name="reingreso" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="reingreso" value="no"> No<br>
                            </div>


                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="heart icon"></i> Religión:</label>
                                <select name="religion" id="religion" class="ui dropdown">
                                    <option value="Católica">Católica</option>
                                    <option value="Evángelica">Evángelica</option>
                                    <option value="Bautista">Bautista</option>
                                    <option value="Testigo de Jehová">Testigo de Jehová</option>
                                    <option value="Mormón">Mormón</option>
                                    <option value="Cristiana">Cristiana</option>
                                    <option value="Otra">Otra</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="six wide field" style="font-size:16px;">
                            <label><i class="building icon"></i>Institución en la que estudió el año anterior:</label>
                                <input type="text" id="escuelaAnterior" name="escuelaAnterior" placeholder="Nombre de la insitución">
                        </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="calendar icon"></i> Fecha de Nacimiento:</label>
                                <input type="date" id="fechaNac" name="fechaNac">
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                        <label><i class="map maker icon"></i>Departamento de Nacimiento:</label>
                                        <select id="departamentoNac" name="departamentoNac" class="ui dropdown">
                                                <option value="Santa Ana">Santa Ana</option>
                                                <option value="Ahuachapán">Ahuachapán</option>
                                                <option value="Sonsonate">Sonsonate</option>
                                                <option value="Chalatenango">Chalatenango</option>
                                                <option value="La Libertad">La Libertad</option>
                                                <option value="San Salvador">San Salvador</option>
                                                <option value="Cuscatlán">Cuscatlán</option>
                                                <option value="Cabañas">Cabañas</option>
                                                <option value="La Paz">La Paz</option>
                                                <option value="San Vicente">San Vicente</option>
                                                <option value="Usulután">Usulután</option>
                                                <option value="Morazán">Morazán</option>
                                                <option value="San Miguel">San Miguel</option>
                                                <option value="La Unión">La Unión</option>
                                            </select>   
                            </div>  
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="map maker icon"></i> Municipio de Nacimiento:</label>
                                <input type="text" id="municipio" name="municipio" placeholder="Municipio de nacimiento">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="three wide field" style="font-size:16px;">
                            <label><i class="child icon"></i>Nacionalidad:</label>
                                <input type="text" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad">
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                                <label><i class="question icon"></i> Naturalizado:</label>
                                <input type="radio" name="naturalizado" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="naturalizado" value="no"> No<br>
                        </div>

                            
                        <div class="six wide field" style="font-size:16px;">
                                <label><i class="user md icon"></i> ¿Padece de alguna discapacidad?</label>
                                <input type="radio" name="discapacidad" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="discapacidad" value="no"> No 
                                <br><br>
                                Explique:
                                <input type="text" id="expDiscapacidad" name="expDiscapacidad" placeholder="Describa el tipo de discapacidad" disabled>
                        </div>

                        <div class="six wide field" style="font-size:16px;">
                                <label><i class="user md icon"></i> ¿Padece de alguna enfermedad que debamos estar prevenidos?</label>
                                <input type="radio" name="enfermedad" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="enfermedad" value="no"> No 
                                <br><br>
                                Explique:
                                <input type="text" id="expEnfermedad" name="expEnfermedad" placeholder="Describa el tipo de enfermedad" disabled>
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="six wide field" style="font-size:16px;">
                            <label><i class="user md icon"></i> ¿Presenta algún tipo de alergia?</label>
                                <input type="radio" name="alergia" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="alergia" value="no"> No 
                                <br><br>
                                Explique:
                                <input type="text" id="expAlergia" name="expAlergia" placeholder="Describa el tipo de alergia" disabled>
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                                <label><i class="syringe icon"></i> Tipo de sangre:</label>
                                <select name="tipoSangre" id="tipoSangre" class="ui dropdown">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    <option value="A+">A +</option>
                                    <option value="A+">A -</option>
                                    <option value="B+">B +</option>
                                    <option value="B-">B -</option>
                                    <option value="AB+">AB +</option>
                                    <option value="AB-">AB -</option>
                                    <option value="O+">O +</option>
                                    <option value="O-">O -</option>

                                </select>
                        </div>

                            
                        <div class="four wide field" style="font-size:16px;">
                            
                                <label><i class="map marker  icon"></i> Dirección de residencia:</label>
                                <textarea rows="3" name="direccion" id="direccion" placeholder="Dirección de residencia"></textarea>
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                                <label><i class="bus icon"></i> Medio de transporte que utiliza para trasladarse al colegio:</label>
                                <select name="transporte" id="transporte" class="ui dropdown">
                                    <option value="Microbus">Microbus</option>
                                    <option value="Transporte personal">Transporte personal</option>
                                    <option value="Transporte Colectivo">Transporte Colectivo</option>
                                    <option value="Ninguno">Ninguno</option>
                                <select>
                        </div>
                        </div>
                    </div>


                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="three wide field" style="font-size:16px;">
                            <label><i class="question icon"></i> ¿Distancia que hay desde su residencia al colegio? (KM)</label>
                                <input type="text" id="distanciaKM" name="distanciaKM" placeholder="Distancia en KM">
                        </div>

                    
                        <div class="four wide field" style="font-size:16px;">
                            <label><i class="exclamation triangle icon"></i> Factores de riesgos por los que atreviesa cuando se dirige a estudiar</label>
                            <textarea rows="3" name="riesgos" id="riesgos" placeholder="Riesgos a los que se expone"></textarea>
                        </div>
                        <div class="three wide field" style="font-size:16px;">
                            
                                <label><i class="question icon"></i>Ocupación</label>
                                <br>
                                <input type="text" id="ocupacion" name="ocupacion" placeholder="Ocupación">
                        </div>

                        <div class="two wide field" style="font-size:16px;">
                                <label><i class="question icon"></i> ¿Trabaja?</label>
                                <br>
                                <input type="radio" name="trabajo" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="trabajo" value="no"> No<br>
                        </div>

                        <div class="four wide field" style="font-size:16px;">
                            
                                <label><i class="user circle icon"></i>Dependencia económica:</label>
                                <br>
                                <input type="text" id="dependenciaEco" name="dependenciaEco" placeholder="Dependencia económica">
                        </div>

                        </div>
                    </div>

                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="eight wide field" style="font-size:16px;">
                            <label><i class="envelope icon"></i> Correo Electrónico</label>
                                <input type="text" id="correo" name="correo" placeholder="Correo Electrónico">
                        </div>

                        <div class="eight wide field" style="font-size:16px;">
                            <label><i class="phone icon"></i>Teléfono</label>
                                <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
                        </div>

                        </div>
                    </div>

            </div>

        <div id="datosPadres">
            <h2 style="color:#04B486;"><i class="male icon"></i><i class="female icon"></i> Datos de los padres</h2>
            <hr><br>
                    <div class="field">
                        <h2 style="text-align:left; color:blue;margin-left:20px;">Padre: </h2><br>
                        <div class="fields">
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="male icon"></i>Nombre completo del padre:</label>
                                <input type="text" id="nombrePadre" name="nombrePadre" placeholder="Nombre completo">
                            </div>
                            <div class="eight wide field" style="font-size:16px;">
                                <label><i class="male icon"></i><i class="map marker alternate icon"></i>Lugar de trabajo:</label>
                                <input type="text" id="lugarTPad" name="lugarTPad" placeholder="Lugar de trabajo del padre">
                            </div>

                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i><i class="male icon"></i>Teléfono:</label>
                                <input type="text" id="telPadre" name="telPadre" placeholder="Teléfono del padre">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                    <h2 style="text-align:left; color:red;margin-left:20px;">Madre: </h2><br>
                        <div class="fields">
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="female icon"></i>Nombre completo de la madre:</label>
                                <input type="text" id="nombreMadre" name="nombreMadre" placeholder="Nombre completo">
                            </div>
                            <div class="eight wide field" style="font-size:16px;">
                                <label><i class="female icon"></i><i class="map marker alternate icon"></i>Lugar de trabajo:</label>
                                <input type="text" id="lugarTMad" name="lugarTMad" placeholder="Lugar de trabajo de la madre">
                            </div>

                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i><i class="female icon"></i>Teléfono:</label>
                                <input type="text" id="telMadre" name="telMadre" placeholder="Teléfono de la madre">
                            </div>
                        </div>
                    </div>


                    <div class="ui divider"></div>
                    <div class="field">
                    <h3 style="text-align:left; color:green;margin-left:20px;">¿Con quien vive el alumno?: </h3><br>
                        <div class="fields">
                            <div class="four wide field" style="font-size:16px;">
                                <input type="radio" name="viveCon" value="Padre"> <i class="male icon"></i> Padre &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="four wide field" style="font-size:16px;">
                            <input type="radio" name="viveCon" value="Madre"><i class="female icon"></i> Madre &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="four wide field" style="font-size:16px;">
                            <input type="radio" name="viveCon" value="Ambos"><i class="female icon"></i><i class="male icon"></i> Ambos &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="four wide field" style="font-size:16px;">
                            <input type="radio" name="viveCon" value="Otro"> Otro &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" id="viveOtro" name="viveOtro" placeholder="Parentesco de la persona con quien vive" disabled>
                            </div>
                            
                        </div>
                    </div>
        </div>

<div id="datosRespon">
            <h2 style="color:#04B486;"><i class="user icon"></i> Datos del responsable</h2>
            <hr><br>
                    <div class="field">
                        <div class="fields">
                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="user icon"></i>Nombre completo</label>
                                <input type="text" id="nombreRes" name="nombreRes" placeholder="Nombre completo">
                            </div>
                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="male icon"></i><i class="address card icon"></i>Tipo de identificación:</label>
                                <select name="tipoIdRes" id="tipoIdRes" class="ui dropdown">
                                    <option value="dui">DUI</option>
                                    <option value="nit">NIT</option>
                                </select>
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="asterisk icon"></i><i class="address card outline icon"></i>Número:</label>
                                <input type="text" id="numeroID" name="numeroID" placeholder="Número de identificación">
                            </div>
                            <div class="two wide field" style="font-size:16px;">
                                <label><i class="question icon"></i>¿Familiar?</label>
                                <input type="radio" name="familiar" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="familiar" value="no"> No<br>
                            </div>

                            <div class="two wide field" style="font-size:16px;">
                                <label><i class="question icon"></i><i class="user icon"></i>Parentesco:</label>
                                <select name="parentesco" id="parentesco" disabled>
                                    <option value="Padre">Padre</option>
                                    <option value="Madre">Madre</option>
                                    <option value="Hermano/a">Hermano/a</option>
                                    <option value="Tío/a">Tío/a</option>
                                    <option value="Primo/a">Primo/a</option>
                                    <option value="Abuelo/a">Abuelo/a</option>
                                </select>
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="venus icon"></i><i class="mars icon"></i>¿Sexo?</label>
                                <input type="radio" name="sexoRes" value="F"> F &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sexoRes" value="M"> M<br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="heart icon"></i>Estado familiar:</label>
                                <select name="estadoFam" id="estadoFam" class="ui dropdown">
                                    <option value="Casado/a">Casado/a</option>
                                    <option value="Soltero/a">Soltero/a</option>
                                    <option value="Divoricado/a">Divoricado/a</option>
                                    <option value="Viudo/a">Viudo/a</option>
                                    
                                </select>
                            </div>
                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="calendar icon"></i> Fecha de Nacimiento:</label>
                                <input type="date" id="fechaNacRes" name="fechaNacRes">
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                        <label><i class="map maker icon"></i>Dpto de Nacimiento:</label>
                                        <select id="departamentoNacRes" name="departamentoNacRes" class="ui dropdown">
                                                <option value="Santa Ana">Santa Ana</option>
                                                <option value="Ahuachapán">Ahuachapán</option>
                                                <option value="Sonsonate">Sonsonate</option>
                                                <option value="Chalatenango">Chalatenango</option>
                                                <option value="La Libertad">La Libertad</option>
                                                <option value="San Salvador">San Salvador</option>
                                                <option value="Cuscatlán">Cuscatlán</option>
                                                <option value="Cabañas">Cabañas</option>
                                                <option value="La Paz">La Paz</option>
                                                <option value="San Vicente">San Vicente</option>
                                                <option value="Usulután">Usulután</option>
                                                <option value="Morazán">Morazán</option>
                                                <option value="San Miguel">San Miguel</option>
                                                <option value="La Unión">La Unión</option>
                                            </select>   
                            </div>  
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="map maker icon"></i> Mun de Nacimiento:</label>
                                <input type="text" id="municipioRes" name="municipioRes" placeholder="Municipio de nacimiento">
                            </div>
                            <div class="three wide field" style="font-size:16px;">
                            <label><i class="child icon"></i>Nacionalidad:</label>
                                <input type="text" id="nacionalidadRes" name="nacionalidadRes" placeholder="Nacionalidad">
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="user icon"></i>Profesión u oficio:</label>
                                <input type="text" id="profesionRes" name="profesionRes" placeholder="Profesión u oficio">
                            </div>
                            <div class="three wide field" style="font-size:16px;">
                            <label><i class="chart bar  icon"></i>Escolaridad:</label>
                                        <select id="escolaridad" name="escolaridad" class="ui dropdown">
                                                <option value="Superior">Superior</option>
                                                <option value="Media">Media</option>
                                                <option value="Básica">Básica</option>
                                                <option value="Ninguna">Ninguna</option>
                                            </select>  
                            </div>

                            <div class="five wide field" style="font-size:16px;">
                                <label><i class="map marker alternate icon"></i>Lugar de trabajo:</label>
                                <input type="text" id="lugarTRes" name="lugarTRes" placeholder="Lugar de trabajo">
                            </div>

                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i><i class="user circle icon"></i>Teléfono de trabajo:</label>
                                <input type="text" id="telRes" name="telRes" placeholder="Teléfono">
                            </div>
                        
                        </div>
                    </div>

                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                        <div class="five wide field" style="font-size:16px;">
                                <label><i class="user md icon"></i> ¿Padece de alguna discapacidad?</label>
                                <input type="radio" name="discapacidadRes" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="discapacidadRes" value="no"> No 
                                <br><br>
                                Explique:
                                <input type="text" id="expDiscapacidadRes" name="expDiscapacidadRes" placeholder="Describa el tipo de discapacidad" disabled>
                        </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="syringe icon"></i> Tipo de sangre:</label>
                                <select name="tipoSangreRes" id="tipoSangreRes" class="ui dropdown">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    <option value="A+">A +</option>
                                    <option value="A+">A -</option>
                                    <option value="B+">B +</option>
                                    <option value="B-">B -</option>
                                    <option value="AB+">AB +</option>
                                    <option value="AB-">AB -</option>
                                    <option value="O+">O +</option>
                                    <option value="O-">O -</option>

                                </select>
                        </div>

                        <div class="four wide field" style="font-size:16px;">
                            
                                <label><i class="map marker  icon"></i> Dirección de residencia:</label>
                                <textarea rows="3" name="direccionRes" id="direccionRes" placeholder="Dirección de residencia"></textarea>
                        </div>

                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i><i class="user circle icon"></i>Teléfono:</label>
                                <input type="text" id="telDiRes2" name="telDiRes1" placeholder="Teléfono 1">
                                <br><br>
                                <input type="text" id="telDiRes1" name="telDiRes2" placeholder="Teléfono 2">
                            </div>
                        
                        </div>
                    </div>

                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="eight wide field" style="font-size:16px;">
                            <label><i class="envelope icon"></i> Correo Electrónico</label>
                                <input type="text" id="correoRes" name="correoRes" placeholder="Correo Electrónico">
                        </div>

                        

                        </div>
                    </div>

</div>
<div id="otrosDatos">
<h2 style="color:#04B486;"><i class="exclamation icon"></i> Otros datos</h2>
            <hr><br>
                    <div class="field">
                    <h3 style="color:red;text-align:left;margin-left:20px;"><i class="exclamation triangle icon"></i> En caso de emergencia avisar a:</h3>
                        <br><div class="fields">
                            <div class="ten wide field" style="font-size:16px;">
                                <label><i class="exclamation triangle icon"></i>Nombre completo Contacto 1:</label>
                                <input type="text" id="emergencia1" name="emergencia1" placeholder="Contacto 1">
                            </div>

                            <div class="six wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i>Telefóno:</label>
                                <input type="text" id="telEmer1" name="telEmer1" placeholder="Teléfono contacto 1">
                            </div>

                            
                        </div>
                        
                    </div>
                    <br>
                    <div class="ui divider"></div>
                    <div class="field">
                        <div class="fields">
                            <div class="ten wide field" style="font-size:16px;">
                                <label><i class="exclamation triangle icon"></i>Nombre completo Contacto 2:</label>
                                <input type="text" id="emergencia2" name="emergencia2" placeholder="Contacto 2">
                            </div>

                            <div class="six wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i>Telefóno:</label>
                                <input type="text" id="telEmer2" name="telEmer2" placeholder="Teléfono contacto 2">
                            </div>

                            
                        </div>
                        
                    </div>

                    <div class="field">
                    <h3 style="color:red;text-align:left;margin-left:20px;"><i class="lock icon"></i>Permiso para retirarlo del colegio:</h3>
                        <br><div class="fields">
                            <div class="ten wide field" style="font-size:16px;">
                                <label><i class="user icon"></i>Nombre completo:</label>
                                <input type="text" id="auto1" name="auto1" placeholder="Contacto 1">
                            </div>

                            <div class="six wide field" style="font-size:16px;" >
                            <label><i class="question icon"></i><i class="user icon"></i>Parentesco:</label>
                                <select name="autoParen1" id="autoParen1" class="ui dropdown">
                                    <option value="Padre">Padre</option>
                                    <option value="Madre">Madre</option>
                                    <option value="Hermano/a">Hermano/a</option>
                                    <option value="Tío/a">Tío/a</option>
                                    <option value="Primo/a">Primo/a</option>
                                    <option value="Abuelo/a">Abuelo/a</option>
                                </select>
                            </div>

                            
                        </div>
                        
                    </div>
                    <div class="field">
                        <div class="fields">
                        <div class="ten wide field" style="font-size:16px;">
                                <label><i class="user icon"></i>Nombre completo:</label>
                                <input type="text" id="auto2" name="auto2" placeholder="Contacto 2">
                            </div>

                            <div class="six wide field" style="font-size:16px;">
                            <label><i class="question icon"></i><i class="user icon"></i>Parentesco:</label>
                                <select name="autoParen2" id="autoParen2" class="ui dropdown">
                                    <option value="Padre">Padre</option>
                                    <option value="Madre">Madre</option>
                                    <option value="Hermano/a">Hermano/a</option>
                                    <option value="Tío/a">Tío/a</option>
                                    <option value="Primo/a">Primo/a</option>
                                    <option value="Abuelo/a">Abuelo/a</option>
                                </select>
                            </div>

                            
                        </div>
                        
                    </div>
                    
                    <br>
                    <div class="ui divider"></div>

                    <div class="field">
                        <div class="fields">
                        <div class="four wide field" style="font-size:16px;">
                                <label><i class="bus icon"></i><i class="question icon"></i>¿Viajará solo?</label>
                                <br>
                                <input type="radio" name="viaje" value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="viaje" value="no"> No<br>
                        </div>

                            <div class="six wide field" style="font-size:16px;">
                                <label><i class="bus icon"></i>Viajará en el microbus de:</label>
                                <input type="text" id="propMicro" name="propMicro" placeholder="Nombre del responsable del microbús" disabled>
                            </div>

                            <div class="six wide field" style="font-size:16px;">
                                <label><i class="phone icon"></i>Telefóno:</label>
                                <input type="text" id="propMicroTel" name="propMicroTel" placeholder="Telefóno del responsable del microbús" disabled>
                            </div>

                            
                        </div>
                        
                    </div>

                    <div class="ui divider"></div>


</div>
</form>
    </div>
    <div class="actions">
        <button class="ui red deny button">Cancelar</button>
        <button class="ui blue button" id="btnGuardarTodo">Guardar Modificaciones</button>
    </div>
</div>



 <script src="./res/tablas/tablaAlumnos.js"></script>
 <script src="./res/tablas/tablaNotasLenguaje.js"></script>
 <script src="./res/tablas/tablaNotasMatematicas.js"></script>
 <script src="./res/tablas/tablaNotasSociales.js"></script>
 <script src="./res/tablas/tablaNotasCiencias.js"></script>
 <script src="./res/tablas/tablaNotasIngles.js"></script>
 <script src="./res/tablas/tablaNotasArtistica.js"></script>
 <script src="./res/tablas/tablaNotasEduFe.js"></script>
 <script src="./res/tablas/tablaNotasMoral.js"></script>
 <script src="./res/tablas/tablaNotasCompu.js"></script>
 <script src="./res/tablas/tablaNotasFisica.js"></script>
 <script src="./res/tablas/tablaNotasConducta.js"></script>
 <script src="./res/tablas/tablaColectorMes.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesLenguaje.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesMatematicas.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesCiencias.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesSociales.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesIngles.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesArtistica.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesFe.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesMoral.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesCompu.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesFisica.js"></script>
 <script src="./res/tablas/tablaNotasTrimestralesConducta.js"></script>




 <script>

$(document).ready(function(){
    var idGrado=8;
    mostrarAlumnos(idGrado);
});

$(document).ready(function(){
    $("#octavo").removeClass("ui olive button");
    $("#octavo").addClass("ui olive basic button");
   
    });

    $("#accion").change(function(){
    $("#trimestralesL").hide();
    $("#trimestralesM").hide();
    $("#trimestralesC").hide();
    $("#trimestralesS").hide();
    $("#trimestralesI").hide();
    $("#trimestralesArt").hide();
    $("#trimestralesFe").hide();
    $("#trimestralesMo").hide();
    $("#trimestralesCo").hide();
    $("#trimestralesFi").hide();
    $("#trimestralesCon").hide();

    $("#materias").dropdown('set selected', 'ninguno');
   $("#mesMat").hide();
   $("#colectorMes").hide();
   $("#mesNotas").dropdown('set selected', 'ninguno');
   $("#promedios").dropdown('set selected', 'ninguno');
   $("#mesColectores").dropdown('set selected', 'ninguno');
   $("#triMat").hide();
    $("#materiasTri").dropdown('set selected', 'ninguno');

var acc = $(this).val();

if(acc == 2){
 $("#sePro").hide();
 $("#nominaGe").hide();
   $("#seMat").show(1000);
   $("#mesCo").hide();
   $("#colectorMes").hide();
}
if(acc == 3){
   $("#seMat").hide();
   $("#nominaGe").hide();
  
   
   $("#mesMat").hide();
   
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
   
    $("#sePro").show(1000);
}
if(acc == 1){
   $("#seMat").hide();
   $("#sePro").hide();
   $("#colectorMes").hide();
   $("#mesMat").hide();
   $("#mesCo").hide();

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
    $("#mesMat").show(1000);
});


$("#promedios").change(function(){
    var vista = $(this).val();
    

    if(vista == 1){
        $("#trimestralesL").hide();
        $("#triMat").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();

        $("#mesCo").show(1000);
        $("#mesColectores").dropdown('set selected', 'ninguno');


    

    } else if(vista == 2){
        $("#colectorMes").hide();

        $("#mesCo").hide();
   
        $("#triMat").show(1000);
     $("#materiasTri").dropdown('set selected', 'ninguno');


    
    }
    
});

$("#materiasTri").change(function(){
 var ver = $(this).val();

 var d = new Date();
var anio = d.getFullYear();
var grado = "8";

 if(ver == 1){
    filtrarTablaTrimestreLenguaje(anio,grado);
    var table = $('#dtTrimestralesLenguaje').DataTable();
        table.destroy();

        $("#trimestralesL").fadeIn(1000);
        $("#dtTrimestralesLenguaje").fadeIn(1000);

        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }
 else if(ver == 2){
    filtrarTablaTrimestreMate(anio,grado);

    var table = $('#dtTrimestralesMate').DataTable();
        table.destroy();

         $("#trimestralesM").fadeIn(1000);
        $("#dtTrimestralesMate").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }

 else if(ver == 3){
    filtrarTablaTrimestreCiencias(anio,grado);

    var table = $('#dtTrimestralesCiencias').DataTable();
        table.destroy();

         $("#trimestralesC").fadeIn(1000);
        $("#dtTrimestralesCiencias").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }
 
 else if(ver == 4){
    filtrarTablaTrimestreSociales(anio,grado);

    var table = $('#dtTrimestralesSociales').DataTable();
        table.destroy();

         $("#trimestralesS").fadeIn(1000);
        $("#dtTrimestralesSociales").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }

 else if(ver == 5){
    filtrarTablaTrimestreIngles(anio,grado);

    var table = $('#dtTrimestralesIngles').DataTable();
        table.destroy();

         $("#trimestralesI").fadeIn(1000);
        $("#dtTrimestralesIngles").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }

 else if(ver == 6){
    filtrarTablaTrimestreArtistica(anio,grado);

    var table = $('#dtTrimestralesArtistica').DataTable();
        table.destroy();

         $("#trimestralesArt").fadeIn(1000);
        $("#dtTrimestralesArtistica").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }


 else if(ver == 7){
    filtrarTablaTrimestreFe(anio,grado);

    var table = $('#dtTrimestralesFe').DataTable();
        table.destroy();

         $("#trimestralesFe").fadeIn(1000);
        $("#dtTrimestralesFe").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
         }


 else if(ver == 8){
    filtrarTablaTrimestreMoral(anio,grado);

    var table = $('#dtTrimestralesMoral').DataTable();
        table.destroy();

         $("#trimestralesMo").fadeIn(1000);
        $("#dtTrimestralesMoral").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }

 else if(ver == 9){
    filtrarTablaTrimestreCompu(anio,grado);

    var table = $('#dtTrimestralesCompu').DataTable();
        table.destroy();

         $("#trimestralesCo").fadeIn(1000);
        $("#dtTrimestralesCompu").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesFi").hide();
        $("#trimestralesCon").hide();
 }

 else if(ver == 10){
    filtrarTablaTrimestreFisica(anio,grado);

    var table = $('#dtTrimestralesFisica').DataTable();
        table.destroy();

         $("#trimestralesFi").fadeIn(1000);
        $("#dtTrimestralesFisica").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesCon").hide();
 }
 else if(ver == 11){
    filtrarTablaTrimestreConducta(anio,grado);

    var table = $('#dtTrimestralesConducta').DataTable();
        table.destroy();

         $("#trimestralesCon").fadeIn(1000);
        $("#dtTrimestralesConducta").fadeIn(1000);

        $("#trimestralesL").hide();
        $("#trimestralesM").hide();
        $("#trimestralesC").hide();
        $("#trimestralesS").hide();
        $("#trimestralesI").hide();
        $("#trimestralesArt").hide();
        $("#trimestralesFe").hide();
        $("#trimestralesMo").hide();
        $("#trimestralesCo").hide();
        $("#trimestralesFi").hide();
 }
 else{

 }
});




$("#mesNotas").change(function(){
     var materia = $("#materias").val();
     var d = new Date();
var anio = d.getFullYear();

     var mesR = $("#mesNotas option:selected").text();

$(".mesVisto").text(mesR + '' +anio);

var acc = $("#mesNotas").val();
var grado = "8";

    if(materia == 1){
        $("#notasLenguaje").hide();
        var table = $('#dtNotasLenguaje').DataTable();
        table.destroy();
        $("#sePro").hide();
        $("#nominaGe").hide();

        fitrarTablaLenguaje(acc,anio,grado);

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
        $("#notasMatematicas").hide();
        var tableM = $('#dtNotasMatematicas').DataTable();
        tableM.destroy();
        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasMatematicas").fadeIn(1000);
        $("#dtNotasMatematicas").fadeIn(1000);

        fitrarTablaMate(acc,anio,grado);

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
        $("#notasCiencias").hide();

        $("#sePro").hide();
        $("#nominaGe").hide();
        $("#notasCiencias").fadeIn(1000);
        $("#dtNotasCiencias").fadeIn(1000);

        var tableC = $('#dtNotasCiencias').DataTable();
        tableC.destroy();
        fitrarTablaCiencias(acc,anio,grado);

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

        $("#notasSociales").hide();

        var tableS = $('#dtNotasSociales').DataTable();
        tableS.destroy();
        fitrarTablaSociales(acc,anio,grado);
       
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

        $("#notasIngles").hide();

        var tableI = $('#dtNotasIngles').DataTable();
        tableI.destroy();
        fitrarTablaIngles(acc,anio,grado);

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

        $("#notasArtistica").hide();

        var tableArt = $('#dtNotasArtistica').DataTable();
        tableArt.destroy();
        fitrarTablaArtistica(acc,anio,grado);

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

        
        $("#notasFe").hide();

        var tableFe = $('#dtNotasFe').DataTable();
        tableFe.destroy();
        fitrarTablaEduFe(acc,anio,grado);

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

        $("#notasMoral").hide();

        var tableMo = $('#dtNotasMoral').DataTable();
        tableMo.destroy();
        fitrarTablaMoral(acc,anio,grado);

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
        $("#notasInfo").hide();

        var tableInfo = $('#dtNotasInfo').DataTable();
        tableInfo.destroy();
        fitrarTablaInfo(acc,anio,grado);

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

        $("#notasFisica").hide();

        var tableFi = $('#dtNotasFisica').DataTable();
        tableFi.destroy();
        fitrarTablaFisica(acc,anio,grado);

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
        $("#notasConducta").hide();

        var tableCon = $('#dtNotasConducta').DataTable();
        tableCon.destroy();
        fitrarTablaConducta(acc,anio,grado);


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


var notasLenguaje=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();
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


var notasMatematicas=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();
var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Matemáticas");

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




var notasCiencias=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();
var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Ciencias Naturales");

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



var notasSociales=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Estudios Sociales");

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



var notasIngles=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Íngles");

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


var notasArtistica=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Educación Artística");

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


var notasEduFe=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Educación en la Fe");

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

var notasMoral=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Moral");

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


var notasInfo=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Computación");

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


var notasFisica=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Educación Física");

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

var notasConducta=(ele)=>{
    var mesR = $("#mesNotas option:selected").text();

    var d = new Date();
    var anio = d.getFullYear();

        var id = $(ele).attr("id");
        $("#materia").text("Conducta");

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

$("#guardar").click(function(){
    var id= $("#idAlumnoNota").val();
    var nota1 = $("#nota1").val();
    var nota2 = $("#nota2").val();
    var nota3 = $("#nota3").val();
    var mes = $("#mesNotas").val();
    var d = new Date();
    var anio = d.getFullYear();
    var materia = $("#materia").text();

    alertify.confirm("¿Desea guardar los datos?",
            function(){    

    if(materia == "Lenguaje"){
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
    }

    else if(materia == "Matemáticas"){
        $.ajax({
               
               type: 'POST',
               url: '?1=MatematicaController&2=guardarNotas',
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
                        title: '<h2 style="color:#0020FF;">Notas de Matemáticas modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/pen.gif',
                        imageWidth: 300,
                        imageHeight: 300,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasMatematicas').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Ciencias Naturales"){
        $.ajax({
               
               type: 'POST',
               url: '?1=CienciasController&2=guardarNotas',
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
                        title: '<h2 style="color:#FF0000;">Notas de Ciencias Naturales modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/ciencias.gif',
                        imageWidth: 300,
                        imageHeight: 300,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasCiencias').DataTable().ajax.reload();
                   }
               }
           });
    }


    else if(materia == "Estudios Sociales"){
        $.ajax({
               
               type: 'POST',
               url: '?1=SocialesController&2=guardarNotas',
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
                        title: '<h2 style="color:#366c8b;">Notas de Estudios Sociales modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/sociales.gif',
                        imageWidth: 275,
                        imageHeight: 225,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasSociales').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Íngles"){
        $.ajax({
               
               type: 'POST',
               url: '?1=InglesController&2=guardarNotas',
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
                        title: '<h2 style="color:#7A2828;">Notas de Íngles modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/english.gif',
                        imageWidth: 225,
                        imageHeight: 200,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasIngles').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Educación Artística"){
        $.ajax({
               
               type: 'POST',
               url: '?1=ArtisticaController&2=guardarNotas',
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
                        title: '<h2 style="color:#2E7C8B;">Notas de Educación Artística modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/artistica.gif',
                        imageWidth: 275,
                        imageHeight: 200,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasArtistica').DataTable().ajax.reload();
                   }
               }
           });
    }


    else if(materia == "Educación en la Fe"){
        $.ajax({
               
               type: 'POST',
               url: '?1=EducacionFeController&2=guardarNotas',
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
                        title: '<h2 style="color:#CF0C0B;">Notas de Educación en la Fe modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/eduFe.gif',
                        imageWidth: 215,
                        imageHeight: 200,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasFe').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Moral"){
        $.ajax({
               
               type: 'POST',
               url: '?1=MoralController&2=guardarNotas',
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
                        title: '<h2 style="color:#E7519E;">Notas de Moral modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/moral.gif',
                        imageWidth: 215,
                        imageHeight: 200,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasMoral').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Computación"){
        $.ajax({
               
               type: 'POST',
               url: '?1=InformaticaController&2=guardarNotas',
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
                        title: '<h2 style="color:#020490;">Notas de Computación modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/computer.gif',
                        imageWidth: 215,
                        imageHeight: 200,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasInfo').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Educación Física"){
        $.ajax({
               
               type: 'POST',
               url: '?1=FisicaController&2=guardarNotas',
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
                        title: '<h2 style="color:#020490;">Notas de Educación Física modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/fisica.gif',
                        imageWidth: 195,
                        imageHeight: 180,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasFisica').DataTable().ajax.reload();
                   }
               }
           });
    }

    else if(materia == "Conducta"){
        $.ajax({
               
               type: 'POST',
               url: '?1=ConductaController&2=guardarNotas',
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
                        title: '<h2 style="color:#020490;">Notas de Conducta modificadas</h2>',
                        text: 'Alumno/a : '+$("#alName").text(),
                        imageUrl: './res/img/conducta.gif',
                        imageWidth: 195,
                        imageHeight: 180,
                        allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: 'rgb(37, 37, 37)'
                        });
                        $('#dtNotasConducta').DataTable().ajax.reload();
                   }
               }
           });
    }

},
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
   
});



$("#mesColectores").change(function(){

    
     var d = new Date();
var anio = d.getFullYear();

if($(this) .val() == "ninguno"){

}else{

    var mesR = $("#mesColectores option:selected").text();

$(".mesVisto").text(mesR + '' +anio);

var acc = $("#mesColectores").val();
var grado = "8";

    var tableFi = $('#dtColector').DataTable();
        tableFi.destroy();
        fitrarTablaColector(acc,anio,grado);

       ;
        $("#colectorMes").fadeIn(1000);
        $("#dtColector").fadeIn(1000);
}

     
});


var verNomina=(ele)=>{
    $('#modalNomina').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');

         $("#btnDatosAlumno").removeClass("ui teal basic button");
         $("#btnDatosAlumno").addClass("ui teal basic button");

         $("#btnDatosPadres").removeClass("ui blue basic button");
         $("#btnDatosPadres").addClass("ui blue button");

         $("#btnDatosRes").removeClass("ui black basic button");
         $("#btnDatosRes").addClass("ui black button");

         $("#btnOtrosDatos").removeClass("ui orange basic button");
         $("#btnOtrosDatos").addClass("ui orange button");


        $("#datosAlumnos").show(1000);
        $("#datosPadres").hide(1000);
        $("#datosRespon").hide(1000);
        $("#otrosDatos").hide(1000);

        $("#nomNomina").text($(ele).attr("nombre"));
        $("#idEditar").val($(ele).attr("id"));
        $("#nombre").val($(ele).attr("nombre"));
        $("#nie").val($(ele).attr("nie"));
        $("#grado").dropdown('set selected', $(ele).attr("grado"));

        if($(ele).attr("sexo") == 'M'){
            $("input[name=sexo][value='M']").prop("checked",true);
        }else{
            $("input[name=sexo][value='F']").prop("checked",true);
        }

        if($(ele).attr("repiteGrado") == 'si'){
            $("input[name=repite][value='si']").prop("checked",true);
        }else{
            $("input[name=repite][value='no']").prop("checked",true);
        }

        if($(ele).attr("nuevoIngreso") == 'si'){
            $("input[name=nuevoIngreso][value='si']").prop("checked",true);
        }else{
            $("input[name=nuevoIngreso][value='no']").prop("checked",true);
        }

        if($(ele).attr("reingreso") == 'si'){
            $("input[name=reingreso][value='si']").prop("checked",true);
        }else{
            $("input[name=reingreso][value='no']").prop("checked",true);
        }

        $("#religion").dropdown('set selected', $(ele).attr("religion"));
        $("#escuelaAnterior").val($(ele).attr("escuelaAnterior"));
        $("#fechaNac").val($(ele).attr("fechaNac"));
        $("#departamentoNac").dropdown('set selected', $(ele).attr("departamento"));
        $("#municipio").val($(ele).attr("municipio"));
        $("#nacionalidad").val($(ele).attr("nacionalidad"));

        if($(ele).attr("naturalizado") == 'si'){
            $("input[name=naturalizado][value='si']").prop("checked",true);
        }else{
            $("input[name=naturalizado][value='no']").prop("checked",true);
        }


        if($(ele).attr("discapacidad") == 'si'){
            $("input[name=discapacidad][value='si']").prop("checked",true);
        }else{
            $("input[name=discapacidad][value='no']").prop("checked",true);
        }

        $("#expDiscapacidad").val($(ele).attr("expDiscapacidad"));

        if($(ele).attr("alergia") == 'si'){
            $("input[name=alergia][value='si']").prop("checked",true);
        }else{
            $("input[name=alergia][value='no']").prop("checked",true);
        }

        $("#expAlergia").val($(ele).attr("expAlergia"));



        if($(ele).attr("enfermedad") == 'si'){
            $("input[name=enfermedad][value='si']").prop("checked",true);
        }else{
            $("input[name=enfermedad][value='no']").prop("checked",true);
        }

        $("#expEnfermedad").val($(ele).attr("expEnfermedad"));
        $("#tipoSangre").dropdown('set selected', $(ele).attr("tipoSangre"));
        $("#direccion").val($(ele).attr("direccionRes"));
        $("#transporte").dropdown('set selected', $(ele).attr("medioTransporte"));
        $("#distanciaKM").val($(ele).attr("distancia"));
        $("#riesgos").val($(ele).attr("factoresRiesgos"));
        $("#ocupacion").val($(ele).attr("ocupacion"));


        if($(ele).attr("trabaja") == 'si'){
            $("input[name=trabajo][value='si']").prop("checked",true);
        }else{
            $("input[name=trabajo][value='no']").prop("checked",true);
        }

        $("#dependenciaEco").val($(ele).attr("dependenciaEco"));
        $("#correo").val($(ele).attr("correo"));
        $("#telefono").val($(ele).attr("telefono"));
        $("#nombrePadre").val($(ele).attr("nomPadre"));
        $("#lugarTPad").val($(ele).attr("lugarTrabajoP"));
        $("#telPadre").val($(ele).attr("telefonoPadre"));
        $("#nombreMadre").val($(ele).attr("nomMadre"));
        $("#lugarTMad").val($(ele).attr("lugarTrabajoM"));
        $("#telMadre").val($(ele).attr("telefonoMadre"));

        if($(ele).attr("viveCon") == 'Ambos'){
            $("input[name=viveCon][value='Ambos']").prop("checked",true);
            $("#viveOtro").prop('disabled',true);
            $("#viveOtro").val('');
        }
        else if($(ele).attr("viveCon") == 'Padre'){
            $("input[name=viveCon][value='Padre']").prop("checked",true);
            $("#viveOtro").prop('disabled',true);
           
        }
        else if($(ele).attr("viveCon") == 'Madre'){
            $("input[name=viveCon][value='Madre']").prop("checked",true);
            $("#viveOtro").prop('disabled',true);
        }
        else{
            $("input[name=viveCon][value='Otro']").prop("checked",true);
            $("#viveOtro").val($(ele).attr("viveOtro"));
            $("#viveOtro").prop('disabled',false);
        }

        $("#nombreRes").val($(ele).attr("nomResponsable"));
        $("#tipoIdRes").dropdown('set selected', $(ele).attr("tipoIden"));
        $("#numeroID").val($(ele).attr("numeroIden"));

        if($(ele).attr("familiar") == 'si'){
            $("input[name=familiar][value='si']").prop("checked",true);
            $("#parentesco").removeAttr('disabled');
        }
        else{
            $("input[name=familiar][value='no']").prop("checked",true);
            $("#parentesco").attr('disabled',true);
        }

        $("#parentesco").dropdown('set selected', $(ele).attr("parentesco"));
       

        if($(ele).attr("sexoRes") == 'M'){
            $("input[name=sexoRes][value='M']").prop("checked",true);
           
        }
        else{
            $("input[name=sexoRes][value='F']").prop("checked",true);
            
        }


        $("#estadoFam").dropdown('set selected', $(ele).attr("estadoFamiliar"));
        $("#fechaNacRes").val($(ele).attr("fechaNacRes"));

        $("#departamentoNacRes").dropdown('set selected', $(ele).attr("depRes"));
        $("#municipioRes").val($(ele).attr("munRes"));
        $("#nacionalidadRes").val($(ele).attr("nacRes"));
        $("#profesionRes").val($(ele).attr("proRes"));
        $("#escolaridad").dropdown('set selected', $(ele).attr("escRes"));
        $("#lugarTRes").val($(ele).attr("traRes"));
        $("#telRes").val($(ele).attr("telTrabajo"));

        if($(ele).attr("discRes") == 'si'){
            $("input[name=discapacidadRes][value='si']").prop("checked",true);
        }else{
            $("input[name=discapacidadRes][value='no']").prop("checked",true);
        }

        $("#expDiscapacidadRes").val($(ele).attr("expDiscRes"));

        $("#tipoSangreRes").dropdown('set selected', $(ele).attr("sangRes"));
        $("#direccionRes").val($(ele).attr("direRec"));

        $("#telDiRes1").val($(ele).attr("telRes1"));
        $("#telDiRes2").val($(ele).attr("telRes2"));

        $("#correoRes").val($(ele).attr("correoRes"));

        $("#emergencia1").val($(ele).attr("emergencia1"));
        $("#telEmer1").val($(ele).attr("telEmergencia1"));

        $("#emergencia2").val($(ele).attr("emergencia2"));
        $("#telEmer2").val($(ele).attr("telEmergencia2"));

        $("#auto1").val($(ele).attr("retiro1"));
        $("#autoParen1").dropdown('set selected', $(ele).attr("parentesco1"));
        $("#auto2").val($(ele).attr("retiro2"));
        $("#autoParen2").dropdown('set selected', $(ele).attr("parentesco2"));
       
        if($(ele).attr("viajaraSolo") == 'si'){
            $("input[name=viaje][value='si']").prop("checked",true);
        }else{
            $("input[name=viaje][value='no']").prop("checked",true);
            $("#propMicro").prop("disabled",false);
             $("#propMicroTel").prop("disabled",false);

            $("#propMicro").val($(ele).attr("microbusDe"));

            $("#propMicroTel").val($(ele).attr("telMicro"));
        }

        

}


$("#btnDatosAlumno").click(function(){
         $("#btnDatosAlumno").removeClass("ui teal basic button");
         $("#btnDatosAlumno").addClass("ui teal basic button");

         $("#btnDatosPadres").removeClass("ui blue basic button");
         $("#btnDatosPadres").addClass("ui blue button");

         $("#btnDatosRes").removeClass("ui black basic button");
         $("#btnDatosRes").addClass("ui black button");

         $("#btnOtrosDatos").removeClass("ui orange basic button");
         $("#btnOtrosDatos").addClass("ui orange button");


        $("#datosAlumnos").show(1000);
        $("#datosPadres").hide(1000);
        $("#datosRespon").hide(1000);
        $("#otrosDatos").hide(1000);
     });

     $("#btnDatosPadres").click(function(){


        $("#btnDatosAlumno").removeClass("ui teal basic button");
         $("#btnDatosAlumno").addClass("ui teal  button");

         $("#btnDatosPadres").removeClass("ui blue  button");
         $("#btnDatosPadres").addClass("ui blue basic button");

         $("#btnDatosRes").removeClass("ui black basic button");
         $("#btnDatosRes").addClass("ui black button");

         $("#btnOtrosDatos").removeClass("ui orange basic button");
         $("#btnOtrosDatos").addClass("ui orange button");


        $("#datosAlumnos").hide(1000);
        $("#datosPadres").show(1000);
        $("#datosRespon").hide(1000);
        $("#otrosDatos").hide(1000);
     });

     $("#btnDatosRes").click(function(){

        $("#btnDatosAlumno").removeClass("ui teal basic button");
         $("#btnDatosAlumno").addClass("ui teal  button");

         $("#btnDatosPadres").removeClass("ui blue basic  button");
         $("#btnDatosPadres").addClass("ui blue  button");

         $("#btnDatosRes").removeClass("ui black button");
         $("#btnDatosRes").addClass("ui black basic button");

         $("#btnOtrosDatos").removeClass("ui orange basic button");
         $("#btnOtrosDatos").addClass("ui orange button");


        $("#datosAlumnos").hide(1000);
        $("#datosPadres").hide(1000);
        $("#datosRespon").show(1000);
        $("#otrosDatos").hide(1000);
     });
     $("#btnOtrosDatos").click(function(){

        
        $("#btnDatosAlumno").removeClass("ui teal basic button");
         $("#btnDatosAlumno").addClass("ui teal  button");

         $("#btnDatosPadres").removeClass("ui blue basic  button");
         $("#btnDatosPadres").addClass("ui blue  button");

         $("#btnDatosRes").removeClass("ui black basic button");
         $("#btnDatosRes").addClass("ui black  button");

         $("#btnOtrosDatos").removeClass("ui gray button");
         $("#btnOtrosDatos").addClass("ui gray basic button");

        $("#datosAlumnos").hide(1000);
        $("#datosPadres").hide(1000);
        $("#datosRespon").hide(1000);
        $("#otrosDatos").show(1000);
     });
 

     $("input[name=discapacidad]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expDiscapacidad").prop("disabled",false);
        $("#expDiscapacidad").val('');
    }
    if(sector == "no"){
        $("#expDiscapacidad").prop("disabled",true);
        $("#expDiscapacidad").val('');
        $("#expDiscapacidad").val('Ninguna');
    }
});


$("input[name=enfermedad]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expEnfermedad").prop("disabled",false);
        $("#expEnfermedad").val('');
    }
    if(sector == "no"){
        $("#expEnfermedad").prop("disabled",true);
        $("#expEnfermedad").val('');
        $("#expEnfermedad").val('Ninguna');
    }
});

$("input[name=alergia]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expAlergia").prop("disabled",false);
        $("#expAlergia").val('');
    }
    if(sector == "no"){
        $("#expAlergia").prop("disabled",true);
        $("#expAlergia").val('');
        $("#expAlergia").val('Ninguna');
    }
});


$("input[name=discapacidadRes]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expDiscapacidadRes").prop("disabled",false);
        $("#expDiscapacidadRes").val('');
    }
    if(sector == "no"){
        $("#expDiscapacidadRes").prop("disabled",true);
        $("#expDiscapacidadRes").val('');
        $("#expDiscapacidadRes").val('Ninguna');
    }
});


$("input[name=viaje]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#propMicro").prop("disabled",true);
        $("#propMicroTel").prop("disabled",true);
        
        $("#propMicro").val('');

            $("#propMicroTel").val('');
    }
    if(sector == "no"){
        $("#propMicro").prop("disabled",false);
        $("#propMicroTel").prop("disabled",false);
    }
});

$("input[name=familiar]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
       
        $("#parentesco").removeAttr('disabled');
    }
    if(sector == "no"){
        $("#parentesco").attr('disabled',true);
    }
});

$("input[name=viveCon]").click(function(){
    var sector = $(this).val();

    if(sector == "Padre"){
        $("#viveOtro").val('');
        $("#viveOtro").prop("disabled",true);
        
    }
    if(sector == "Madre"){
        $("#viveOtro").prop('disabled',true);
        $("#viveOtro").val('');
    }

    if(sector == "Ambos"){
        $("#viveOtro").prop('disabled',true);
        $("#viveOtro").val('');
    }

    if(sector == "Otro"){
        $("#viveOtro").prop('disabled',false);
       
    }
});

$("#tipoIdRes").change(function(){
    var tipo = $(this).val();

    if(tipo == "dui"){
        $('#numeroID').val('');
        $('#numeroID').mask("99999999-9");
    
    }
    if(tipo == "nit"){
        $('#numeroID').val('');
        $('#numeroID').mask("9999-999999-999-9");
    }

   
});




$("#btnGuardarTodo").click(function(){

    alertify.confirm("¿Desea editar los datos del alumno?",
            function(){
                const form = $('#frmAlumno');

                const datosFormulario = new FormData(form[0]);


                $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=SolicitudController&2=editarSolicitudAlumno',
                data: datosFormulario,
                success: function(r) {
                if(r ==   1111) {
                       $("#modalNomina").modal('hide');
                        swal({
                            title: 'Modificado',
                            text: 'Datos guardados con éxito',
                            type: 'success',
                            showConfirmButton: true,

                        }).then((result) => {
                            
                            $('#dtNomina').DataTable().ajax.reload();
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
        


 </script>
        

