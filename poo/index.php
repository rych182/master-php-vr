<?php

class Coche
{
	public $color = "Rojo";
	public $marca = "Ferrari";
	public $modelo = "Aventador";
	public $velocidad = 300;
	public $caballaje = 500;
	public $plazas = 2;

	public function getColor()
	{
		return $this->color;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function acelerar()
	{
		$this->velocidad++;
	}

	public function frenar()
	{
		$this->velocidad--;
	}

	public function getVelocidad()
	{
		return $this->velocidad;
	}
}

$coche = new Coche();
//echo $coche->getVelocidad();
$coche->setColor("Amarillo");
echo "El color del coche es: " . $coche->getColor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "<br>Velocidad de coche: " .$coche->getVelocidad() . "<br>";

$coche2 = new Coche();
$coche2->setColor("Verde");

var_dump($coche);
var_dump($coche2);