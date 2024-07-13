<?php 

/*
	Class Abstract
	-	Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
	-cannot be instaniated [cannot create object ]
	-	made for other classes to inherit prop & methods from
	-	can have methods & prop 
	-	can have abstracted methods and non abstracted methods 
	-	abstracted methods [ contains no body code ]
	* rules to go on
	* force developers to follow your methods

*/
 
 abstract class makeDevice{
 	 // public $ram;
 	 // public function sayHello(){
 	 // 	echo ' hello';
 	 //}
 	 abstract public function testPerformance() ;//error if dont declare in subClass
 	 abstract public function verifyOwner() ;
 	 abstract public function sayWelcome($n) ;

 }


 class iphone extends makeDevice{
 	public $Owner;

    public function testPerformance(){
      	echo 'Performance is good 100%';
      } 
 	public function verifyOwner() {
      	echo 'Owner is verfied';

 	  }
 	public function sayWelcome($n) {
 		$this->owner =$n;
      	echo 'Welcome'.$n;

 	  }
}
 class ipad extends makeDevice{
 	public $Owner;
 	public function testPerformance(){
      	echo 'Performance is good 100%';
      } 
	public function verifyOwner() {
      	echo 'Owner is verfied';

 	  }
 	public function sayWelcome($n) {
      	$this->owner =$n;
      	echo 'Welcome'.$n;

 	  }
}

$iphone = new iphone();
$iphone->sayWelcome('yasmen');
echo '<pre>';

var_dump($iphone);

echo '</pre>';
$ipad = new ipad();
$ipad->sayWelcome('ahmad');

echo '<pre>';

var_dump($ipad);

echo '</pre>';






?>