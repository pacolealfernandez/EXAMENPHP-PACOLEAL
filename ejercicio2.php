<!DOCTYPE html>
<html>
    <head>
    <title>Cadenas</title>
    </head>
<body>
<?php

    #Formulario
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];
    $operador = $_POST["operacion"];

    #Funciones

    #Covierte a mayusculas

    function mayuscula($text1){
        $res=strtoupper($text1);
        echo "El texto en mayusculas es: " . $res;
    }

    #Desordena

    function desordena($text1){
        $res=str_shuffle($text1);
        echo "El texto desordenado es: ". $res;
    }

    #Convierte en un array

    function arra($text1){
        $res=str_split($text1);
        print_r($res);
    } 

    #Cuenta caracteres
    function cuenta($text1){
        $res=strlen($text1);
        echo "El texto '" . $text1 .  "' tiene " . $res . " caracteres";
    }

    #Reemplaza
    function reemplaza($text3,$text2,$text1){
        $res=str_replace($text3,$text2,$text1);
        echo "La nueva frase es: " . $res;
    }

    #Llamar funciones
    switch ($operador) {

        #Covierte a mayusculas
        case 'mayuscula':
            mayuscula($text1);
            break;

        #Desordena
        case 'desordena':
            desordena($text1);
            break;

        #Conviente en un array
        case 'arra':
            arra($text1);
            break;

        #Cuenta caracteres
        case 'cuenta':
            cuenta($text1);
            break;

        #Reemplaza
        case 'reemplaza':
            reemplaza($text3,$text2,$text1);
            break;

        default:
            echo "La cagaste wey";
            break;
        }

?>
</body>

<br>
<br>
<p>Realizar otra cadena</p>
<a href="ejercicio2.html">Cadenas</a>
</html>