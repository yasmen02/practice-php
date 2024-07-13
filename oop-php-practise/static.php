<?php
/*
-static pro/methods are used to access prop/method in a global scope
-Then, we call the static method by using the class name, double colon (::), and the method name
-Static methods can also be called from methods in other classes. To do this, the static method should be public
-To call a static property from a child class, use the parent keyword inside the child class:
-This means the property or method can be accessed without creating an instance of the class.
*/
//static methods
class greeting {
  public static function welcome() {
    echo "Hello World!<br>";
  }
  public function __construct() {
    self::welcome();
  }
}

$greet=new greeting();
//static prop
class pi {
  public static $value = 3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  } 
}

// Get value of static property directly via child class
echo x::$value;


// Get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();

?>
