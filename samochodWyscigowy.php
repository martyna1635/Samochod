<?php

include ('samochodWyscigowyInterface.php');

class samochodWyscigowy implements samochodWyscigowyInterface
{
	private $marka;
	private $model;
	private $silnik;
	private $waga;

	public function __construct($marka,$model,$waga,$moc)
	{
		$this->arka = $marka;
		$this->model = $model;
		$this->waga= $waga;
		$this->silnik = new Silnik($moc);
	}
	
	public function getMarka()
	{
		return $this->marka;
	}
	
	public function getPredkoscMaksymalna()
	{
		return $this->waga/$this->silnik->getMoc();
	}
	
	public function getPrzyspieszenie()
	{
		return $this->waga/$this->silnik->getMoc();
	}
}


?>
