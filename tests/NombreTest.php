<?php
include('../src/Nombre.php');
use Compteur\Nombre;

class NombreTest extends PHPUnit_Framework_TestCase
{
	public function testEstMultipleDeCinq(){
		$this->assertEquals(true, Nombre::estMultipleDeCinq(10));
		$this->assertEquals(false, Nombre::estMultipleDeCinq(11));
	}

	public function testEstMultipleDeTrois(){
		$this->assertEquals(true, Nombre::estMultipleDeTrois(213840));
		$this->assertEquals(false, Nombre::estMultipleDeTrois(13));
	}
	
}

?>