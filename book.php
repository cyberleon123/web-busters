<?php
    include('connection.php');
    session_start();
    $fromstate = $_SESSION['fromstate'];
    $fromcity = $_SESSION['fromcity']; 
    $tostate = $_SESSION['tostate']; 
    $tocity = $_SESSION['tocity']; 

    if(isset($_POST['submit']))
    {
        $driveremail = $_SESSION['driveremail'];
        $dealer_email = $_SESSION['email'];
        $sourcestate = $fromstate;
        $sourcecity = $fromcity;
        $destinystate = $tostate;
        $destinycity = $tocity;
                            
        $query = "INSERT INTO booking VALUES ('', '$dealer_email', '$driveremail', '$sourcestate', '$sourcecity', '$tostate', '$tocity')";
        $execute = mysqli_query($con, $query);

        if($execute)
        {
            echo "<script>alert('Booking Successful');</script>";
            echo "<script>window.location.href='logout.php';</script>";
        }
        else{
            echo "<script>alert('Something Went Wrong !!!');</script>";
            echo "<script>window.location.href='logout.php';</script>";
        }
    }
?>