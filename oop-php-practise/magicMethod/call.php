<?php

/*
magic methods 
-	methods special name start with double underScore [ ___ ]
call:
- called when invoking function not accessible or not found 
	 accept two parameters [$mthodName,$params]
*/
class iphone {

	public $name ;
	public $ram;
	public function __call($method,$params){
		echo'the method['.$method.']not found or not accesible<br>';
		print_r($params);
	}
}
$phone = new iphone();
$phone->sayHello();
$phone->welcomeToApp("yasmen", "iphone","2GB");
echo '<pre>';

print_r($phone);

echo '</pre>';

?>