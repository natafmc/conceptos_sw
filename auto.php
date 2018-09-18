<?php 
abstract class Car {
    protected $tankVolume;
    protected $modelo;
    public function setVolumenDeTanque($volume)
    {
        $this -> tankVolume = $volume;
    }
    public function setModelo($modelo)
    {
        $this -> modelo = $modelo;
    }    
    abstract public function calcularKmConTanqueLleno();
}

class Honda extends Car {
  public function calcularKmConTanqueLleno()  
  {
    $miles = $this -> tankVolume*30;
    return $miles;
  }
  public function getColor()
  {
    return "Rojo";
  }
}

class Toyota extends Car {
  public function calcularKmConTanqueLleno()
  {
    return $miles = $this -> tankVolume*33;
  }
 
  public function getColor()
  {
    return "Azul";
  }
  public function getModelo()
  {
      return "Toyota ".$this->modelo;
  }
}

$toyota1 = new Toyota();
$toyota1 -> setModelo("SCION 2018");
$toyota1 -> setVolumenDeTanque(10);
echo $toyota1->getModelo();
echo "<br>";
echo $toyota1 -> calcularKmConTanqueLleno().'KM ';
echo "<br>";
echo $toyota1 -> getColor();