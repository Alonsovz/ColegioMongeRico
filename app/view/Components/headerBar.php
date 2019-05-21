<div class="ui top fixed menu borderless" id="barra">
    <a class="item" id="btn-menu">
        <i class="material-icons">menu</i>
    </a>
    <a class="item" href="?1=UsuarioController&2=dashboard" style="color:#08088A;">
        <i class="material-icons">home</i>
    </a>
    <a style=" display: flex; justify-content: center; align-items: center; color:#08088A;">
        <img src="./res/img/he.png" alt="" width="50%" class="" id=""> 
    
    
    </a>
    <div style="margin-right:20px;  color:#0404B4;"  class="ui floated right dropdown tug floating item">
        <font color="#08088A" style="font-size: 20px;"><i class="user circle icon"></i>&nbsp; <?php echo $_SESSION["nomUsuario"] ?>
        <i class="dropdown icon"></i></font>
        <div class="menu">
            <div class="header">
                <?php echo $_SESSION["descRol"] ?>
            </div>
            <div class="divider"></div>
            <a href="?1=UsuarioController&2=config">
                <div class="item" id="#btnConf">
                    <i class="cog icon"></i>
                    Cuenta
                </div>
            </a>
            <a href="?1=UsuarioController&2=logout">
                <div style="color:#c0392b;" class="item">
                    <i class="power icon"></i>
                    Cerrar Sesi&oacute;n
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.ui.dropdown')
            .dropdown();
    });
</script>

<script>
    /* var socket = io.connect("http://localhost:3008");

    socket.on("new_order", function(data) {
        console.log(data);
    }); */
</script>