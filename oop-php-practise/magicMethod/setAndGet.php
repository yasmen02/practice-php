<?php

/*
magic methods 
-	methods special name start with double underScore [ ___ ]
Get:
-called when getting a prperty not accessible or not founds
-accept one parameters [ $prop ]
set:
-called when setting a value to a properaty not accessible or not found 
-accept two parameters [ $prop , $value]
*/
class iphone {

	public $name ;
	public $ram;
	// private $coloring;
	// public function __get($prop){
	// 	echo 'the properaty [ '. $prop . ' ] is not found or not accessible <br> ';
	// }
	public function __set($prop,$val){
		echo 'the properaty [ '. $prop . ' ] is not found or not accessible <br> ';
		echo 'and you cannot assign this['. $val .']to it <br>';
	}

}
$phone = new iphone();
echo $phone->coloring='red';
echo $phone->color='yellow';

// echo $phone->width;

echo '<pre>';

print_r($phone);

echo '</pre>';

?>