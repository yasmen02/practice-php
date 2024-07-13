<?php
/*
 * setcookie( name[required] , value , expire , path , domain , secure , http_only )
    - if dont identify date expire end in session
    - dont store sensitive information
    -not everything saved to cookie
    -path->dirctory and sub dirctory
*/

setcookie("style", "dark" , time() + (86400 * 30));
setcookie("popup", "done" , strtotime("+1 month"));

echo '<pre>';
print_r($_COOKIE);
echo '<pre>';
//
//echo $_COOKIE["style"];
if(isset($_COOKIE["style"])){
    echo $_COOKIE["style"];
}