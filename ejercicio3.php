<!DOCTYPE html>
<html>
    <head>
    <title>Arrays</title>
    </head>
<body>
<?php

    #Formulario
if(isset($_POST["Array"]))

    $entradas=$_POST["Array"];

    $entrada1=$entradas["entrada1"];
    $entrada2=$entradas["entrada2"];
    $entrada3=$entradas["entrada3"];
    $entrada4=$entradas["entrada4"];
    $entrada5=$entradas["entrada5"];
    $herramientas=$_POST["herramientas"];

    #Funciones

    #Quita el primer elemento

    function primero($entradas){
        array_shift($entradas);
        print_r($entradas);
    }

    #Quitar el ultimo elemento

     function ultimo($entradas){
        array_pop($entradas);
        print_r($entradas);
    }
  
    #Ordenar Array por sus claves de orden inverso

    function ordena($entradas){
        krsort($entradas);
        print_r($entradas);
    }

    #Divide el array en 2 fragmentos

    function divide($entradas){
        print_r(array_chunk($entradas, 2));
    }

    #Switch

    #Quita el primer elemento

    switch ($herramientas) { 
        case 'primero':
            primero ($entradas);
            break;

    #Quitare el ultimo elemento

        case 'ultimo':
            ultimo ($entradas);
            break;

    #Ordenar Array por sus claves de orden inverso

        case 'ordena':
            ordena ($entradas);
            break;
    
    #Divide el array en 2 fragmentos

        case 'divide':
            divide ($entradas);
            break;
        
        default:
            # code...
            break;
    }

?>
</body>

<br>
<br>
<p>Realizar otra Array</p>
<a href="ejercicio3.html">Arrays</a>
</html>