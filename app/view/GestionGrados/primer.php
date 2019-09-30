
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
            <form class="ui form" style="font-size:16px;background-color:#DBDDDD">
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
                                        <option value="6">Artística</option>
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
                                        <option value="6">Artística</option>
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
            
    <div id="nominaGe" style="">
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

    <br>
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



    <div id="colectorMes" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Colector de notas de <a class="mesVisto" style="color:green"></a></h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
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


    
    <div id="trimestralesL" style="display:none">
    <hr>
      

    <h2><i class="file icon"></i>Notas Trimestrales  de Lenguaje</h2>
            <div class="ui divider"></div>
            <div class="row">
            <div class="sixteen wide column">
                <table id="dtTrimestralesLenguaje" class="ui selectable very compact celled table" style="display:none;width:100%; margin:auto;">
                    <thead>
                    
                    
                    
                        <tr>
                        <th style="background-color: #00AFFE; color:white;text-align:center" rowspan="2">N°</th>
                        <th style="background-color: #007CAD; color:white;text-align:center" rowspan="2">Alumn@</th>
                            <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">1er Trimestre</th>
                            <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">2do Trimestre</th>
                            <th style="background-color: #1D0280; color:white;text-align:center" colspan="4">3er Trimestre</th>
                         
                            <th style="background-color: #FF532B; color:white;text-align:center" rowspan="2">Prom F</th>
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
    $("#trimestralesL").hide();
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
var grado = "1";

 if(ver == 1){
    filtrarTablaTrimestreLenguaje(anio,grado);
    var table = $('#dtTrimestralesLenguaje').DataTable();
        table.destroy();
    $("#trimestralesL").fadeIn(1000);
        $("#dtTrimestralesLenguaje").fadeIn(1000);
 }else{

 }
});




$("#mesNotas").change(function(){
     var materia = $("#materias").val();
     var d = new Date();
var anio = d.getFullYear();

     var mesR = $("#mesNotas option:selected").text();

$(".mesVisto").text(mesR + '' +anio);

var acc = $("#mesNotas").val();
var grado = "1";

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
var grado = "1";

    var tableFi = $('#dtColector').DataTable();
        tableFi.destroy();
        fitrarTablaColector(acc,anio,grado);

       ;
        $("#colectorMes").fadeIn(1000);
        $("#dtColector").fadeIn(1000);
}

     
});
 </script>
        

