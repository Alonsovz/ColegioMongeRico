
<div id="app">
        <div class="ui grid">
            <div class="row">
                   
                    <font color="#08088A" size="6px">
                    <i class="user icon"></i><i class="book icon"></i>
                    Gestión como orientador de 1er grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
            <div class="ui divider"></div>
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
                        
                            <th style="background-color: #E6C404; color:white;">N°</th>
                            <th style="background-color: #08088A; color:white;">NIE</th>
                            <th style="background-color: #08088A; color:white;">Nombre</th>
                            <th style="background-color: #08088A; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
            </div>
 </div>
 <script src="./res/tablas/tablaNominaPrimer.js"></script>
 <script>

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
        

