<div id="app">
        <div class="ui grid">
        <div class="row">
                <div class="titulo">
                <i class="users icon"></i>
                    Usuarios <font color="#210B61" size="20px">.</font>
                </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                <button class="ui right floated blue labeled icon button" id="btnModalRegistro">
                    <i class="plus icon"></i>
                    Agregar
                </button>
            </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <table id="dtUsuarios" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #E6C404; color:white;">N°</th>
                            <th style="background-color: #08088A; color:white;">Nombre</th>
                            <th style="background-color: #08088A; color:white;">Apellidos</th>
                            <th style="background-color: #08088A; color:white;">Usuario</th>
                            <th style="background-color: #08088A; color:white;">Email</th>
                            <th style="background-color: #08088A; color:white;">Rol</th>
                            <th style="background-color: #08088A; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<div class="ui  modal" id="modalAgregarUsuario"  style="">

    <div class="header">
    <i class="users icon"></i><i class="plus icon"></i> Agregar nuevo usuario
    </div>
    <div class="content" class="ui equal width form">
        <form class="ui form" id="frmUsuario" method="POST" method="POST" enctype="multipart/form-data" action='?1=UsuarioController&2=registrar'> 
            <div class="field">
                <div class="fields">
                        <div class="eight wide field">
                            <label><i class="user icon"></i>Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre del usuario" id="nombre">
                                
                                <div class="ui red pointing label"  id="labelNombre"
                                style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                Completa este campo</div>
                        </div>
                        <div class="eight wide field">
                            <label><i class="user icon"></i>Apellidos</label>
                            <input type="text" name="apellido" placeholder="Apellidos" id="apellido">
                            <div class="ui red pointing label"  id="labelApellido"
                            style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                            Completa este campo</div>
                        </div>     
                </div>
            </div>  
            <div class="field">
                <div class="fields">
                            <div class="five wide field">
                                <label><i class="calendar icon"></i>Fecha de Nacimiento</label>
                                    <input type="date" id="fechaNac" name="fechaNac">
                                        <div class="ui red pointing label"  id="labelFecha"
                                            style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                            Completa este campo</div>
                                </div>     
                            <div class="five wide field">
                            <label><i class="address card icon"></i>DUI</label>
                                <input type="text" name="dui" placeholder="DUI del usuario" id="dui">
                                        <div class="ui red pointing label"  id="labelDui"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Completa este campo
                                        </div>
                                        <div class="ui red pointing label"  id="duiC"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Dui ya existe
                                        </div>
                            </div>  
                            
                            <div class="six wide field">
                                
                                <b><label><i class="phone icon"></i>Teléfono:</label></b>
                                <input type="text" id="telefono" name="telefono" placeholder="Tel. del usuario">
                                <div class="ui red pointing label"  id="labelTelefono"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Completa este campo
                                </div>
                            </div>
                            
                            </div>
                            
                </div>   
                
                    <div class="field">
                            <div class="fields">
                            
                            <div class="six wide field">
                                
                                <b><label><i class="mail icon"></i>Correo: </label></b>
                                <input type="text" id="correo" name="correo" placeholder="Correo electrónico">
                                <div class="ui red pointing label"  id="labelCorreo"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Completa este campo
                                        </div>
                                        <div class="ui red pointing label"  id="correoC"
                                    style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                    Correo ya existe
                                    </div>
                            </div>
                            
                            <div class="ten wide field">
                            <label><i class="address card icon"></i>Dirección:</label>
                                <textarea rows="3" name="direccion" placeholder="Dirección" id="direccion"></textarea>
                                        <div class="ui red pointing label"  id="labelDireccion"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Completa este campo
                                        </div>
                                        
                            </div>
                        

                                
                            </div>
                    </div>

                    <div class="field">
                            <div class="fields">

                            <div class="six wide field">
                                
                                <b><label><i class="user icon"></i>Rol: </label></b>
                                <select id="codigoRol" name="codigoRol" class="ui dropdown">
                                    <option value="1">Administrador/a</option>
                                    <option value="2">Maestro/a</option>
                                    <option value="3">Secretario/a</option>
                                </select>       
                            </div>
                            
                            <div class="five wide field">
                                
                                <b><label><i class="user icon"></i>Usuario: </label></b>
                                <input type="text" id="usuario" name="usuario" placeholder="Usuario para inicio de sesión">
                                <div class="ui red pointing label"  id="labelUsuario"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Completa este campo
                                        </div>

                                        <div class="ui red pointing label"  id="labelUsuarioE"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Usuario ya existe
                                        </div>
                            </div>
                            
                            <div class="five wide field">
                            <label><i class="lock icon"></i>Contraseña:</label>
                            <input type="password" id="pass" name="pass" placeholder="Contraseña">
                                        <div class="ui red pointing label"  id="labelContra"
                                        style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                                        Completa este campo
                                        </div>
                                        
                            </div>
                        

                                
                            </div>
                    </div>
                    
            </div>
        </form>

        <div class="actions">
            <button onclick="limpiar()" class="ui yellow button">
                Cancelar
            </button>
            <button class="ui blue button" id="btnGuardarUsuario" >
            Guardar
            </button>
        </div>
