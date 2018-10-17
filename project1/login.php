<?php
//error reporting
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set( 'display_errors' , 1 );

//gets the input data and creates a variable
$email = $_GET["email"];
$pass = $_GET["pass"];

if (empty($email))
    echo "Email is not valid. Please enter a valid email";
else
    echo "Email is ".$email."<br>";

if (empty($pass))
    echo "Password is not valid. Please enter a valid password";
else
    echo "Password is ".$pass;
?>