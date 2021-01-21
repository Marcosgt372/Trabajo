<?php

//funciones para strnigs
$mensaje = "Hoy voy a aprender mucho";

//longitud
echo strlen($mensaje);
echo "<br>";

//numeros de palabras
echo_str_word_count($mensaje);
echo "<br>";

//reversa
echo strrev($mensaje);
echo "<br>";

//encontrar texto
echo strpos($mensaje, "aprender");
echo "<br>";

//reemplazar texto
echo str_replace("aprender", "nadar", $mensaje);
echo "<br>";

//convertir a minuscula
echo strtolower($mensaje);
echo "<br>";

//convertir a mayuscula
echo strtoupper ($mensaje);
echo "<br>";

//comparar cadenas
echo strcmp("a", "b");
echo "<br>";

//substraer cadena
echo substr($mensaje, 10, 5);
echo "<br>";

//remover espacios en blancos
echo trim("hola     soy     marcos");
echo "<br>";





?>