<?php
include_once 'Pasajero.php';
include_once 'Viaje.php';
include_once 'PasajerosEstandares.php';
include_once 'PasajerosNecEspeciales.php';
include_once 'PasajerosVIP.php';

$unaPasajero= new Pasajero("juli","22","330");
echo $unaPasajero;

$unaViaje= new Viaje("4467","23000",[],"50");
echo $unaViaje;

/**
 * Crea una instancia Pasajero
 * @return Pasajero
 */
function crearPasajero(){
    $nroViaje = 0;
    $millas = 0;
    $silla = false;
    $asistencia = false;
    $comida = false;
    echo "Pasajero estandar\nNombre: ";
    $nom = readline();
    echo "Numero de asiento: ";
    $asiento = readline(); 
    echo "Numero de Ticket: ";
    $ticket = readline();
    echo "Ingrese informacion del pasajero\nStandard (s)\nVip (v)\Especial (e)\n";
    $opcion = readline();
    switch($opcion){
        case "s": 
            $objPasajero = new PasajerosEstandares($nom, $asiento, $ticket);
            break;
        case "v":
            echo "Ingrese el nro de Viajero Frecuente: ";
            $nroViaje = readline();
            echo "ingrese las millas acumuladas: ";
            $millas = readline();
            $objPasajero = new PasajeroVIP($nom, $asiento, $ticket, $nroViaje, $millas);
            break;
        case "e":
            echo "Necesita Silla de ruedas? (si = s)";
            if (readline() = "s"){
                $silla = true;
            }
            echo "Necesita asistencia? (si = s)";
            if (readline() = "s"){
                $asistencia = true;
            }    
            echo "Necesita comidas especiales? (si = s)";
            if (readline() = "s"){
                $comida = true;
            }  
            $objPasajero = new PasajerosNecEspeciales($nom, $asiento, $ticket, $silla, $asistencia, $comida);
            break;
    }                    
    return $objPasajero;
}


$opcion=1;
//Menu principal
while($opcion != 0){
    echo "
    \n
    0-Salir
    1-Visualizar informacion del viaje
    2- Vender Pasaje
    \n";
    $opcion = readline();
    switch($opcion){
        case 0: 
            echo "Saliendo del test"; 
            break;
        case 1:    
            break;
        case 2:
            $objPasajero = crearPasajero();
            $costo = $unaViaje->venderPasaje($objPasajero);
            break;
    }        
}



