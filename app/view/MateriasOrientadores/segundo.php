<br><br>
<div id="app">
        <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <a href="?1=MateriasOrientadoresController&2=prekinder" class="ui blue button" id="prekinder">Prekinder</a>
                    <a href="?1=MateriasOrientadoresController&2=kinder" class="ui teal button" id="kinder">Kinder</a>
                    <a href="?1=MateriasOrientadoresController&2=preparatoria" class="ui green button" id="prepa">Preparatoria</a>
                    <a href="?1=MateriasOrientadoresController&2=primerGrado" class="ui red button" id="primer">1er Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=segundoGrado" class="ui orange button" id="segundo">2do Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=tercerGrado" class="ui yellow button" id="tercer">3er Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=cuartoGrado" class="ui purple button" id="cuarto">4to Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=quintoGrado" class="ui violet button" id="quinto">5to Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=sextoGrado" class="ui brown button" id="sexto">6to Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=septimoGrado" class="ui black button" id="septimo">7mo Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=octavoGrado" class="ui olive button" id="octavo">8vo Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=novenoGrado" class="ui gray button" id="noveno">9no Grado</a>
                    <br><br><br>
                    <font color="#DF7401" size="6px">
                    <i class="users icon"></i><i class="book icon"></i>
                    Asignación de materias y orientador de segundo grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
        </div>
        <br><br>
        <form class="ui form">
            
            <div class="fields">
                <div class="eight wide field" style="text-align:left; border: 2px solid #DF7401; border-radius: 18px 18px 18px 18px;">
                    <form class="ui form" >
                        <div class="fields">
                           
                            <div class="sixteen wide field"><br>
                                <label style="font-size:20px;"> <i class="user circle icon"></i>Orientador:</label>
                                <select name="orientador" id="orientador" class="ui search dropdown"></select>
                            </div>
                            <br><br><br><br><br>
                        </div>
                            <hr><br>
                        <div class="fields" >
                            <div class="sixteen wide field">
                                <label style="font-size:20px;"> <i class="book icon"></i><i class="user icon"></i>Asignación de materias</label>
                            </div>
                            <br>
                        </div>
                        <hr><br><br><br>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <label style="font-size:16px;"> <i class="book icon"></i>Materias básicas</label>
                            </div>
                            <br> 
                        </div>

                        <div class="fields">
                            <div class="eight wide field">
                                <label><i class="plus icon"></i>Matemáticas</label>
                                <select name="orientadorMa" id="orientadorMa" class="ui search dropdown"></select>
                            </div>
                            <div class="eight wide field">
                                <label><i class="book icon"></i>Lenguaje</label>
                                <select name="orientadorLen" id="orientadorLen" class="ui search dropdown"></select>
                            </div>
                            <br><br>
                        </div>

                        <div class="fields">
                            <div class="eight wide field">
                                <label><i class="recycle icon"></i>Ciencias</label>
                                <select name="orientadorCien" id="orientadorCien" class="ui search dropdown"></select>
                            </div>
                            <div class="eight wide field">
                                <label><i class="globe icon"></i>Sociales</label>
                                <select name="orientadorSo" id="orientadorSo" class="ui search dropdown"></select>
                            </div>
                            <br> 
                        </div>

                    </form>
                </div>
                
                <div class="fields">
                <div class="one wide field">
                <label style="font-size:20px; color:#fafafa;"> <i class="book icon"></i>Otras:</label>
                </div>
                </div>
                <div class="eight wide field" style="text-align:left; border: 2px solid #DF7401; border-radius: 18px 18px 18px 18px;">
                <br>
                <hr>
                    <form class="ui form" >
                        <div class="fields">
                            <div class="sixteen wide field">
                                <br>
                                <label style="font-size:20px;"> <i class="book icon"></i>Otras:</label>
                            </div>
                        </div>
                        <hr><br><br>

                        <div class="fields">
                        <div class="eight wide field">
                                <label><i class="pencil icon"></i>Artística:</label>
                                <select name="orientadorArtis" id="orientadorArtis" class="ui search dropdown"></select>
                        </div>
                        <div class="eight wide field">
                                <label><i class="mars icon"></i><i class="venus icon"></i>Moral:</label>
                                <select name="orientadorMo" id="orientadorMo" class="ui search dropdown"></select>
                        </div>

                        
                        </div>

                        <div class="fields">
                        <div class="eight wide field">
                                <label><i class="futbol icon"></i><i class="table tennis icon"></i>Educación física</label>
                                <select name="orientadorFis" id="orientadorFis" class="ui search dropdown"></select>
                        </div>
                        </div>
                        <hr>
                        <div class="fields">
                        <div class="sixteen wide field">
                                <br>
                                <label style="font-size:20px;"> <i class="building icon"></i>Salón asignado:</label>
                            </div>
                        </div>
                        <hr><br>
                        <div class="fields">
                        <div class="ten wide field">
                                <label><i class="building icon"></i>Aula a asignar:</label>
                                <select name="aulaAsig" id="aulaAsig" class="ui dropdown">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
    </form>
    <center>
        <button class="ui orange button" id="guardarTodo"><i class="save icon"></i>Guardar todo</button>
    </center>

</div>

<script>
    $(document).ready(function(){
    $("#segundo").removeClass("ui orange button");
    $("#segundo").addClass("ui orange basic button");
    });
</script>