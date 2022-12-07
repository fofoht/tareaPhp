<?php
class  Publicacion{

public $title;
public $price;

function __construct($title,$price){
    $this->title= $title;
    $this->price= $price;
    
}

function printPublicacion(){
    echo "Title: ".$this->title;
    echo "\n";
    echo "Price: ".$this->price."$";
    echo "\n";
    
}

}

class Libro extends Publicacion{
    public $paginas;
    public $time;

function __construct($title,$price,$paginas,$time)
{
    parent:: __construct($title,$price);
    $this->paginas = $paginas;
    $this->time = $time."H";
}
function printLibro(){
    echo "Paginas: ".$this->paginas;
    echo"\n";
    echo "Time: ".$this->time;
    echo"\n";
}


}

$libro1= new Publicacion("12 rules for life. ",20);
$libro2= new Libro("","",751,6);

$libro1-> printPublicacion();
$libro2-> printLibro();

?>