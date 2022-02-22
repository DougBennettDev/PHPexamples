<?php
Class Sales
{
	public function __construct($price,$quantity,$tax,$rate)
	{
		$this->cost = $price;
		$this->quantity = $quantity;
		$this->taxable = $tax;
		$this->taxrate = $rate;
		self::calctax();
		self::calctotal();
		self::gettax();
	}
	
	public function calctax()
	{
		$this->taxamount = $this->totalcost * $this->taxrate;
	}
	
	public function calctotal()
	{
		self::calctax()
		$this->totalcost = //something
	}
	
	public function gettax()
	{
		self::calctotal()
		self::calctax()
		$this->gettax = //something
	}
	
	
}

?>