<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");

  $query = $mysqli -> query ("select * from inventarioCal where idEliminado=1;");
  $query1 = $mysqli -> query ("select * from inventarioCal where idEliminado=1;");
 
  ?>

<div id="app">
<modal-eliminar id_form="frmEliminar" id="modalEliminar" url="?1=InventarioController&2=eliminarC" titulo="Eliminar"
        sub_titulo="¿Está seguro de querer eliminar el elemento?" :campos="campos_eliminar" tamanio='tiny'></modal-eliminar>

        <div class="ui grid">
        <div class="row">
                <div class="titulo">
                <a href="?1=InventarioController&2=calcetas" class="ui teal button" id="calcetas">Calcetas</a>
                <a href="?1=InventarioController&2=uniformes" class="ui black button" id="uniformes">Uniformes</a>
                <br><br>
                <i class="calendar check icon"></i>
                    Inventario de Calcetas<font color="#210B61" size="20px">.</font>
                </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                    <button class="ui right floated green labeled icon button" id="btnModalRegistroTalla">
                            <i class="plus icon"></i>
                            Agregar nueva talla
                </button>

                <button class="ui right floated red labeled icon button" id="btnModalRegistroVenta">
                    <i class="plus icon"></i>
                    Agregar Venta
                </button>

                <button class="ui right floated blue labeled icon button" id="btnModalRegistroExis">
                    <i class="plus icon"></i>
                    Agregar a existencia
                </button>
            </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="sixteen wide column">
                <table id="dtCalcetas" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #0BAF8F; color:white;">N°</th>
                            <th style="background-color: #0BAF8F; color:white;width:33%;">Talla</th>
                            <th style="background-color: #0BAF8F; color:white;width:33%;">Existencia</th>
                            <th style="background-color: #0BAF8F; color:white;width:33%;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="nuevaTalla" class="ui tiny modal">
    <div class="header">
      <i class="plus icon"></i>  Nueva talla de calcetas
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Nombre de talla:</label>
                    <input type="text" name="tallaN" id="tallaN" placeholder="Nombre de la talla">
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Existencia (Pares) :</label>
                    <input type="text" name="existencia" id="existencia" placeholder="Cantidad de pares a guardar">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <button class="ui deny red button" onclick="limpiar()">
            Cancelar
        </button>
        <button class="ui teal button" id="guardarNueva">
            Guardar
        </button>
    </div>
</div>


<div id="nuevaVenta" class="ui tiny modal">
    <div class="header">
      <i class="plus icon"></i>  Nueva venta de calcetas
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
            <div class="fields">
                    <div class="sixteen wide field">
                    <label>Nombre de talla:</label>
                    <select name="tallaNV" id="tallaNV" class="ui dropdown">
                                 <?php        
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["id"].'">'.$valores["talla"].'</option>';
                                }
                                ?>
                    </select>
                    <br><br>
                                Existencia (Pares):
                                <div id="existenciaV"></div>
                    <br>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Cantidad de pares vendidos:</label>
                    <input type="text" name="vendidos" id="vendidos" placeholder="Cantidad de pares vendidos">
                    <br><br>
                    <div class="ui red pointing label"  id="errorExis"  style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                   No puedes haber vendido mas que la cantidad en existencia
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <button class="ui deny red button" onclick="limpiar()">
            Cancelar
        </button>
        <button class="ui teal button" id="guardarNuevaC">
            Guardar
        </button>
    </div>
</div>


<div id="actualizarExis" class="ui tiny modal">
    <div class="header">
      <i class="plus icon"></i>  Actualizar existencias de calcetas
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <div class="fields">
                <div class="sixteen wide field">
                    <label>Nombre de talla:</label>
                    <select name="tallaEx" id="tallaEx" class="ui dropdown">
                                 <?php        
                                while ($valores = mysqli_fetch_array($query1)) {
                                    echo '<option value="'.$valores["id"].'">'.$valores["talla"].'</option>';
                                }
                                ?>
                    </select>
                    <br><br>
                                Existencia (Pares):
                                <div id="existenciaEx"></div>
                    <br>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Cantidad de pares de calcetas a agregar:</label>
                    <input type="text" name="acExis" id="acExis" placeholder="Cantidad de pares de calcetas agregados a existencia">
                    <br>
                    <br>
                    Nuevo monto: <a id="new" style="color:black"></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <button class="ui deny red button" onclick="limpiar()">
            Cancelar
        </button>
        <button class="ui teal button" id="guardarNuevaEx">
            Guardar
        </button>
    </div>
</div>

<script src="./res/tablas/tablaCalcetas.js"></script>
<script src="./res/js/modalEliminar.js"></script>
<script>
    function limpiar(){
        $("#acExis").val('');
    $("#vendidos").val('');
    $("#existencia").val('');
    $("#tallaN").val('');
    $("#new").text('');
    }
    $(document).ready(function(){
    $("#calcetas").removeClass("ui teal button");
    $("#calcetas").addClass("ui teal basic button");
    $("#acExis").mask("99999999999999999999999");
    $("#vendidos").mask("99999999999999999999999");
    $("#existencia").mask("99999999999999999999999");



    
    });
</script>

<script>
var app = new Vue({
        el: "#app",
        data: {
            campos_eliminar: [{
                name: 'idEliminar',
                type: 'hidden'
            }]
        },
        methods: {
            refrescarTabla() {
                tablaCalcetas.ajax.reload();
            }
            
        }
    });
</script>

