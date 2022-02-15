<?php
    include('connection.php');
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM booking WHERE driver_email = '$email'";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0)
    {
        $i=0;
        while($row = mysqli_fetch_array($result)) 
        {
            $booking_id = $row['booking_id'];
            $dealer_email = $row['dealer_email'];
            $source_state = $row['source_state'];
            $source_city = $row['source_city'];
            $destiny_state = $row['destiny_state'];
            $destiny_city = $row['destiny_city'];
            include('welcomedriver.php');
            exit;
        }
    }