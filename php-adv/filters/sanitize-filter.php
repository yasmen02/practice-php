<?php
/*
 *  FILTER_SANITIZE_EMAIL==>remove all but letters +digits +?!$%&'*+=-^_`{|}~@[]
*/
$email = "jo  $#   hndoe@example.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

echo '<br>';

/*
 *  FILTER_SANITIZE_NUMBER_INT==>remove all but + , - , digits
*/
$int ="100";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

echo '<br>';
/*
 *  FILTER_SANITIZE_NUMBER_FLOAT==>remove all but + , - , digits
*/
$float ="100,555,888.54";
var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT ,["flags"=>FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND]));

echo '<br>';
/*
 *  FILTER_SANITIZE_NUMBER_INT==>remove all but + , - , digits
*/
$url ="https://www.youtube.com/watch?v=x856ztP56C8&list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq&index=80";
var_dump(filter_var($url, FILTER_SANITIZE_URL));