<script>
$(document).on("click", ".btnEliminar", function () {
            $('#modalEliminar').modal('setting', 'closable', false).modal('show');
            $('#idEliminar').val($(this).attr("id"));
        });
</script>


<script>
$(document).on("click", ".btnEliminar", function () {
            $('#modalEliminar').modal('setting', 'closable', false).modal('show');
            $('#idEliminar').val($(this).attr("id"));
        });

$("#btnModalRegistroTalla").click(function(){
    $('#nuevaTalla').modal('setting', 'closable', false).modal('show');
});


$("#btnModalRegistroVenta").click(function(){
    $('#nuevaVenta').modal('setting', 'closable', false).modal('show');
});

$("#btnModalRegistroExis").click(function(){
    $('#actualizarExis').modal('setting', 'closable', false).modal('show');
});


$("#guardarNueva").click(function(){
    var nombre = $("#tallaN").val();
    var existencia = $("#existencia").val();
    $.ajax({
                    type: 'POST',
                    url: '?1=InventarioController&2=registrarTallaC',
					data: {
                        nombre: nombre,
                        existencia: existencia,
                    },
                    success: function(r) {
                                    if(r == 1) {
                                        $('#nuevaTalla').modal('hide');
                                        swal({
                                            title: 'Talla registrada',
                                            text: 'Guardado con éxito',
                                            type: 'success',
                                            showConfirmButton: true

                                        }).then((result) => {
                                            location.href='?1=InventarioController&2=calcetas';
                                            $('#dtCalcetas').DataTable().ajax.reload();
                                        }); 
                                       
                                       limpiar();
                                    } 
                                }
            });
});
$("#acExis").keyup(function(){
    var cantidadEx= parseInt($("#existenciaEx").text());
    var cantidadNew= parseInt($("#acExis").val());

   

    if($("#acExis").val()>0) {
        var total = cantidadEx + cantidadNew;
        $("#new").text(total);
    }
    if($("#acExis").val()== ''){
       
        $("#new").text(cantidadEx);
    }
   
});

$("#guardarNuevaC").click(function(){
    var cantidad= parseInt($("#existenciaV").text());
    var vendidos = parseInt($("#vendidos").val());
    var idTalla = $("#tallaNV").val();

    if(vendidos>cantidad){
       $("#errorExis").css("display","block");
        
    }else{
        alertify.confirm("¿Desea guardar los datos de venta?",
            function(){
             $.ajax({
                    type: 'POST',
                    url: '?1=InventarioController&2=nuevaVentaC',
					data: {
                        idTalla: idTalla,
                        vendidos: vendidos,
                    },
                    success: function(r) {
                                    if(r == 1) {
                                        $('#nuevaVenta').modal('hide');
                                        $('#dtCalcetas').DataTable().ajax.reload();
                                        swal({
                                            title: 'Venta registrada',
                                            text: 'Guardado con éxito, monto en existencia actualizado!',
                                            type: 'success',
                                            showConfirmButton: true

                                        }).then((result) => {
                                            $('#nuevaVenta').modal('setting', 'closable', false).modal('show');
                                            $('#tallaNV').val(1);
                                            recargarLista();
                                            $("#vendidos").val('')
                                        }); 
                                       
                                        limpiar();
                                    } 
                                }
            });
        },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 

    }
});


$("#guardarNuevaEx").click(function(){
    var cantidadEx= $("#acExis").val();
    var idTallaEx = $("#tallaEx").val();

             $.ajax({
                    type: 'POST',
                    url: '?1=InventarioController&2=nuevaExisC',
					data: {
                        idTallaEx: idTallaEx,
                        cantidadEx: cantidadEx,
                    },
                    success: function(r) {
                                    if(r == 1) {
                                        $('#actualizarExis').modal('hide');
                                        $('#dtCalcetas').DataTable().ajax.reload();
                                        swal({
                                            title: 'Ingreso de calcetas registrado',
                                            text: 'Guardado con éxito, monto en existencia actualizado!',
                                            type: 'success',
                                            showConfirmButton: true

                                        }).then((result) => {
                                            $('#actualizarExis').modal('setting', 'closable', false).modal('show');
                                            $('#tallaEx').val(1);
                                            recargarLista1();
                                            $("#acExis").val('');
                                            $("#new").text('');
                                        }); 
                                       
                                       limpiar();
                                    } 
                                }
            });
      
});


$("#vendidos").keyup(function(){
    $("#errorExis").css("display","none");
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#tallaNV').val(0);
    recargarLista();
        $("#errorExis").css("display","none");
        $("#vendidos").val('');

		$('#tallaNV').change(function(){
            recargarLista();
            $("#errorExis").css("display","none");
            $("#vendidos").val('');
		});
    })
    
	function recargarLista(){
        
		$.ajax({
			type:"POST",
			url:"./app/view/Inventario/datosCal.php",
			data:"talla=" + $('#tallaNV').val(),
			success:function(r){
				$('#existenciaV').html(r);
			}
		});
	}
</script>


<script type="text/javascript">
$(document).ready(function(){
    $('#tallaEx').val(0);
    recargarLista1();
        $("#errorExis").css("display","none");
        $("#vendidos").val('');

		$('#tallaEx').change(function(){
            recargarLista1();
            $("#errorExis").css("display","none");
            $("#vendidos").val('');
		});
    })
    
	function recargarLista1(){
        
		$.ajax({
			type:"POST",
			url:"./app/view/Inventario/datosCal.php",
			data:"talla=" + $('#tallaEx').val(),
			success:function(r){
				$('#existenciaEx').html(r);
			}
		});
	}
</script>



