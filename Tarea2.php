<?php 
class Car{
    public $marca;
    public $year;
    public $numSerieMotor;
    public $precio;
    public $pasajeros;
    public $carga;

    function __construct($marca,$year,$numSerieMotor,$precio,$pasajeros,$carga)
    {
        $this->marca = $marca;
        $this-> year =$year;
        $this->numSerieMotor = $numSerieMotor;
        $this-> precio= $precio."$";
        $this->pasajeros = $pasajeros;
        $this-> carga = $carga."kg";
    }
    function printCar(){
        echo "Marca: ".$this->marca;
        echo"\n";
        echo"Year: ".$this->year;
        echo"\n";
        echo"Numero de Serie del Motor: ".$this->numSerieMotor;
        echo"\n";
        echo "Precio: ".$this->precio;
        echo "\n";
    }

}
class Compacto extends Car{
   
    function printCar(){
        echo "Marca: ".$this->marca;
        echo"\n";
        echo"Year: ".$this->year;
        echo"\n";
        echo"Numero de Serie del Motor: ".$this->numSerieMotor;
        echo"\n";
        echo "Precio: ".$this->precio;
        echo "\n";
        echo "Pasajeros: ".$this->pasajeros;
        echo "\n";
    }
}

class Lujo extends Car{
   
    function printCar(){
        echo "Marca: ".$this->marca;
        echo"\n";
        echo"Year: ".$this->year;
        echo"\n";
        echo"Numero de Serie del Motor: ".$this->numSerieMotor;
        echo"\n";
        echo "Precio: ".$this->precio;
        echo "\n";
        echo "Pasajeros: ".$this->pasajeros;
        echo "\n";
    }
}

class Camioneta extends Car{
   
    function printCar(){
        echo "Marca: ".$this->marca;
        echo"\n";
        echo"Year: ".$this->year;
        echo"\n";
        echo"Numero de Serie del Motor: ".$this->numSerieMotor;
        echo"\n";
        echo "Precio: ".$this->precio;
        echo "\n";
        echo "Pasajeros: ".$this->pasajeros;
        echo "\n";
        echo "Carga maxima: ".$this->carga;
    }
}


$compacto= new Compacto("Chevrolet",2016,557583,7000,4,"");
echo "Carro compacto:";
echo "\n";
$compacto-> printCar();
echo "\n";
echo "Carro de Lujo:";
echo "\n";
$lujo= new Lujo("Pagani",2023,75649,3000000,2,"");
$lujo-> printCar();
echo"\n";
echo "Camioneta:";
echo "\n";
$camioneta= new Camioneta("Ford",2023,9834753,70000,4,403);
$camioneta-> printCar();
?>