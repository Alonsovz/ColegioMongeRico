
<style>
    body {
        overflow: hidden;
    }
</style>

<script>
$(function() {
    overflowRestore();
});
</script>
<div class="row tiles" id="contenedor-tiles" style="display: flex !important; align-items: baseline; justify-content: space-between">

    <a href="?1=MateriasOrientadoresController&2=primerGrado"  style="width: 24%;" class="tiles-tiles ui green inverted segment">
        <h3>Gestión grados</h3>
        <div class="ui divider"></div>
        <i class="users icon"></i><i class="book icon"></i>
    </a>

    <a href="?1=RemesasController&2=chequeras" style="width: 24%;"  class="tiles-tiles ui blue inverted segment">
        <h3>Cuentas de Banco</h3>
        <div class="ui divider"></div>
        <i class="dollar icon"></i><i class="money bill icon"></i>
    </a>

    <a href="?1=UsuarioController&2=gestion" style="width: 24%;"  class="tiles-tiles ui orange inverted segment">
        <h3>Usuarios</h3>
        <div class="ui divider"></div>
        <i class="users icon"></i><i class="lock icon"></i>
    </a>

   <a style="width: 24%;" href="?1=UsuarioController&2=reporteria" class="tiles-tiles ui teal inverted segment">
        <h3>Reportes</h3>
        <div class="ui divider"></div>
        <i class="save icon"></i>
    </a>
</div>
