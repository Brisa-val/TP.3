<?php
class Viaje{
    private $costoViaje;
    private $sumaCostosPasajeros;
    private $colPasajeros;
    private $cantMaxima;

    public function __construct($costoViaje,$sumaCostosPasajeros,$colPasajeros,$cantMaxima){
        $this->costoViaje = $costoViaje;
        $this->sumaCostosPasajeros = $sumaCostosPasajeros;
        $this->colPasajeros = $colPasajeros;
        $this->cantMaxima = $cantMaxima;
    } 

    public function getCostoViaje(){
        return $this->costoViaje;
    }
    public function getSumaCostosPasajeros(){
        return $this->sumaCostosPasajeros;
    }
    public function getColPasajeros(){
        return $this->colPasajeros;
    }
    public function getCantMaxima(){
        return $this->cantMaxima;
    }
    public function setSumaCostosPasajeros($sumaCostosPasajeros){
        $this->sumaCostosPasajeros = $sumaCostosPasajeros;
    }
    public function setColPasajeros($colPasajeros){
        $this-> colPasajeros = $colPasajeros;
    }
    public function setCantMaxima($cantMaxima){
        $this-> cantMaxima = $cantMaxima;
    }

    /**
     * retorna verdadero si hay lugar
     * @return boolean
     */
    public function hayPasajesDisponibles(){
        $exito = false;
        $colPasajero = $this->getColPasajeros();
        if (count($colPasajero)<$this->getCantMaxima()){
            $exito = true;
        }
        return $exito;
    }

    /**
     * Debe incorporar pasajero a la coleccion
     * tener en cuenta si hay lugar
     * @param Pasajero $objPasajero
     * @return int
     */
    public function venderPasaje($objPasajero){
        $costoFinal = 0;
        $costoTotal = 0;
        $colPasajeros = $this->getColPasajeros();
        if($this->hayPasajesDisponibles()){
            $colPasajeros[] = $objPasajero;
            $costoFinal = $this->getCostoViaje() * $objPasajero->darPorcentajeIncremento()/100;
            $costoTotal= $this->getSumaCostosPasajeros()+$costoFinal;
            $this->setSumaCostosPasajeros($costoTotal);
        }

        return $costoFinal;
    }
}