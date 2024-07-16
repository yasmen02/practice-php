<?php
$comment = array('thanks','thank you','good');

if (isset($_POST["comment"])){
    array_push($comment ,$_POST["comment"]);
}
foreach ($comment as $comm ) {
    echo $comm . '<br>';
}