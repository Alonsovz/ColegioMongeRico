<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");
  $query = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query1 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query2 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query3 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query4 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query5 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query6 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query7 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query8 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query9 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");
  $query10 = $mysqli -> query ("select u.nombre as nom,u.apellido as ape,u.codigoUsuario as idUsuario from usuario u inner join rol r on r.codigoRol = u.codigoRol where u.idEliminado=1 and u.codigoRol=2;");

  
?>
<div id="app">
        <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <a href="?1=MateriasOrientadoresController&2=prekinder" class="ui compact blue button" id="prekinder">Prekinder</a>
                    <a href="?1=MateriasOrientadoresController&2=kinder" class="ui compact teal button" id="kinder">Kinder</a>
                    <a href="?1=MateriasOrientadoresController&2=preparatoria" class="ui compact green button" id="prepa">Preparatoria</a>
                    <a href="?1=MateriasOrientadoresController&2=primerGrado" class="ui compact red button" id="primer">1er Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=segundoGrado" class="ui compact orange button" id="segundo">2do Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=tercerGrado" class="ui compact yellow button" id="tercer">3er Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=cuartoGrado" class="ui compact purple button" id="cuarto">4to Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=quintoGrado" class="ui compact violet button" id="quinto">5to Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=sextoGrado" class="ui compact brown button" id="sexto">6to Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=septimoGrado" class="ui compact black button" id="septimo">7mo Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=octavoGrado" class="ui compact olive button" id="octavo">8vo Grado</a>
                    <a href="?1=MateriasOrientadoresController&2=novenoGrado" class="ui compact gray button" id="noveno">9no Grado</a>
                        <br><br>
                    <font color="#DBA206" size="6px">
                    <i class="users icon"></i><i class="book icon"></i>
                    Asignación de materias y orientador de tercer grado</font>
                    <font color="#210B61" size="20px"> .</font>
                    </div>
            </div>
        </div>
        <br>
        <form class="ui form" id="frmIzquierda" >
            
            <div class="fields" >
                <div class="eight wide field" style="text-align:left; border: 2px solid #B40431;
                 border-radius: 18px 18px 18px 18px;background-color:#DBDDDD">
                    
                        <div class="fields" style="">
                           
                            <div class="sixteen wide field"><br>
                                <label style="font-size:20px;"> <i class="user circle icon"></i>Orientador:</label>
                                <select name="orientador" id="orientador">

                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <br><br>
                        </div>
                            <hr><br>
                        <div class="fields" >
                            <div class="sixteen wide field">
                                <label style="font-size:20px;"> <i class="book icon"></i><i class="user icon"></i>Asignación de materias</label>
                            </div>
                            <br>
                        </div>
                        <hr><br>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <label style="font-size:16px;"> <i class="book icon"></i>Materias básicas</label>
                            </div>
                            <br> 
                        </div>

                        <div class="fields">
                            <div class="eight wide field">
                                <label><i class="plus icon"></i>Matemáticas</label>
                                <select name="orientadorMa" id="orientadorMa">

                               
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query1)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <div class="eight wide field">
                                <label><i class="book icon"></i>Lenguaje</label>
                                <select name="orientadorLen" id="orientadorLen">

                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query2)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <br><br>
                        </div>

                        <div class="fields">
                            <div class="eight wide field">
                                <label><i class="recycle icon"></i>Ciencias</label>
                                <select name="orientadorCien" id="orientadorCien">

                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query3)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <div class="eight wide field">
                                <label><i class="globe icon"></i>Sociales</label>
                                <select name="orientadorSo" id="orientadorSo">
                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query4)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <br> 
                        </div>
                            <hr><br>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <label style="font-size:16px;"> <i class="book icon"></i><i class="globe icon"></i>Idiomas</label>
                            </div>
                            <br> 
                        </div>
                        <hr><br>
                        <div class="fields">
                        <div class="eight wide field">
                                <label><i class="book icon"></i>Íngles:</label>
                                <select name="orientadorIng" id="orientadorIng">
                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query5)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                   
                                </select>
                        </div>


                       
                        </div>

                    
                </div>
                
                <div class="fields">
                <div class="one wide field">
                <label style="font-size:20px; color:#fafafa;"> <i class="book icon"></i>Otras:</label>
                </div>
                </div>
                <div class="eight wide field" style="text-align:left; border: 2px solid #B40431; 
                border-radius: 18px 18px 18px 18px;background-color:#DBDDDD">
                <br><br>
                <hr>
                    
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
                                <select name="orientadorArtis" id="orientadorArtis" >
                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query6)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                        </div>
                        <div class="eight wide field">
                                <label><i class="mars icon"></i><i class="venus icon"></i>Moral:</label>
                                <select name="orientadorMo" id="orientadorMo">
                              
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query7)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                        </div>

                        
                        </div>

                        <div class="fields">
                        <div class="eight wide field">
                                <label><i class="futbol icon"></i><i class="table tennis icon"></i>Educación física</label>
                                <select name="orientadorFis" id="orientadorFis">
                               
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query8)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                        </div>
                        
                        <div class="eight wide field">
                                <label><i class="computer icon"></i>Informática</label>
                                <select name="orientadorInfo" id="orientadorInfo">
                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query9)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                </select>
                        </div>



                        </div>
                       
                     
                         <div class="eight wide field">
                                <label><i class="book icon"></i>Educación en la fe:</label>
                                <select name="orientadorFe" id="orientadorFe">
                                
                                <?php
                                
                                while ($valores = mysqli_fetch_array($query10)) {
                                    echo '<option value="'.$valores["idUsuario"].'">'.utf8_encode($valores["nom"]).' '.utf8_encode($valores["ape"]).'</option>';
                                }
                                ?>
                                   
                                </select>
                        </div>

                    
                </div>
            </div>
    </form>
    <center>
        <button class="ui red button" id="guardarTodo"><i class="save icon"></i>Guardar todo</button>
    </center>

