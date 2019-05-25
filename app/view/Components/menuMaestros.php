<?php
    $idOrien= $_SESSION["codigoUsuario"];
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");
  $orientador = $mysqli -> query ("select idGrado from datosGrados where orientador=".$idOrien);
  $orientadorMate = $mysqli -> query ("select idGrado from datosGrados where orientadorMate=".$idOrien);
  $orientadorCien = $mysqli -> query ("select idGrado from datosGrados where orientadorCien=".$idOrien);
  $orientadorLen = $mysqli -> query ("select idGrado from datosGrados where orientadorLen=".$idOrien);
  $orientadorSoc = $mysqli -> query ("select idGrado from datosGrados where orientadorSoc=".$idOrien);
  $orientadorIng = $mysqli -> query ("select idGrado from datosGrados where orientadorIng=".$idOrien);
  $orientadorArt = $mysqli -> query ("select idGrado from datosGrados where orientadorArt=".$idOrien);
  $orientadorMo = $mysqli -> query ("select idGrado from datosGrados where orientadorMo=".$idOrien);
  $orientadorFis = $mysqli -> query ("select idGrado from datosGrados where orientadorFis=".$idOrien);
  $orientadorInfo = $mysqli -> query ("select idGrado from datosGrados where orientadorInfo=".$idOrien);
  ?>
    <h3 style="color:#81DAF5;text-align:center">Grados a mi cargo</h3>
  <?php
  while ($valores = mysqli_fetch_array($orientador)) {
    $grado = $valores["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i>  6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i>  7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 8vo Grado
        </a>

        </div>";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:black; background-color:#F2F2F2;  font-weight:bold;'>
         <i class='id badge outline icon'></i> 9no Grado
        </a>

        </div>";
    }
}
?>

<h3 style="color:#F4FA58;text-align:center">Materias que imparto</h3>

<?php
  while ($mate = mysqli_fetch_array($orientadorMate)) {
    $grado = $mate["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:black; background-color:#81DAF5;  font-weight:bold;'>
         <i class='plus icon'></i> Matemática --  9no Grado
        </a>

        </div>";
    }
}
?>


<?php
  while ($ciencia = mysqli_fetch_array($orientadorCien)) {
    $grado = $ciencia["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i>  Ciencias -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         Ciencias -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:black; background-color:#58FA82;  font-weight:bold;'>
         <i class='recycle icon'></i> Ciencias --  9no Grado
        </a>

        </div>";
    }
}
?>


<?php
  while ($lenguaje = mysqli_fetch_array($orientadorLen)) {
    $grado = $lenguaje["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i>  Lenguaje --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:black; background-color:#F7D358;  font-weight:bold;'>
         <i class='book icon'></i> Lenguaje --  9no Grado
        </a>

        </div>";
    }
}
?>


<?php
  while ($sociales = mysqli_fetch_array($orientadorSoc)) {
    $grado = $sociales["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "
        <div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:black; background-color:#BCA9F5;  font-weight:bold;'>
         <i class='map maker icon'></i>  E. Sociales --  9no Grado
        </a>

        </div>";
    }
}
?>


<?php
  while ($ingles = mysqli_fetch_array($orientadorIng)) {
    $grado = $ingles["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i>  Íngles --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i>  Íngles -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "
        <div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:black; background-color:#F3F781;  font-weight:bold;'>
         <i class='globe icon'></i> Íngles --  9no Grado
        </a>

        </div>";
    }
}
?>

<?php
  while ($artis = mysqli_fetch_array($orientadorArt)) {
    $grado = $artis["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:black; background-color:#F7819F;  font-weight:bold;'>
         <i class='pencil icon'></i> Artística -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:black; background-color:#F7819F;  font-weight:bold;'>
         <i class='pencil icon'></i> Artística --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:black; background-color:#F7819F;  font-weight:bold;'>
         <i class='globe icon'></i>  Íngles -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:black; background-color:#F7819F;  font-weight:bold;'>
         <i class='pencil icon'></i> Artística -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:black; background-color:#F7819F;  font-weight:bold;'>
         <i class='pencil icon'></i> Artística -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#F7819F;  font-weight:bold;'>
         <i class='pencil icon'></i> Artística -- 6to Grado
        </a>

        </div>";
    }
    
}
?>


<?php
  while ($moral = mysqli_fetch_array($orientadorMo)) {
    $grado = $moral["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:black; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "
        <div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:white; background-color:#B40431;  font-weight:bold;'>
         <i class='child icon'></i> Moral --  9no Grado
        </a>

        </div>";
    }
}
?>



<?php
  while ($fisica = mysqli_fetch_array($orientadorFis)) {
    $grado = $fisica["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física -- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:white; background-color:#A3F8C4;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "
        <div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:white; background-color:#088A29;  font-weight:bold;'>
         <i class='street view icon'></i> E. Física --  9no Grado
        </a>

        </div>";
    }
}
?>

<?php
  while ($info = mysqli_fetch_array($orientadorInfo)) {
    $grado = $info["idGrado"];

    if($grado==1){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=primerGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática -- 1er Grado
        </a>

        </div>";
    }
    if($grado==2){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=segundoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática --  2do Grado
        </a>

        </div>";
    }
    if($grado==3){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=tercerGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática -- 3er Grado
        </a>

        </div>";
    }
    if($grado==4){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=cuartoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática -- 4to Grado
        </a>

        </div>";
    }
    if($grado==5){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=quintoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática -- 5to Grado
        </a>

        </div>";
    }
    if($grado==6){
        echo "<div class='item' style=''>
        <a href='?1=GestionGradosController&2=sextoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática-- 6to Grado
        </a>

        </div>";
    }
    if($grado==7){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=septimoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática -- 7mo Grado
        </a>

        </div>";
    }
    if($grado==8){
        echo "
        <div class='item'>
        <a href='?1=GestionGradosController&2=octavoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática --  8vo Grado
        </a></div>

        ";
    }
    if($grado==9){
        echo "<div class='item'>
        <a href='?1=GestionGradosController&2=novenoGrado'
         class='item menu-it' style='color:white; background-color:#0404B4;  font-weight:bold;'>
         <i class='desktop icon'></i> Informática --  9no Grado
        </a>

        </div>";
    }
}
?>

