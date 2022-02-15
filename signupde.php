<?php
include "connection.php";

$name=$_POST['fullname'];
$email = $_POST['email'];
$password=$_POST['password'];
$confirm_password = $_POST['confirm_password'];
$phone=$_POST['phone'];
$nom=$_POST['materialNature'];
$wom=$_POST['materialWeight'];
$quantity=$_POST['quantity'];
$state=$_POST['stt'];
$city = $_POST['city'];

    $sql = "SELECT * FROM dealers WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0)
    {
        echo '<script>alert("Email Already Exists")</script>';
        echo '<script>window.location.href="dealer.html";</script>';
    }
         //name_validation
    else if (!preg_match ("/^[a-z A-z]*$/", $name) ) {    
        echo '<script>alert("Name Should Contain Only Alphabets and Whitespace.")</script>';  
        echo '<script>window.location.href="dealer.html";</script>';
    }
    else if($password != $confirm_password){
        echo '<script>alert("Password And Confirm Password Is Not Same !")</script>';
        echo '<script>window.location.href="dealer.html";</script>';
    }
    else 
    {
        $sql="insert into dealers values('','$email','$password', '$name', '$phone','$nom','$wom','$quantity', '$state', '$city')";
        
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo '<script>alert("Account Registered Successfully !!!")</script>';
            echo '<script>window.location.href="login.html";</script>';
        }
        else{
            echo '<script>alert("Something Went Wrong !!!")</script>';
            echo '<script>window.location.href="dealer.html";</script>';
        }
    }

?>