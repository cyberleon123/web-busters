<?php
    include('connection.php');

    if(isset($_POST['submit']))
    {
        $fromstate = $_POST['fromstate1'];
        $fromcity = $_POST['fromcity1'];
        $tostate = $_POST['tostate1'];
        $tocity = $_POST['tocity1'];

        $sql1 = "SELECT * FROM routes WHERE fromcity1 = '$fromcity' AND tocity1 = '$tocity'";
        $result1 = mysqli_query($con, $sql1);
        $num_rows1 = mysqli_num_rows($result1);

        $sql2 = "SELECT * FROM routes WHERE fromcity2 = '$fromcity' AND tocity2 = '$tocity'";
        $result2 = mysqli_query($con, $sql2);
        $num_rows2 = mysqli_num_rows($result2);

        $sql3 = "SELECT * FROM routes WHERE fromcity3 = '$fromcity' AND tocity3 = '$tocity'";
        $result3 = mysqli_query($con, $sql3);
        $num_rows3 = mysqli_num_rows($result3);

        if($num_rows1 > 0)
        {
            $i=0;
            while($row1 = mysqli_fetch_array($result1)) 
            {
                $sql = "SELECT * FROM drivers WHERE driver_email = '$row1[driver_email]'";
                $result = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0)
                {
                    while($row2 = mysqli_fetch_array($result)) 
                    {
                        $driverid = $row2['driver_id'];
                        $drivername = $row2['driver_name'];
                        $driveremail = $row2['driver_email'];
                        $driverphone = $row2['driver_phone'];
                        $driverage = $row2['driver_age'];
                        $truck_no = $row2['truck_no'];
                        $truck_cap  = $row2['truck_cap'];
                        $trans_name = $row2['trans_name'];
                        $driver_exp = $row2['driver_exp'];
                    }
                }
            $i++;
            }
        }

        if($num_rows2 > 0)
        {
            $i=0;
            while($row1 = mysqli_fetch_array($result2)) 
            {
                $sql = "SELECT * FROM drivers WHERE driver_email = '$row1[driver_email]'";
                $result = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0)
                {
                    while($row2 = mysqli_fetch_array($result)) 
                    {
                        $driverid = $row2['driver_id'];
                        $drivername = $row2['driver_name'];
                        $driveremail = $row2['driver_email'];
                        $driverphone = $row2['driver_phone'];
                        $driverage = $row2['driver_age'];
                        $truck_no = $row2['truck_no'];
                        $truck_cap  = $row2['truck_cap'];
                        $trans_name = $row2['trans_name'];
                        $driver_exp = $row2['driver_exp'];
                    }
                }
            $i++;
            }
        }

        if($num_rows3 > 0)
        {
            $i=0;
            while($row1 = mysqli_fetch_array($result3)) 
            {
                $sql = "SELECT * FROM drivers WHERE driver_email = '$row1[driver_email]'";
                $result = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0)
                {
                    while($row2 = mysqli_fetch_array($result)) 
                    {
                        $driverid = $row2['driver_id'];
                        $drivername = $row2['driver_name'];
                        $driveremail = $row2['driver_email'];
                        $driverphone = $row2['driver_phone'];
                        $driverage = $row2['driver_age'];
                        $truck_no = $row2['truck_no'];
                        $truck_cap  = $row2['truck_cap'];
                        $trans_name = $row2['trans_name'];
                        $driver_exp = $row2['driver_exp'];
                    }
                }
            $i++;
            }
        }
        include('driversearchresult.php');
        exit;
    }

?>