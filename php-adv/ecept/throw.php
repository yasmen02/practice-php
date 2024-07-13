<?php
//An exception is an object that describes an error or unexpected behaviour of a PHP script.
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}


echo divide(5, 4);
echo divide(5, 0);
echo divide(5, 5);

