<?php

function recogerDatos($dato)
{
    if (isset($_REQUEST[$dato])) {
        return $_REQUEST[$dato];
    } else {
        return "";
    }
}

$nombre = recogerDatos("nombre");

$puntuacion = recogerDatos("puntuacion");

$cantidad_personas = recogerDatos("cantidad_personas");

$tipo_pasta = recogerDatos("tipo_pasta");

$salsa = recogerDatos("salsa");

$bebidas = array();
$contador = 0;
for ($i = 0; $i < 5; $i++) {
    if (recogerDatos("bebida$i", "") != "") {
        $bebidas[$contador] = recogerDatos("bebida$i", "");
        $contador++;
    }
}

$fondo = recogerDatos("fondo");

$comentario = recogerDatos("comentario");

?>


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu plato</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body id="<?= $fondo ?>">
    <header id="cabecera">
        <img src="../img/logo_pasta.png" alt="Logo pasta" width="100">
        <h1>Tu plato</h1>
    </header>
    <section id="procesa">
        <div class="respuesta">
            <?php
            if ($nombre == "") {
                print "<p>No has introducido tu nombre</p>";
            } else {
                print "</p>Nombre y apellidos: $nombre</p>";
            }
            ?>
        </div>
        <div class="respuesta">
            <?php
            if ($cantidad_personas == "") {
                print "<p>No has elegido la cantidad de personas</p>";
            } else {
                print "<p>Menu: $cantidad_personas";
                $cantidad_personas == 1 ? print " persona</p>" : print " personas</p>";
            }

            for ($i = 0; $i < $cantidad_personas; $i++) {
                print "<img src=\"../img/plato.png\" alt=\"Plato\">";
            }
            ?>
        </div>
        <div class="respuesta">
            <p>Tu plato es <?= $tipo_pasta . " " . $salsa ?></p>
            <img src="../img/<?= $tipo_pasta ?>-<?= $salsa ?>.jpg" alt="<?= $tipo_pasta ?> <?= $salsa ?>" width="300">
        </div>
        <div class="respuesta">
            <?php
            if (count($bebidas) == 0) {
                print "<p>No has elegido ninguna bebida</p>";
            } else {
                for ($i = 0; $i < count($bebidas); $i++) {
                    if ($bebidas[$i] != "") {
                        print "<img src=\"../img/$bebidas[$i].png\" alt=\"$bebidas[$i]\" width=\"100\">";
                    }
                }
            }
            ?>
        </div>
        <div class="respuesta">
            <?php
            if ($fondo == "") {
                print "<p>No has elegido ningun fondo</p>";
            } else {
                print "<p>El fondo que has elegido es $fondo</p>";
            }
            ?>

        </div>
        <div class="respuesta">
            <?php
            if ($comentario == "") {
                print "<p>No has escrito ningun comentario</p>";
            } else {
                print "<p>Tu comentario es: </p>";
                
                $cadenaSeparada = explode(" ", $comentario);
                $cadenaFinal = "<p>";
                $numeroPalabras = 0;
                for ($i=0; $i < count($cadenaSeparada); $i++) { 
                    $numeroPalabras++;
                    if($cadenaSeparada[$i] == "PHP" || $cadenaSeparada[$i] == "php"){
                        $cadenaFinal .= "<span class=\"textoPHP\">$cadenaSeparada[$i]</span> ";
                    } else {
                        $cadenaFinal .= "<span class=\"textoBorde\">$cadenaSeparada[$i]</span> ";
                    }
                }
                $cadenaFinal .= "</p>";
                print $cadenaFinal;
                print "<p>Has introducido $numeroPalabras";
                $numeroPalabras == 1 ? print " palabra.</p>" : print " palabras.</p>";
            }
            ?>
        </div>
        <div class="respuesta">
            <?php
            if ($puntuacion == "") {
                print "<p>No has elegido la puntuacíon</p>";
            } else {
                print "<p>Puntuación: $puntuacion</p>";
            }
            for ($i = 0; $i < $puntuacion; $i++) {
                print "<img src=\"../img/estrella.svg\" alt=\"Estrella\">";
            }
            ?>
        </div>
        <a href="../index.php" >Volver a la página principal</a>
    </section>
    <footer id="pie">
        <?php
        include "pie.php"
        ?>
    </footer>
</body>

</html>