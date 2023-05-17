<?php 

include_once 'Pasajero.php';

class PasajeroVIP extends Pasajero{

    private $viajeroFrecuente;
    private $cantMillasDePasajero;

public function __construct($nombre,$numeroAsiento,$numeroTicket,$viajeroFrecuente,$cantMillasDePasajero ){
    parent::__construct($nombre,$numeroAsiento,$numeroTicket);
    $this-> viajeroFrecuente = $viajeroFrecuente;
    $this->cantMillasDePasajero = $cantMillasDePasajero;
}
public function getViajeroFrecuente(){
    return $this-> viajeroFrecuente;
}
public function getCantMillasDePasajero(){
   return $this-> cantMillasDePasajero;
}
public function setViajeroFrecuente($viajeroFrecuente){
    $this-> viajeroFrecuente = $viajeroFrecuente;
}
public function setCantMillasDePasajero($cantMillasDePasajero){
    $this-> cantMillasDePasajero = $cantMillasDePasajero;
}
public function __toString(){
    $cadena =parent::__toString();
    $cadena.="/n numero de viajero frecuente:".$this->getViajeroFrecuente();
    $cadena.="/n cantidad de millas de pasajero:".$this->getCantMillasDePasajero();
    return $cadena;
}
public function darPorcentajeIncremento(){
    $porcentaje = 35;
    if($this->getcantMillasDePasajero()>300){
        $porcentaje=30;
    }
    return $porcentaje;
}
}