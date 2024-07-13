<?php

/*
class & object
- Class is blueprint that u can create object from
- object is member in the main application 
- class has properaties 
- var inside class = [properaty]
- var outside class = [var]
-[ class ] = class keyword
-[ new ] = new object keyword
-[public , private, protected] = visibility markers
-[ -> ] = object operator
-[ $this ] = pseudo Var [refers to object properties]
-[ :: ] = scope resoluation operator [paamayim nekuadotayim ] = double colon
[ self ] = refers to const 


apple==>
- class = apple blueprint design 
- object = iphone that china made
- application = apple store 


blog system 
- class = code to add new post ,article, news , information  
- object = post ,article, news , information  
- application = blog system


*/ 
class appleDevice{
// properties
	public $ram = '1GB' ;// visibality marker
	public $inch = '4 inch';
	public $space = '16 GB';
	public $color = 'Silver';
	public $ownerName;

// Constants
	// const chip = 'A9';
	const OWNERNAME = 5 ;	

//methods
	public function  getspecification(){
		echo 'this iphone Ram is ' .$this->ram . '<br>';
		echo 'this iphone screen Inch is ' .$this->inch . '<br>';

	}
	public function setOwnerName($owner){
		if (strlen($owner) < self::OWNERNAME){
			echo "Owner Name can't be less than " . self::OWNERNAME . " chars";
		}else {
			echo "your name has been set";
		}
	}

}

$iphone6plus = new appleDevice();
$iphone6plus->ram='2GB';
$iphone6plus->inch='5 inch';
$iphone6plus->space ='32GB';
$iphone6plus->color='Gold';
// $iphone6plus->ownerName='yasmenn';
$iphone6plus->setOwnerName('yasmen');

echo '<pre>';

var_dump($iphone6plus);

echo '</pre>';



$iphone7plus = new appleDevice();
$iphone7plus->ram='2GB';
$iphone7plus->inch='5 inch';
$iphone7plus->space ='32GB';
$iphone7plus->color='Gold';
// $iphone7plus->ownerName='ay';
$iphone7plus->setOwnerName('ay');

echo '<pre>';

var_dump($iphone7plus);

echo '</pre>';





$iphone = new appleDevice();

echo '<pre>';

var_dump($iphone);

echo '</pre>';