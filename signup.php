<!-- for driver -->
<?php
    include "connection.php";
    session_start();

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $truck_no = $_POST['truck_no'];
    $truck_cap = $_POST['truck_cap'];
    $transname = $_POST['transName'];
    $driverexp = $_POST['driverexp'];

    $sql = "SELECT * FROM drivers WHERE driver_email = '$email'";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0)
    {
        echo '<script>alert("Email Already Exists")</script>';
        echo '<script>window.location.href="driver.html";</script>';
    }
    //name_validation
    else if (!preg_match ("/^[a-z A-z]*$/", $name) ) {    
        echo '<script>alert("Name Should Contain Only Alphabets and Whitespace.")</script>';  
        echo '<script>window.location.href="driver.html";</script>';
    }

    else if($password != $confirm_password){
        echo '<script>alert("Password And Confirm Password Is Not Same !")</script>';
        echo '<script>window.location.href="driver.html";</script>';
    }
    else
    {
        $sql="insert into drivers values('','$email', '$password', '$name', '$phone', '$age', '$truck_no', '$truck_cap', '$transname', '$driverexp')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo '<script>alert("Account Registered Successfully !!!")</script>';

            $_SESSION['email'] = $email;
            include('routes.html');
            exit;
        }
        else
        {
            echo '<script>alert("Something Went Wrong !!!")</script>';
            echo '<script>window.location.href="dealer.html";</script>';
        }
    }
?>