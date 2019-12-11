<br>
<div id="app">
        <div class="ui grid">
            <div class="row">
            <div class="titulo">
            <?php
               if($_SESSION["descRol"] == 'Administrador/a') {
               
                ?>
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
                 <?php
               }
                 ?>        <br><br>
                    <font color="#0BBB2B" size="6px">
                    <i class="user icon"></i><i class="book icon"></i>
                    Gestión de Preparatoria</font>
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
                        
                            <th style="background-color: #0BBB2B; color:white;">N°</th>
                            <th style="background-color: #0BBB2B; color:white;">NIE</th>
                            <th style="background-color: #0BBB2B; color:white;">Nombre</th>
                            <th style="background-color: #0BBB2B; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
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
 <script>

$(document).ready(function(){
    var idGrado=12;
    mostrarAlumnos(idGrado);
});
$(document).ready(function(){
    $("#prepa").removeClass("ui green button");
    $("#prepa").addClass("ui green basic button");
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
        

