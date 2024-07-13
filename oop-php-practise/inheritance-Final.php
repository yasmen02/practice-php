<?php 

/*
	inhertance & Final Keyword
	prevent method override
	prevent class inheret

*/
 class appleDevice{
// properties
	public $ram   = '1GB' ;// visibality marker
	public $inch  = '4 inch';
	public $space = '16 GB';
	public $color = 'Silver';
	public $screen= 'LCD';


//method
	public function changeSpace($r , $in , $sp, $co){
		$this->ram   = $r;
		$this->inch  = $in;
		$this->space = $sp;
		$this->color = $co;
	}

	final public function sayHello($n){
		$this->name =$n;
		echo 'welcome to '.$n;
	}
}
class sony extends appleDevice{
// properties

	public $camera= '25MB';

	// public function sayHello($n){
	// 	$this->name =$n;
	// 	echo 'welcome '.$n;
	// }
}

$iphone6plus = new appleDevice();
$iphone6plus->changeSpace("3GB" , "5 Inch" , "32GB" , "RoseGold");
$iphone6plus->sayHello('iphone');

echo '<pre>';

var_dump($iphone6plus);

echo '</pre>';

$sony= new sony();
$sony->changeSpace("3GB" , "5 Inch" , "32GB" , "Gold" );
$sony->sayHello('sony');

echo '<pre>';

var_dump($sony);

echo '</pre>';
?>