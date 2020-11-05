<?php
session_start();

$salas_cine=array(
    "sala1"=>0, 
    "sala2"=>0, 
    "sala3"=>0, 
    "sala4"=>0, 
    "sala5"=>0, 
    "sala6"=>0, 
    "sala7"=>0    
);
$GLOBALS = $salas_cine;

class CineClase {
    protected $glob;
  
    public function __construct() {
        global $GLOBALS;
        $this->glob =& $GLOBALS;
    }

    public function getCantidad($sala) {
        return $this->glob[$sala];
    }
    public function setCantidad($sala,$cantidad){
        $GLOBALS[$sala] =$cantidad;
    }
    public function getStatus(){
        return $this->glob;
    }
}

?>