<?php
include_once 'Pasajero.php';
class PasajerosEstandares extends Pasajero{

public function __construct($nombre,$numeroAsiento,$numeroTicket){
    parent::__construct($nombre,$numeroAsiento,$numeroTicket);
}
public function darPorcentajeIncremento(){
    return 10;
}
}