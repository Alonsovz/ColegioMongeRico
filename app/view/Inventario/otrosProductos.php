<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");

  $query = $mysqli -> query ("select * from inventarioOtros where idEliminado=1;");
  $query1 = $mysqli -> query ("select * from inventarioOtros where idEliminado=1;");
 
  ?>

<div id="app">
<modal-eliminar id_form="frmEliminar" id="modalEliminar" url="?1=InventarioController&2=eliminarProducto" titulo="Eliminar"
        sub_titulo="¿Está seguro de querer eliminar el elemento?" :campos="campos_eliminar" tamanio='tiny'></modal-eliminar>

        <div class="ui grid">
        <div class="row">
                <div class="titulo">
                <a href="?1=InventarioController&2=calcetas" class="ui teal button" id="calcetas">Calcetas</a>
                <a href="?1=InventarioController&2=uniformes" class="ui black button" id="uniformes">Uniformes</a>
                <a href="?1=InventarioController&2=otros" class="ui purple button" id="otrosProductos">Otros</a>
                <br><br>
                <i class="calendar check icon"></i>
                    Inventario de otros artículos<font color="#210B61" size="20px">.</font>
                </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                    <button class="ui right floated green labeled icon button" id="btnModalRegistroProducto">
                            <i class="plus icon"></i>
                            Agregar nuevo artículo
                </button>

                <button class="ui right floated orange labeled icon button" id="btnModalRegistroVenta">
                    <i class="window minimize icon"></i>
                    Restar a existencia
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
        <div class="row" style="background-color:#D8D8D8;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
    box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);">
            <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
                <table id="dtInventario" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #9627BA; color:white;">N°</th>
                            <th style="background-color: #9627BA; color:white;width:33%;">Producto</th>
                            <th style="background-color: #9627BA; color:white;width:33%;">Existencia</th>
                            <th style="background-color: #9627BA; color:white;width:33%;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table><br><br>
            </div>
        </div>
    </div>
</div>




<div id="nuevoProducto" class="ui tiny modal">
    <div class="header"  style="color:white; background-color:#009C95">
      <i class="plus icon"></i>  Nuevo Artículo
    </div>
    <div class="content" style="background-color:#DBDDDD ">
        <form class="ui form">
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Nombre de Producto:</label>
                    <input type="text" name="ProductoN" id="ProductoN" placeholder="Nombre del Producto">
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Existencia :</label>
                    <input type="number" name="existencia" id="existencia" placeholder="Existencia">
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
    <div class="header"  style="color:white; background-color:#009C95">
      <i class="plus icon"></i>  Restar cantidad en existencia
    </div>
    <div class="content" style="background-color:#DBDDDD ">
        <form class="ui form">
            <div class="field">
            <div class="fields">
                    <div class="sixteen wide field">
                    <label>Nombre de Producto:</label>
                    <select name="ProductoNV" id="ProductoNV" class="ui search dropdown">
                    <option value="0" set selected>Selecciona</option>
                    
                                 <?php        
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["idProducto"].'">'.$valores["nombre"].'</option>';
                                }
                                ?>
                    </select>
                    <br><br>
                                Existencia:
                                <div id="existenciaV"></div>
                    <br>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Cantidad a restar:</label>
                    <input type="text" name="vendidos" id="vendidos" placeholder="Cantidad a restar">
                    <br><br>
                    <div class="ui red pointing label"  id="errorExis"  style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                   No puedes restar mas que la cantidad en existencia
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
    <div class="header"  style="color:white; background-color:#009C95">
      <i class="plus icon"></i>  Actualizar existencias de artículos
    </div>
    <div class="content" style="background-color:#DBDDDD ">
        <form class="ui form">
            <div class="field">
                <div class="fields">
                <div class="sixteen wide field">
                    <label>Nombre de Producto:</label>
                    <select name="ProductoEx" id="ProductoEx" class="ui search dropdown">
                    <option value="0" set selected>Selecciona</option>
                                 <?php        
                                while ($valores = mysqli_fetch_array($query1)) {
                                    echo '<option value="'.$valores["idProducto"].'">'.$valores["nombre"].'</option>';
                                }
                                ?>
                    </select>
                    <br><br>
                                Existencia:
                                <div id="existenciaEx"></div>
                    <br>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="fields">
                    <div class="sixteen wide field">
                    <label>Cantidad  a agregar:</label>
                    <input type="text" name="acExis" id="acExis" placeholder="Cantidad  agregada a existencia">
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


<script src="./res/tablas/tablaInventario.js"></script>
<script src="./res/js/modalEliminar.js"></script>
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
                tablaInventario.ajax.reload();
            }
            
        }
    });
</script>
<script>
$(document).ready(function(){
    $("#otrosProductos").removeClass("ui purple button");
    $("#otrosProductos").addClass("ui purple basic button");

    $("#acExis").mask("99999999999999999999999");
    $("#vendidos").mask("99999999999999999999999");
    $("#existencia").mask("99999999999999999999999");

});



