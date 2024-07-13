<?php
session_start();

//isset($_SESSION['views'])?$_SESSION['views']++ :$_SESSION['views']=1;

echo"hello " .$_SESSION['name'] . " view count is ". $_SESSION['views'];

echo '<a href="about.php">about</a>';