</div>
<script>
var app = new Vue({
        el: "#app",
        data: {
           
        },
        methods: {

            cargarDatos(){
                

                fetch("?1=MateriasOrientadoresController&2=datosGenerales&grado="+3)
                    .then(response => {
                        return response.json();
                    })
                    .then(dat => {

                        console.log(dat);

                        $('#frmIzquierda select[name="orientador"]').val(dat.orientador);
                        $('#frmIzquierda select[name="orientadorMa"]').val(dat.orientadorMate);
                        $('#frmIzquierda select[name="orientadorLen"]').val(dat.orientadorLen);
                        $('#frmIzquierda select[name="orientadorCien"]').val(dat.orientadorCien);
                        $('#frmIzquierda select[name="orientadorSo"]').val(dat.orientadorSoc);
                        $('#frmIzquierda select[name="orientadorIng"]').val(dat.orientadorIng);
                        $('#frmIzquierda select[name="orientadorInfo"]').val(dat.orientadorInfo);
                        $('#frmIzquierda select[name="orientadorFis"]').val(dat.orientadorFis);
                        $('#frmIzquierda select[name="orientadorArtis"]').val(dat.orientadorArt);
                        $('#frmIzquierda select[name="orientadorMo"]').val(dat.orientadorMo);
                        
                      
                    })
                    .catch(err => {
                        console.log(err);
                    });
            },
           
            

        }
    });
</script>
<script>
    $(document).ready(function(){
    $("#tercer").removeClass("ui yellow button");
    $("#tercer").addClass("ui yellow basic button");
    app.cargarDatos();
    });

    $("#guardarTodo").click(function(){
        alertify.confirm("¿Desea guardar los datos?",
            function(){
           var orientador = $("#orientador").val();
           var orientadorMate = $("#orientadorMa").val();
           var orientadorLen = $("#orientadorLen").val();
           var orientadorCien = $("#orientadorCien").val();
           var orientadorSoc = $("#orientadorSo").val();
           var orientadorIng = $("#orientadorIng").val();
           var orientadorArt = $("#orientadorArtis").val();
           var orientadorInfo = $("#orientadorInfo").val();
           var orientadorFis = $("#orientadorFis").val();
           var orientadorMo = $("#orientadorMo").val();
           var orientadorFe = $("#orientadorFe").val();
           var idGrado= 3;
          


             $.ajax({
                type: 'POST',
                url: '?1=MateriasOrientadoresController&2=guardarDatos',
                data: {
                    orientador : orientador,
                    orientadorMate : orientadorMate,
                    orientadorLen : orientadorLen,
                    orientadorCien : orientadorCien,
                    orientadorSoc : orientadorSoc,
                    orientadorIng : orientadorIng,
                    orientadorArt : orientadorArt,
                    orientadorInfo : orientadorInfo,
                    orientadorFis : orientadorFis,
                    orientadorMo : orientadorMo,
                    orientadorFe : orientadorFe,
                    idGrado : idGrado,
                    
                },
                success: function(r) {
                    if(r == 1) {
                        
                        swal({
                           
                            title: 'Datos guardados con éxito',
                            text: 'Se ha asignado el orientador y los docentes que impartirán las materias de tercer grado',
                            type: 'success',
                            showConfirmButton: true,

                        }).then((result) => {
                            location.href ="?1=MateriasOrientadoresController&2=tercerGrado";
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