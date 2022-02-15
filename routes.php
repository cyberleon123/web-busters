<?php
    include('connection.php');
    session_start();

    $email1 = $_SESSION['email'];
    $fromstate1 = $_POST['fromstate1'];
    $fromcity1 = $_POST['fromcity1'];
    $tostate1 = $_POST['tostate1'];
    $tocity1 = $_POST['tocity1'];

    $fromstate2 = $_POST['fromstate2'];
    $fromcity2 = $_POST['fromcity2'];
    $tostate2 = $_POST['tostate2'];
    $tocity2 = $_POST['tocity2'];

    $fromstate3 = $_POST['fromstate3'];
    $fromcity3 = $_POST['fromcity3'];
    $tostate3 = $_POST['tostate3'];
    $tocity3 = $_POST['tocity3'];

    $sql="insert into routes values('', '$email1', '$fromstate1', '$fromcity1', '$tostate1', '$tocity1', 
    '$fromstate2', '$fromcity2', '$tostate2', '$tocity2', '$fromstate3', '$fromcity3', '$tostate3', '$tocity3')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        $_SESSION = array();
        session_destroy();
        echo '<script>alert("Routes Save Successfully !!!")</script>';
        echo '<script>window.location.href="login.html"</script>';
    }
    else
    {
    echo '<script>alert("Something Went Wrong !!!")</script>';
    }
?>