<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");

  $anioC = $mysqli -> query ("select anio from anio");
  $fila1 = $anioC->fetch_assoc();

  $anio = $fila1['anio'];

  ?>

<div id="app">
    <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <i class="calendar icon"></i>
                        Configuración de año escolar <font color="#210B61" size="20px">.</font>
                    </div>
            </div>
    </div>

    <br><br>
    <div  style="background-color:#D8D8D8;-webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1); text-align:center">
    <hr>

    <form class="ui form" style="margin-left:20px;margin-right:20px;">
    <div class="field">
        <div class="fields">
            <div class="six wide field"></div>
            <div class="six wide field">
            <br>
                <label style="font-size:20px;color:blue;"><i class="calendar icon"></i> Año escolar en curso:</label>
              <br>
                <input type="text" id="anio" value="<?php echo $anio; ?>" style="font-size:20px;
                text-align:center;font-weight:bold;">
            </div>
            <div class="six wide field"></div>
        </div>
        
    </div>
    </form>
        <br>
        <center><button class="ui red button" id="guardarAnio"> <i class="save icon"></i>Guardar</button></center>
        <br>
    </div>
</div>


<script>
    
    $("#guardarAnio").click(function(){
            alertify.confirm("¿Desea guardar el año escolar en curso?",
            function(){ 
                $.ajax({
               
               type: 'POST',
               url: '?1=UsuarioController&2=guardarAnioEscolar',
               data: {
                   anio : $("#anio").val(),
               },
               success: function(r) {
                if(r == 111) {
                        swal({
                            title: 'Cambios guardados',
                            text: 'Año guardado con éxito',
                            type: 'success',
                            showConfirmButton: false,
                                timer: 1700

                        }).then((result) => {
                           
                                location.reload();
                            
                        }); 
        
                    } 
               }
           });
            },
            function(){
                alertify.error('Cancelado');
                
            }); 

        });
  
</script>