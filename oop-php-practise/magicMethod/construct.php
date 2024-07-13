<?php

/*
magic methods 
-	methods special name start with double underScore [ ___ ]
construct:
--- called when object is created 
--- can be inherted 
destruct:
--- called when object is destroyed

*/
class iphone {
	public $name ;
	public $ram;
	// public function sayHello($n){
	// 	$this->name=$n;
	// 	echo 'hello'.$n;
	// }
	public function __construct($n) {
		// echo 'object is created';
		$this->name=$n;
		echo 'hello'.$n;
	}
}
class sony extends iphone{

}
$iphone = new iphone("yasmen");
$sony = new sony("ahmad");

// $iphone->sayHello('osama');
echo '<pre>';

print_r($iphone);

echo '</pre>';
//example2
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
?>