</div>


<div class="ui  modal" id="modalEditarUsuario"  style="">

<div class="header">
<i class="users icon"></i><i class="pencil icon"></i>
Usuario: 
<a id="nameE" style="color:blue;"></a>
<br><br>
<div class="ui divider"></div>
<a style="color:black; font-weight:bold; font-size:15px;">
<b>Nota: </b>Los cambios en los perfiles deben realizarse en el apartado "Cuenta" de cada usuario.</a>
</div>
<div class="content" class="ui equal width form">
    <form class="ui form" id="frmUsuarioE" method="POST" action='?1=UsuarioController&2=editar'> 
        <div class="field">
            <div class="fields">
            <input type="hidden" name="idDetalle" id="idDetalle">
                      
            </div>
        </div>  
        <div class="field">
            <div class="fields">
                        <div class="five wide field">
                            <label><i class="calendar icon"></i>Fecha de Nacimiento</label>
                                <input type="date" id="fechaNacE" name="fechaNacE" readonly>
                                    
                            </div>     
                        <div class="five wide field">
                        <label><i class="address card icon"></i>DUI</label>
                            <input type="text" name="duiE" placeholder="DUI del usuario" id="duiE" readonly>
                        </div>  
                        
                        <div class="six wide field">
                            
                            <b><label><i class="phone icon"></i>Teléfono:</label></b>
                            <input type="text" id="telefonoE" name="telefonoE" placeholder="Tel. del usuario" readonly>
                            
                        </div>
                        
                        </div>
                        
            </div>   
            
                <div class="field">
                        <div class="fields">
                        
                        <div class="six wide field">
                            
                            <b><label><i class="mail icon"></i>Correo: </label></b>
                            <input type="text" id="correoE" name="correoE" placeholder="Correo electrónico" readonly>
                            
                        </div>
                        
                        <div class="ten wide field">
                        <label><i class="address card icon"></i>Dirección:</label>
                            <textarea rows="3" name="direccionE" placeholder="Dirección" id="direccionE" readonly></textarea>
                                    
                        </div>
                       

                            
                        </div>
                </div>
                
        </div>
    </form>

    <div class="actions">
        <button id="btnCerrarE" class="ui red button">
            Listo
        </button>
        
    </div>
</div>


<div class="ui tiny modal" id="modalEliminar">

                <div class="header">
                    Eliminar usuario
                </div>
                <div class="content">
                    <h4>¿Desea eliminar del sistema a <a id="name" style="color:black;"></a>?</h4>
                    <input type="hidden"  id="idEliminar">
                </div>
                <div class="actions">
                    <button class="ui black deny button">
                        Cancelar
                    </button>
                    <button class="ui right red button" id="btnEliminar">
                        Eliminar
                    </button>
                </div>
            </div>

</div>

<script src="./res/tablas/tablaUsuarios.js"></script>




<script>
    $('#dui').mask("99999999-9");
    $('#telefono').mask("9999-9999");
    $('#duiE').mask("99999999-9");
    $('#telefonoE').mask("9999-9999");
