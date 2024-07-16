<?php
if ( isset( $_POST['name'])){
    echo 'hello'. $_POST['name'];
    echo '<br>';
    echo $_POST['lastlogin'];
}