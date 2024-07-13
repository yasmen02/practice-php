<?php 

/*
	inhertance & overRide
	Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

*/
class appleDevice{
// properties
	public $ram   = '1GB' ;// visibality marker
	public $inch  = '4 inch';
	public $space = '16 GB';
	public $color = 'Silver';
	public $screen= 'LCD';
	public $name;
	// public $price;

//method
	public function changeSpace($r , $in , $sp, $co){
		$this->ram   = $r;
		$this->inch  = $in;
		$this->space = $sp;
		$this->color = $co;
	}
	public function sayHello($n){
		$this->name =$n;
		echo 'welcome to '.$n;
	}

}
class sony extends appleDevice{
// properties

	public $camera= '25MB';
		public function sayHello($n){
		$this->name =$n;
		echo 'welcome to ' . $n . ' this phone has '.$this->ram .' RAM';
	}
}

$iphone6plus = new appleDevice();
$iphone6plus->changeSpace("3GB" , "5 Inch" , "32GB" , "RoseGold");
$iphone6plus->sayHello('iphone');
$iphone6plus->price= '400$';

echo '<pre>';

var_dump($iphone6plus);

echo '</pre>';

$sony= new sony();
$sony->changeSpace("3GB" , "5 Inch" , "32GB" , "Gold" );
$sony->sayHello('sony');
echo '<pre>';

var_dump($sony);

echo '</pre>';


//example2
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight; 
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();


?>