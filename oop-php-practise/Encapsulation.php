<?php
/*
	Encapsulation
	-	access prop ->method inside class.

*/
class appleDevice{
// properties
	public $ram   = '1GB' ;// visibality marker
	public $inch  = '4 inch';
	public $space = '16 GB';
	public $color = 'Silver';
	private $lock  ;


//method
	public function changeSpace($r , $in , $sp, $co){
		$this->ram   = $r;
		$this->inch  = $in;
		$this->space = $sp;
		$this->color = $co;
	}

	public function changeLock($lo){
		$this->lock = sha1($lo);
	}
}

$iphone6plus = new appleDevice();
$iphone6plus->changeSpace("3GB" , "5 Inch" , "32GB" , "RoseGold");
$iphone6plus->changeLock("yasmen123");
// $iphone6plus->lock ='yasmen12';
// echo $iphone6plus->lock;


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



//example2
class GFG { 
  
    private $userId; 
    private $pwd; 
      
    // Update GFG password 
    public function updatePwd($userId, $pwd) { 
          
        // Write function body 
        echo("Function to update password '"
                . $pwd . "' for user " . $userId); 
          
        echo "<br>"; 
    } 
  
    // Check account balance 
    public function courseName($userId) { 
          
        // Write function body 
        echo("Function to check course name of user "
                . $userId); 
          
        echo "<br>"; 
    } 
} 
  
$obj = new GFG(); 
$obj -> updatePwd('GFG12', 'geeks54321'); 
// echo $obj->userId;
$obj -> courseName('GFG06');
?>