$("#btnModalRegistroProducto").click(function(){
    $('#nuevoProducto').modal('setting', 'closable', false).modal('show');
});

$("#btnModalRegistroExis").click(function(){
    $('#actualizarExis').modal('setting', 'closable', false).modal('show');
});


$("#btnModalRegistroVenta").click(function(){
    $('#nuevaVenta').modal('setting', 'closable', false).modal('show');
});

function limpiar(){
    $("#acExis").val('');
    $("#vendidos").val('');
    $("#existencia").val('');
    $("#ProductoN").val('');
    $("#new").text('');
    }

$("#guardarNueva").click(function(){
    var nombre = $("#ProductoN").val();
    var existencia = $("#existencia").val();
    $.ajax({
                    type: 'POST',
                    url: '?1=InventarioController&2=registrarProducto',
					data: {
                        nombre: nombre,
                        existencia: existencia,
                    },
                    success: function(r) {
                                    if(r == 1) {
                                        $('#nuevoProducto').modal('hide');
                                        swal({
                                            title: 'Producto registrado',
                                            text: 'Guardado con éxito',
                                            type: 'success',
                                            showConfirmButton: true

                                        }).then((result) => {
                                           // location.reload();
                                            $('#dtInventario').DataTable().ajax.reload();
                                        }); 
                                       
                                       limpiar();
                                       location.reload();
                                    } 
                                }
            });
});


$("#guardarNuevaC").click(function(){
    var cantidad= parseInt($("#existenciaV").text());
    var vendidos = parseInt($("#vendidos").val());
    var idTalla = $("#ProductoNV").val();

    if(vendidos>cantidad){
       $("#errorExis").css("display","block");
        
    }else{
        alertify.confirm("¿Desea guardar los datos de venta?",
            function(){
             $.ajax({
                    type: 'POST',
                    url: '?1=InventarioController&2=restarExisProducto',
					data: {
                        idTalla: idTalla,
                        vendidos: vendidos,
                    },
                    success: function(r) {
                                    if(r == 1) {
                                        $('#nuevaVenta').modal('hide');
                                        $('#dtInventario').DataTable().ajax.reload();
                                        swal({
                                            title: 'Resta registrada',
                                            text: 'Guardado con éxito, monto en existencia actualizado!',
                                            type: 'success',
                                            showConfirmButton: true

                                        }).then((result) => {
                                            $('#nuevaVenta').modal('setting', 'closable', false).modal('show');
                                            $('#ProductoNV').val(0);
                                            recargarLista();
                                            $("#vendidos").val('');
                                            $("#existenciaV").text('');
                                        }); 
                                       
                                        limpiar();
                                        location.reload();
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


$(document).on("click", ".btnEliminar", function () {
            $('#modalEliminar').modal('setting', 'closable', false).modal('show');
            $('#idEliminar').val($(this).attr("id"));
});


$('#ProductoEx').change(function(){
            recargarLista1();
            $("#errorExis").css("display","none");
            $("#vendidos").val('');
});


function recargarLista1(){
        
		$.ajax({
			type:"POST",
			url:"./app/view/Inventario/datosOtros.php",
			data:"producto=" + $('#ProductoEx').val(),
			success:function(r){
				$('#existenciaEx').html(r);
			}
		});
        
	}

$(document).ready(function(){
        $('#ProductoEx').val(0);
        recargarLista1();
        $("#errorExis").css("display","none");
        $("#vendidos").val('');

	
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

$('#ProductoNV').change(function(){
            recargarLista();
            $("#errorExis").css("display","none");
            $("#vendidos").val('');
		});


        function recargarLista(){
        
		$.ajax({
			type:"POST",
			url:"./app/view/Inventario/datosOtros.php",
			data:"producto=" + $('#ProductoNV').val(),
			success:function(r){
				$('#existenciaV').html(r);
			}
		});
        
	}



$("#guardarNuevaEx").click(function(){
    var cantidadEx= $("#acExis").val();
    var idTallaEx = $("#ProductoEx").val();

             $.ajax({
                    type: 'POST',
                    url: '?1=InventarioController&2=nuevaExisProducto',
					data: {
                        idTallaEx: idTallaEx,
                        cantidadEx: cantidadEx,
                    },
                    success: function(r) {
                                    if(r == 1) {
                                        $('#actualizarExis').modal('hide');
                                        $('#dtInventario').DataTable().ajax.reload();
                                        swal({
                                            title: 'Ingreso de articulo registrado',
                                            text: 'Guardado con éxito, monto en existencia actualizado!',
                                            type: 'success',
                                            showConfirmButton: true

                                        }).then((result) => {
                                            $('#actualizarExis').modal('setting', 'closable', false).modal('show');
                                            $('#ProductoEx').val(0);
                                            $("#existenciaEx").text('');
                                            recargarLista1();
                                            $("#acExis").val('');
                                            $("#new").text('');
                                        }); 
                                       
                                       limpiar();
                                       location.reload();
                                    } 
                                }
            });
      
});
</script>