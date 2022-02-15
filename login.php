<?php
    include('connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if($role == "Dealer")
    {
        $sql = "SELECT * FROM dealers WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $sql);
	    $num_rows = mysqli_num_rows($result);
	    if($num_rows > 0)
	    {
            session_start();
            $data = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $data['dealer_id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['phone'] = $data['phone'];
            $_SESSION['materialNature'] = $data['materialNature'];
            $_SESSION['materialWeight'] = $data['materialWeight'];
            $_SESSION['quantity'] = $data['quantity'];
            $_SESSION['state'] = $data['state'];
            $_SESSION['city'] = $data['city'];

            echo "<script> alert('Login Successful!!!')</script>";
            include("welcomedealer.php");
            exit();
        }
        else
        {
            echo "<script> alert('Invalid Login !!!')</script>";
            echo "<script> window.location.href = 'login.html';</script>";
            exit();
        }
    }
    else if($role == "Driver")
    {
        $sql = "SELECT * FROM drivers WHERE driver_email = '$email' AND driver_pass = '$password'";
        $result = mysqli_query($con, $sql);
	    $num_rows = mysqli_num_rows($result);
	    if($num_rows > 0)
	    {
            session_start();
            $data = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $data['driver_id'];
            $_SESSION['email'] = $data['driver_email'];
            $_SESSION['password'] = $data['driver_pass'];
            $_SESSION['name'] = $data['driver_name'];
            $_SESSION['phone'] = $data['driver_phone'];
            $_SESSION['age'] = $data['driver_age'];
            $_SESSION['truck_no'] = $data['truck_no'];
            $_SESSION['truck_cap'] = $data['truck_cap'];
            $_SESSION['trans_name'] = $data['trans_name'];
            $_SESSION['driver_exp'] = $data['driver_exp'];

            echo "<script> alert('Login Successful!!!')</script>";
            include("welcomedriver.php");
            exit();
        }
        else
        {
            echo "<script> alert('Invalid Login !!!')</script>";
            echo "<script> window.location.href = 'login.html';</script>";
            exit();
        }
    }
?>