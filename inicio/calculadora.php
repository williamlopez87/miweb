<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
<br/><br/><br/><br/>
<?php

$nombre=$_GET["numero"];

if(isset($_GET["sumar"])){
    echo "el numero enviado es: ".$numero."<br/>";
    $sumado = $numero+$numero;
    echo"el numero enviado se sumo con si mismo y el resultado es: ".$sumado;

}
else{
    if(isset($_GET["restar"])){
        $restado = $numero-$numero;
        echo"el numero enviado se resto con si mismo y el resultado es: ".$restado;

    }
    else{
        if(isset($_GET["multiplicar"])){
            $multiplicado = $numero*$numero;
            echo"el numero enviado se multiplico con si mismo y el resultado es: ".$multiplicado

        }
        else{
            if{isset($_GET(dividir)){
                $dividido = $numero/$numero;
                echo"el numero enviado se sumo con si mismo y el resultado es: ".$dividido;
            }
            }
            else{
                echo "no utilizo ningun boton";
            }
        }
    }
}

?>