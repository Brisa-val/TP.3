<?php 
include_once 'Pasajero.php';
class PasajerosNecEspeciales extends Pasajero {

    private $sillasDeRuedas; //boolean
    private $asistenciaEmbarqueOdesembarque; //boolean
    private $comidasEspeciales; //boolean

public function __construct($nombre,$numeroAsiento,$numeroTicket,
$sillasDeRuedas,$asistenciaEmbarqueOdesembarque,$comidasEspeciales){
    parent::__construct($nombre,$numeroAsiento,$numeroTicket);
    
 $this->sillasDeRuedas = $sillasDeRuedas;
 $this->asistenciaEmbarqueOdesembarque = $asistenciaEmbarqueOdesembarque;
 $this->comidasEspeciales = $comidasEspeciales;
}
public function getSillasDeRuedas(){
    return $this->sillasDeRuedas;
}
public function getAsistenciaEmbarqueOdesembarque(){
    return $this->asistenciaEmbarqueOdesembarque;
}
public function getComidasEspeciales(){
    return $this->comidasEspeciales;
}
public function setSillasDeRuedas($sillasDeRuedas){
    $this->sillasDeRuedas = $sillasDeRuedas;
}
public function setAsistenciaEmbarqueOdesembarque($asistenciaEmbarqueOdesembarque){
    $this->asistenciaEmbarqueOdesembarque = $asistenciaEmbarqueOdesembarque;
}
public function setComidasEspeciales($comidasEspeciales){
 $this->comidasEspeciales = $comidasEspeciales;
}
public function __toString(){
    $cadena =parent::__toString();
    return $cadena. 
    "sillas de ruedas: ".$this->getSillasDeRuedas(). 
    "asistencia para el embarque o desembarque:".$this->getAsistenciaEmbarqueOdesembarque().
    "comidas especiales:".$this->getComidasEspeciales();
}

public function darPorcentajeIncremento(){
    $config = 0;
    if($this->getSillasDeRuedas()){
        $config = +1;
    }
    if($this->getAsistenciaEmbarqueOdesembarque()){
        $config +1;
    }
    if($this->getComidasEspeciales()){
        $config +1;
    }
    if($config > 2) {
        $porcentaje =30;
        } else {
          $porcentaje = 15;
    }
        return $porcentaje;
    }
}