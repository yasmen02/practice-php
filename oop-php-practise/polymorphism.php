<?php
/*

polymorphism
-	have methods without code
-	use iplements keywords

*/
interface mobile{
	public function pressHome();
}
class iphone implements mobile{
	public $name;

	public function pressHome(){
		echo 'you will see opened Applications ';
	}
}
class sony implements mobile{
	public $name;

	public function pressHome(){
		echo 'you will see closed Applications ';

	}
}
$iphone = new iphone();
$iphone->pressHome();
echo '<pre>';

print_r($iphone);

echo '</pre>';
$sony = new sony();
$sony->pressHome();
echo '<pre>';

print_r($sony);

echo '</pre>';
//example2
interface DBConnects{
	public function getUsers();
	public function getArticles();
	public function showStates();
}
class mySql implements DBConnects{

	public function getUsers()
	{
		echo "SELECT * FROM users ";
	}
	public function getArticles(){
		echo "SELECT * FROM articles ";
	}
	public function showStates(){
		echo "SELECT * FROM states ";
	}
}
$row =new mySql();
$row->getUsers();
$row->getArticles();
$row->showStates();

echo '<pre>';
 print_r($row);
echo '<pre>';

class oracle implements DBConnects{
public function getUsers()
	{
		echo "SELECT * FROM users ";
	}
	public function getArticles(){
		echo "SELECT * FROM articles ";
	}
	public function showStates(){
		echo "SELECT * FROM states ";
	}
}

?>