function limpiar() {    
                $('#nombre').val('');
                $('#apellido').val('');
                $('#correo').val('');
                $('#dui').val('');
                $('#fechaNac').val('');
                $('#usuario').val('');
                $('#contra').val('');
                $("#telefono").val('');
                $('#direccion').val('');
                $("#labelDui").hide();
                $("#labelFecha").hide();
                $("#labelNombre").hide();
                $("#labelApellido").hide();
                $("#labelTelefono").hide();
                $("#labelDireccion").hide();
                $("#labelCorreo").hide();
                $("#duiC").hide();
                $("#correoC").hide();
                $("#labelUsuarioE").hide();
                $("#labelUsuario").hide();
                $("#btnGuardarUsuario").attr("disabled", false);
                $('#modalAgregarUsuario').modal('hide');
            }
$(function(){


$('#btnCerrarE').click(function() {    
                $('#modalEditarUsuario').modal('hide');
            });
           
        });

$('#btnModalRegistro').click(function() {
$('#modalAgregarUsuario').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
});

        $(document).on("click", ".btnEliminar", function () {
            $('#modalEliminar').modal('setting', 'closable', false).modal('show');
            $('#idEliminar').val($(this).attr("id"));
            $('#name').text($(this).attr("nombre") +" "+$(this).attr("apellido"));
        });
$(document).on("click", ".btnEditar", function () {
 $('#modalEditarUsuario').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
 $('#idDetalle').val($(this).attr("id"));
 $('#fechaNacE').val($(this).attr("fechaNac"));
 $('#duiE').val($(this).attr("dui"));
 $('#telefonoE').val($(this).attr("telefono"));
 $('#correoE').val($(this).attr("correo"));
 $('#direccionE').val($(this).attr("direccion"));
 $('#nameE').text($(this).attr("nombre") +" "+$(this).attr("apellido"));
        });


</script>


<script>


    $("#usuario").keyup(function(){

       var user=$("#usuario").val();

            $.ajax({
            type: 'POST',
            url: '?1=UsuarioController&2=getUserName',
            data:{user},
            success: function(r) {

                    if(r==1)
                    {
                        
                        $("#btnGuardarUsuario").attr("disabled", true);
                        $("#labelUsuarioE").css("display","block");
                    }    
                    else{

                        $("#btnRegistrar").attr("disabled", false);
                    }  
            }
                });

    });

    $("#usuario").keyup(function(){

        $("#btnGuardarUsuario").attr("disabled", false);
         $("#labelUsuarioE").css("display","none");
    });


$("#dui").keyup(function(){

var dui=$("#dui").val();

     $.ajax({
     type: 'POST',
     url: '?1=UsuarioController&2=getDui',
     data:{dui},
     success: function(r) {

             if(r==1)
             {
                 
                 $("#btnGuardarUsuario").attr("disabled", true);
                 $("#duiC").css("display","block");
             }    
             else{

                 $("#btnRegistrar").attr("disabled", false);
             }  
     }
         });

});

$("#dui").keyup(function(){

$("#btnGuardarUsuario").attr("disabled", false);
 $("#duiC").css("display","none");
});

$("#correo").keyup(function(){

 $("#btnGuardarUsuario").attr("disabled", false);
  $("#correoC").css("display","none");
});

$("#correo").keyup(function(){

var email=$("#correo").val();

     $.ajax({
     type: 'POST',
     url: '?1=UsuarioController&2=getEmail',
     data:{email},
     success: function(r) {

             if(r==1)
             {
                 
                 $("#btnGuardarUsuario").attr("disabled", true);
                 $("#correoC").css("display","block");
             }    
             
     }
         });

});






