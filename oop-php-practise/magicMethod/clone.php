<?php

/*
magic methods 
-	methods special name start with double underScore [ ___ ]
clone & clone keyword:
- typical copy of object in php works by reference means both ( main and copied ) object will be interlinked.
*/
class iphone {

	public $name ;
	public $email ;

	public function __construct($n,$e){
		$this->name=$n;
		$this->email=$e;
	}
	public function __clone(){
		$this->name = clone $this->name;
	}
}
$main = new iphone("yasmen","yasmen@gmail.com");
$copy = clone $main;//copy by referance
$main->name="ahmad";
$copy->name="zain";

echo '<pre>';

print_r($main);

echo '</pre>';
echo '<pre>';

print_r($copy);

echo '</pre>';
?>