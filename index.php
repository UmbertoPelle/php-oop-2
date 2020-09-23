<?php
 // nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto

class Square{

  public $side;

  public function __construct($side){
    $this -> side = $side;
  }

  public function getStr() {
    return 'Side: '. $this -> side. '<br>'
          . 'Area: '. $this -> getArea().'<br>'
          . 'Perimeter: '. $this -> getPer().'<br>';
  }

  public function getArea(){
    return $this -> side * $this -> side;
  }

  public function getPer(){
    return $this -> side * 4;
  }

  public function __toString(){
    return 'Square -><br>'. $this -> getStr() . '<br>';
  }
}

$square = new Square(2);
$square2 = new Square(6);

echo $square . $square2;
