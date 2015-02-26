<?php

class Gasolina
{
    private $nombre;
    private $ruc;
    private $cant;
    private $precio;


    
     function __construct($nombre, $ruc, $cant, $precio) {
       $this->nombre = $nombre;
       $this->ruc = $ruc;
       $this->cant = $cant;
       $this->precio = $precio;

     }
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setRuc($ruc){
       $this->ruc = $ruc;
     } 
     function getRuc(){
       return $this->ruc;
     } 
     function setCant($cant){
       $this->cant = $cant;
     } 
     function getCant(){
       return $this->cant;
     }
     function setPrecio($precio){
       $this->precio = $precio;
     } 
     function getPrecio(){
       return $this->precio;
     }   
}

?> 
