<?php 
class Auto {    
    public $modelo;
    public $color;
    public $volumenDeTanque;
    public $marca;
    
    public function __construct($modelo,$marca,$color,$volumenDeTanque)
    {
      $this->modelo = $modelo;
      $this->color = $color;
      $this->marca = $marca;
      $this->volumenDeTanque = $volumenDeTanque;
    }   
    public function obtenerInformacion(){
      echo "=====================================<br>";
      echo "MODELO: $this->modelo <br>";
      echo "MARCA: $this->marca<br>";
      echo "COLOR: $this->color<br>";
      echo "VOLUMEN DE TANQUE: $this->volumenDeTanque Litros<br>";
      echo "RECORRE: {$this->calcularKmConTanqueLleno()} Km.<br>";
      echo "=====================================<br>";
    }
    public function calcularKmConTanqueLleno()
    {
      return $this->volumenDeTanque * 30;
    }
}


$catalogo = array(new Auto('2018', 'HONDA','Verde','50'),
                  new Auto('2018', 'TOYOTA','Azul','25'),
                  new Auto('2016', 'TOYOTA','Negro','55'),
                  new Auto('2014', 'TOYOTA','Gris','75'),
                  new Auto('2013', 'NISSAN','Naranja','15'));
foreach($catalogo as $auto) 
{
    $auto->obtenerInformacion();
    
}

    