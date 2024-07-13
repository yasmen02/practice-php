<?php
/*
 * JSON =>
 * stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
 * is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.
 *
 */
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
//json_encode() function is used to encode a value to JSON format.
$age_encode= json_encode($age);
echo $age_encode;

echo '<br>';

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);
//access to decode value
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
