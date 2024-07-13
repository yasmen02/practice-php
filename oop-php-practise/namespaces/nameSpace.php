<?php
// No need for namespace comment, instead, use namespace declaration directly in files if needed.

require 'apple.php';
require 'sony.php';
require 'lg.php';

$iphone = new apple\createPhone(); // Assuming `createPhone` is the correct class name in `sony` namespace.
print_r($iphone);
?>
