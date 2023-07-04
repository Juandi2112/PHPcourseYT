<?php 

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre;

    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }


} 

class trabajador extends persona{
    public $puesto; //Propiedad nueva

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy ".$this->puesto;
    }
    
}


$objTrabajdor = new trabajador();
$objTrabajdor -> asignarNombre("Juan Diego");
$objTrabajdor -> puesto ="Web developer";

$objTrabajdor->presentarseComoTrabajador();

?>