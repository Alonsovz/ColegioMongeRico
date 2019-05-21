<div id="sidebar" class="ui sidebar inverted vertical menu">
    <a class="header item" id="titulo-menu">
        <br>
        <b><i class="university icon"></i>Colegio Monge Rico</b>
    </a>

    <?php

        if($_SESSION["descRol"] == 'Administrador/a') {
            require_once 'menuAdmin.php';
        } else if($_SESSION["descRol"] == 'Maestro/a') {
            require_once 'menuMaestros.php';
        }else{
            require_once 'menuSecretarios.php';
        }

    ?>

</div>

<div class="pusher">
    <div class="contenedor">