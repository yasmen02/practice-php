<?php
/*
 * setcookie( name[required] , value , expire , path , domain , secure , http_only )
*/
class Cookies
{
    public $cookie_name = "user";
    public $cookie_value = "yasmen";

    public function __construct()
    {
        // Set the cookie when an instance of Cookies is created
        setcookie($this->cookie_name, $this->cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    }

    public function checkCookie()
    {
        if(!isset($_COOKIE[$this->cookie_name])) {
            echo "Cookie named '" . $this->cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $this->cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$this->cookie_name];
        }

        // Check if Cookies are Enabled
        if(count($_COOKIE) > 0) {
            echo "<br>Cookies are enabled.";
        } else {
            echo "<br>Cookies are disabled.";
        }
    }

    public function deleteCookie()
    {
        // Delete the cookie by setting its expiration to a past time
        setcookie($this->cookie_name, "", time() - 3600, "/");
        echo "Cookie '" . $this->cookie_name . "' is deleted.";
    }
}

// Create an instance of the Cookies class
$cook = new Cookies();

// Check if the cookie is set and display its value
$cook->checkCookie();

// Optionally, delete the cookie
// $cook->deleteCookie();
?>


