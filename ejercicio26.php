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


} ;

$objAlumno = new persona();  //Instancia o creación de un objeto
$objAlumno -> asignarNombre("Oscar");

$objAlumno -> imprimirNombre();
?>