$(function(){
                $("#nombre").keyup(function(){
                    $("#labelNombre").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#apellido").keyup(function(){
                    $("#labelApellido").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
               
                $("#fechaNac").change(function(){
                    $("#labelFecha").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#fechaNac").keyup(function(){
                    $("#labelFecha").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#dui").keyup(function(){
                    $("#labelDui").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#telefono").keyup(function(){
                    $("#labelTelefono").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#correo").keyup(function(){
                    $("#labelCorreo").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#direccion").keyup(function(){
                    $("#labelDireccion").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#usuario").keyup(function(){
                    $("#labelUsuario").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#pass").keyup(function(){
                    $("#labelContra").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
            $('#btnGuardarUsuario').click(function() {
                if($("#nombre").val()=='')
                {
                    $("#labelNombre").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", true);
                }
                else if($("#apellido").val()==""){
                    $("#labelApellido").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
               else if($("#fechaNac").val()==""){
                    $("#labelFecha").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
               else if($("#dui").val()==""){
                    $("#labelDui").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#telefono").val()==""){
                    $("#labelTelefono").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#correo").val()==""){
                    $("#labelCorreo").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#direccion").val()==""){
                    $("#labelDireccion").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#usuario").val()==""){
                    $("#labelUsuario").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#pass").val()==""){
                    $("#labelContra").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }

                
                else{
                const form = $('#frmUsuario');

                const datosFormulario = new FormData(form[0]);
         
        
            $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=UsuarioController&2=registrar',
                data: datosFormulario,
                success: function(r) {
                    if(r == 1) {
                        $('#modalAgregarUsuario').modal('hide');
                        swal({
                            title: 'Registrado',
                            text: 'Guardado con éxito',
                            type: 'success',
                            showConfirmButton: false,
                                timer: 1700
                        }).then((result) => {
                            if (result.value) {
                                location.href = '?';
                            }
                        }); 
                        $('#dtUsuarios').DataTable().ajax.reload();
                        limpiar();
                    } 
                }
            });
        }
            });
        });



        $("#btnEliminar").click(function(){
            var idEliminar=$("#idEliminar").val();
            $.ajax({
               
                type: 'POST',
                url: '?1=UsuarioController&2=eliminar',
                data: {idEliminar},
                success: function(r) {
                    if(r == 1) {
                        $('#modalEliminar').modal('hide');
                        swal({
                            title: 'Eliminado',
                            text: 'Eliminado con éxito',
                            type: 'success',
                            showConfirmButton: false,
                                timer: 1700

                        }).then((result) => {
                            if (result.value) {
                                location.href = '?';
                            }
                        }); 
                        $('#dtUsuarios').DataTable().ajax.reload();
                        limpiar();
                    } 
                }
            });

        });


        $(function(){
                $("#nombre").keyup(function(){
                    $("#labelNombre").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#apellido").keyup(function(){
                    $("#labelApellido").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
               
                $("#fechaNac").change(function(){
                    $("#labelFecha").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#fechaNac").keyup(function(){
                    $("#labelFecha").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#dui").keyup(function(){
                    $("#labelDui").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#telefono").keyup(function(){
                    $("#labelTelefono").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#correo").keyup(function(){
                    $("#labelCorreo").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#direccion").keyup(function(){
                    $("#labelDireccion").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#usuario").keyup(function(){
                    $("#labelUsuario").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
                $("#contra").keyup(function(){
                    $("#labelContra").css("display","none");
                    $("#btnGuardarUsuario").attr("disabled", false);
                });
            $('#btnGuardarUsuario').click(function() {
                if($("#nombre").val()=='')
                {
                    $("#labelNombre").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", true);
                }
                else if($("#apellido").val()==""){
                    $("#labelApellido").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
               else if($("#fechaNac").val()==""){
                    $("#labelFecha").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
               else if($("#dui").val()==""){
                    $("#labelDui").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#telefono").val()==""){
                    $("#labelTelefono").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#correo").val()==""){
                    $("#labelCorreo").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#direccion").val()==""){
                    $("#labelDireccion").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#usuario").val()==""){
                    $("#labelUsuario").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }
                else if($("#contra").val()==""){
                    $("#labelContra").css("display","block");
                    $("#btnGuardarUsuario").attr("disabled", false);
                }

                
                else{
                const form = $('#frmUsuario');

                const datosFormulario = new FormData(form[0]);
         
        
            $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=UsuarioController&2=editar',
                data: datosFormulario,
                success: function(r) {
                    if(r == 1) {
                        $('#modalEditarUsuario').modal('hide');
                        swal({
                            title: 'Editado',
                            text: 'Datos guardados con éxito',
                            type: 'success',
                            showConfirmButton: false,
                                timer: 1700

                        }).then((result) => {
                            if (result.value) {
                                location.href = '?';
                            }
                        }); 
                        $('#dtUsuarios').DataTable().ajax.reload();
                        limpiar();
                    } 
                }
            });
        }
            });
        });

</script>
     