<?php
/*
 filter function
[validate filter]
    filter_list()
        ----return a list of all supported filters
    filter_id(filter_name[required])
        ----
    filter var(filter_name[required],filter_value[optional],options[optional])
 */

echo '<pre>';
print_r(filter_list());
echo '<pre>';

echo '<pre>';
print_r(filter_id("boolean")) . "<br>";//258
echo '<pre>';

 $val ="yas";
 if(filter_var($val, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
     echo 'this is true<br>';


 }else{
     echo 'this is False<br>';

 }
var_dump(filter_var($val, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));

 //validate URL()
 $url ="https://www.youtube.com/watch?v=MFm7DW93MAw&list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq&index=78";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
$url2="hbjnjj";
var_dump(filter_var($url2, FILTER_VALIDATE_URL));

//validate IP()
$ip = "192.168.1.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP));

//validate mac()
$mac ="00:00:5e:00:53:af";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC));


//validate email()
$email = "johndoe@example.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));


//validate INT()
$int = "104";
var_dump(filter_var($int, FILTER_VALIDATE_INT, ["flags" => FILTER_NULL_ON_FAILURE ,"options" => ["min_range" => 50,"max_range" => 100]]));

//validate FLOAT()
$float = "100.00";
var_dump(filter_var($float, FILTER_VALIDATE_FLOAT));
