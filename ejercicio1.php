<!DOCTYPE html>
<html>
    <head>
    <title>Conversor</title>
    </head>
<body>
<?php

#Formulario

#Recogida de datos

$numero=$_POST["text1"];
$selector=$_POST["operacion"];
$sino=$_POST["sino"];

#Funciones

#Decimal a binario

function decbi($numero){

   $res=decbin ($numero);

     echo "El numero de binario es: ". $res;
}

#Decimal a octal

function decoc($numero){

    $res=decoct ($numero);
 
      echo "El numero en octal es: ". $res;
}

#Decimal a hexadecimal

function deche($numero){

    $res=dechex ($numero);
 
      echo "El numero en hexal es: ". $res;
}

#Binario a decimal

function binde($numero){

    $res=bindec ($numero);
 
      echo "El numero en decimal es: ". $res;
}

#Octal a decimal

function octde($numero){

    $res=octdec ($numero);
 
      echo "El numero en decimal es: ". $res;
}

#Hexadecimal a decimal

function hexde($numero){

    $res=hexdec ($numero);
 
      echo "El numero en decimal es: ". $res;
}


switch ($selector) {

    #Decimal a binario

    case 'decbi':

        decbi($numero);

        break;

    #Decimal a octal

    case 'decoc':

        decoc($numero);

        break;

    #Decimal a hexadecimal

    case 'deche':

        deche($numero);

        break;

    #Binario a decimal

    case 'binde':

        binde($numero);

        break;

    #Octal a decimal

    case 'octde':

        octde($numero);

        break;

    #Hexadecimal a decimal

    case 'hexde':

        hexde($numero);

        break;
    
    default:
        echo "La liaste";
        break;
}

?>
</body>

<br>
<p>Realizar otra Conversion</p>
<a href="ejercicio1.html">Conversor</a>
</html>
