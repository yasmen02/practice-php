<?php
/*
	method chaining 
	-when a class method return the $this keyword,they can be chained together
*/
class  iphone {
	public $name;
	public $email;
	public function pressPower(){
		echo 'you have pressed the power button <br>';
		return $this;
	}
	public function bootPhone(){
		echo 'the phone is booting now ...  <br>';
		return $this;
	}
	public function sayWelcome(){
		echo 'welcome to phone  <br>';
		return $this;
	}
}
$phone = new iphone();
$phone->pressPower()->bootPhone()->sayWelcome();
echo '<pre>';
print_r($phone);
echo '<pre>';

?>