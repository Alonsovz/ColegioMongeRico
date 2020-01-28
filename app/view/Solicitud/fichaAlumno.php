<br>
<div id="app">
        <div class="ui grid">
                <div class="row">
                   
                    <font color="#08088A" size="5px">
                    <i class="plus icon"></i><i class="file outline icon"></i>
                    Ficha de Ingreso <a id="year" style="color:#08088A;"></a> .</font>

                    
                    </div>
                   
                   
                
            </div>
            <div class="ui divider"></div>
            <button class="ui teal button" id="btnDatosAlumno"><i class="child icon"></i>Datos del alumno/a</button>
            <button class="ui blue button" id="btnDatosPadres"><i class="male icon"></i><i class="female icon"></i>
            Datos de los padres</button>
            <button class="ui black button" id="btnDatosRes"><i class="user circle icon"></i>Datos del reponsable</button>
            <button class="ui gray button" id="btnOtrosDatos"><i class="exclamation triangle icon"></i>Otros datos</button>
            <button class="ui right floated red labeled icon button" id="btnGuardarTodo">
                        <i class="save icon"></i>
                        Guardar todo
                    </button>
         <div class="ui divider"></div>
           
<div class="content" style="text-align:center; border: 1px solid black; background-color: #DBDDDD;">


    
<form class="ui form" style="font-size:23px;margin-left:20px;margin-right:20px; " id="frmAlumno" method="POST" method="POST" enctype="multipart/form-data">
        <div id="datosAlumnos">
            <h2 style="color:#04B486;"><i class="child icon"></i> Datos del alumno/a</h2>
            <hr><br>
                    <div class="field">
                        <div class="fields">
                            <div class="four wide field" style="font-size:16px;">
                                <label><i class="address card outline icon"></i>NIE:</label>
                                <input type="text" id="nie" name="nie" placeholder="NIE">
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
                                    <option value="Peatonal">Peatonal</option>
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
                            <div class="five wide field" style="font-size:16px;">
                            <label><i class="envelope icon"></i> Correo Electrónico</label>
                                <input type="text" id="correo" name="correo" placeholder="Correo Electrónico">
                        </div>

                        <div class="six wide field" style="font-size:16px;">
                            <label><i class="phone icon"></i>Teléfono</label>
                                <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
                        </div>

                        <div class="five wide field" style="font-size:16px;">
                            <label style="font-size:20px;"><i class="address card icon"></i>N° de Talonario</label>
                            <input type="text" name="nTalonario" id="nTalonario" placeholder="N° Talonario">
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
                            <div class="four wide field" style="font-size:16px;">
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

                            <div class="two wide field" style="font-size:16px;">
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
                                    <option value="Acompañado/a">Acompañado/a</option>
                                </select>
                            </div>
                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="calendar icon"></i> Fecha de Nacimiento:</label>
                                <input type="date" id="fechaNacRes" name="fechaNacRes">
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                        <label><i class="map maker icon"></i>Departamento de Nacimiento:</label>
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
                                <label><i class="map maker icon"></i> Municipio de Nacimiento:</label>
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
                                <input type="text" id="telDiRes1" name="telDiRes1" placeholder="Teléfono 1">
                                <br><br>
                                <input type="text" id="telDiRes2" name="telDiRes2" placeholder="Teléfono 2">
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

                        
                        <div class="eight wide field" style="font-size:16px;">
                            <label><i class="exclamation triangle icon"></i> Factores de riesgo</label>
                            <textarea rows="3" name="riesgosRes" id="riesgosRes" placeholder="Riesgos a los que se expone"></textarea>
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

    <div class="field">
                        <div class="fields">

                        <div class="sixteen wide field" style="font-size:16px;">
                        <br>
                        <h3 style="color:blue;text-align:left;margin-left:20px;"><i class="heart icon"></i>Hermanos que estudian en el colegio:</h3>
                        <span style="float:right;">
                           <a @click="agregarDetalleHer" class="ui teal circular icon button"><i class="plus icon"></i> Agregar</a>
                        </span>        <br><br><br>
                <form action="" class="ui form" id="frmHeramnos" >
                        <table class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                                <thead>
                                    <tr>
                                        <th style="background-color: #217CD1; color:white;"><i class="building icon"></i>Nombre Completo</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="chart bar icon"></i>Grado</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="trash icon"></i>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(hermano, index) in hermanos">
                                    <td>  
                                    <input class="requerido" v-model="hermano.nombreHer" name="nombreHer" id="nombreHer" type="text"
                                     placeholder="Nombre completo">
                                    </td>
                                   
                                    <td>  
                                    <select v-model="hermano.gradoHer" name="gradoHer" id="gradoHer">
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
                                    <option value="13">Bachillerato</option>
                                    </select>
                                    </td>
                                    
                                    <td>
                                    <center>
                    </form>
                              <a  @click="eliminarDetalleHer(index)" class="ui negative mini circular icon button"><i
                                  class="times icon"></i></a>
                                  </center>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    
                        </div>
                        
                        
                         </div>
</div>

                        
                   

                    <br>
                    <div class="ui divider"></div>

                    <div class="field">
                        <div class="fields">
                        <div class="four wide field" style="font-size:16px;">
                            Lourdes, <a id="dia" style="color:black;"></a> de <a id="mes" style="color:black;"></a> del año 
                            <a id="anio" style="color:black;"></a>.
                                
                        </div>                            
                        </div>
                        
                    </div>


