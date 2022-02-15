<?php

session_start();
$_SESSION = array();
session_destroy();
echo "<script> alert('Logout Successfull..!!!'); </script>";
echo "<script> window.location.href='login.html' </script>";


?>
