<?php
 // nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto

class Square{

  public $side;

  public function __construct($side){
    $this -> side = $side;
  }

  public function getArea(){
    return $this -> side * $this -> side;
  }

  public function getPer(){
    return $this -> side * 4;
  }

  public function getStr() {
    return 'Side: '. $this -> side. '<br>'
    . 'Area: '. $this -> getArea().'<br>'
    . 'Perimeter: '. $this -> getPer().'<br>';
  }

  public function __toString(){
    return 'Square -><br>'. $this -> getStr() . '<br>';
  }
}

class Cube extends Square{
  public function getVol(){
    return $this -> getArea() * $this -> side ;
  }

  public function getSuper(){
    return 6 * $this -> getArea() ;
  }

  public function getStr() {
    return 'Side: '. $this -> side. '<br>'
    . 'Area: '. $this -> getVol().'<br>'
    . 'Surface: '. $this -> getSuper().'<br>';
  }

  public function __toString(){
    return 'Cube -><br>'. $this -> getStr() . '<br>';
  }
}

$square = new Square(2);
$square2 = new Square(6);

$cube = new Cube(4);
$cube2 = new Cube(8);

echo $square . $square2;

echo "<br><br>";

echo $cube . $cube2;