</div>
</form>

</div>


 </div>
 <script>
  $(document).ready(function(){
    
    $('#telefono').mask("9999-9999");
    $('#telMadre').mask("9999-9999");
    $('#telPadre').mask("9999-9999");
    $('#telEmer1').mask("9999-9999");
    $('#telEmer2').mask("9999-9999");
    $('#propMicroTel').mask("9999-9999");
    $('#telDiRes1').mask("9999-9999");
    $('#telDiRes2').mask("9999-9999");
    $('#telRes').mask("9999-9999");
    $('#distanciaKM').mask("###0.00 km", {reverse: true});
    $('#numeroID').mask("99999999-9");
}); 
var app = new Vue({
        el: "#app",
        data: {
            hermanos: [{
                nombreHer: '',
                gradoHer: '10',
               
               
            }],
        },
        methods: {
            eliminarDetalleHer(index) {
                this.hermanos.splice(index, 1);
            },
            agregarDetalleHer() {
                this.hermanos.push({
                    nombreHer: '',
                    gradoHer: '10',
            
                });
            
            },
            guardarHermanos() {

            if (this.hermanos.length) {

                $('#frmHeramnos').addClass('loading');
                $.ajax({
                    type: 'POST',
                    data: {
                        lista: JSON.stringify(this.hermanos)
                    },
                    url: '?1=SolicitudController&2=guardarHermanos',
                    success: function (r) {
                        $('#frmHeramnos').removeClass('loading');
                        if (r == 1) {
                            
                                    app.hermanos = [{
                                        nombreHer: '',
                                         gradoHer: '10'
                                    }];

                                
                                        
                        }
                        
                    }
                });
            }

            },


        }
    });
</script>
 <script>
     $(document).ready(function(){
        var d = new Date();
        var n = d.getFullYear();

        var dia = String(d.getDate()).padStart(2, '0');
var mes = String(d.getMonth() + 1).padStart(2, '0'); //January is 0!
if(mes==01){
    var mesA='Enero';
}
if(mes==02){
    var mesA='Febrero';
}
if(mes==03){
    var mesA='Marzo';
}
if(mes==04){
    var mesA='Abril';
}
if(mes==05){
    var mesA='Mayo';
}
if(mes==06){
    var mesA='Junio';
}
if(mes==07){
    var mesA='Julio';
}
if(mes==08){
    var mesA='Agosto';
}
if(mes==09){
    var mesA='Septiembre';
}
if(mes==10){
    var mesA='Octubre';
}
if(mes==11){
    var mesA='Noviembre';
}
if(mes==12){
    var mesA='Diciembre';
}

var anio = d.getFullYear();


        $("#dia").text(dia);
        $("#mes").text(mesA);
        $("#anio").text(anio);
        $("#year").text(n);
        $("#datosPadres").hide();
        $("#datosRespon").hide();
        $("#otrosDatos").hide();
        $("#btnDatosAlumno").removeClass("ui teal button");
         $("#btnDatosAlumno").addClass("ui teal basic button");
     });

     $("#btnDatosAlumno").click(function(){
         $("#btnDatosAlumno").removeClass("ui teal basic button");
         $("#btnDatosAlumno").addClass("ui teal basic button");

         $("#btnDatosPadres").removeClass("ui blue basic button");
         $("#btnDatosPadres").addClass("ui blue button");

         $("#btnDatosRes").removeClass("ui black basic button");
         $("#btnDatosRes").addClass("ui black button");

         $("#btnOtrosDatos").removeClass("ui gray basic button");
         $("#btnOtrosDatos").addClass("ui gray button");


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

         $("#btnOtrosDatos").removeClass("ui gray basic button");
         $("#btnOtrosDatos").addClass("ui gray button");


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

         $("#btnOtrosDatos").removeClass("ui gray basic button");
         $("#btnOtrosDatos").addClass("ui gray button");


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
    }
    if(sector == "no"){
        $("#expDiscapacidad").prop("disabled",true);
        $("#expDiscapacidad").val('');
    }
});


$("input[name=enfermedad]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expEnfermedad").prop("disabled",false);
    }
    if(sector == "no"){
        $("#expEnfermedad").prop("disabled",true);
        $("#expEnfermedad").val('');
    }
});

$("input[name=alergia]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expAlergia").prop("disabled",false);
    }
    if(sector == "no"){
        $("#expAlergia").prop("disabled",true);
        $("#expAlergia").val('');
    }
});


$("input[name=discapacidadRes]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#expDiscapacidadRes").prop("disabled",false);
    }
    if(sector == "no"){
        $("#expDiscapacidadRes").prop("disabled",true);
        $("#expDiscapacidadRes").val('');
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
       
        $("#viveOtro").prop("disabled",true);
        $("#viveOtro").val('');
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
    alertify.confirm("¿Desea guardar los datos del alumno?",
            function(){
                const form = $('#frmAlumno');

                const datosFormulario = new FormData(form[0]);


                $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=SolicitudController&2=guardarSolicitudAlumno',
                data: datosFormulario,
                success: function(r) {
if(r == 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111) {
                       
                        swal({
                            title: 'Registrado',
                            text: 'Datos guardados con éxito',
                            type: 'success',
                            showConfirmButton: true,

                        }).then((result) => {
                            
                               location.href = '?1=SolicitudController&2=fichaAlumno';
                        }); 
                        app.guardarHermanos();
                       
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