<?php

class appleDevice{
// properties
	public $ram = '1GB' ;// visibality marker
	public $inch = '4 inch';
	public $space = '16 GB';
	public $color = 'Silver';


//method
	public function changeSpace($r , $in , $sp, $co){
		$this->ram   = $r;
		$this->inch  = $in;
		$this->space = $sp;
		$this->color = $co;
	}

}

$iphone6plus = new appleDevice();
$iphone6plus->changeSpace("3GB" , "5 Inch" , "32GB" , "RoseGold");



echo '<pre>';

var_dump($iphone6plus);

echo '</pre>';



$iphone7plus = new appleDevice();
$iphone7plus->changeSpace("4GB" , "5.5 Inch" , "64GB" , "Gold");


echo '<pre>';

var_dump($iphone7plus);

echo '</pre>';





$iphone = new appleDevice();

echo '<pre>';

var_dump($iphone);

echo '</pre>';
?>