<?php
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM booking WHERE driver_email = '$email'";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Service</title>

    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript" src="cities.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;800&family=Cormorant+Garamond:ital,wght@1,500&family=Courgette&family=IM+Fell+English+SC&family=Kaisei+Decol:wght@700&family=Playfair+Display+SC:ital,wght@1,700&display=swap" rel="stylesheet">

    <style>
        .list-group, .list-group-item, .list-group-flush {
            background-color: rgb(253, 169, 74);
        }
    </style>

</head>
<body style="background-color: rgb(253, 169, 74);">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(253, 187, 112);">
        <div class="container">
            <a class="navbar-brand" style="font-size: 28px; font-family: Cinzel; font-weight: 800px;" href="#">WEB BUSTERS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px; margin-left: 25px; font-style: bold;" href="driverprofile.php">View Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px; margin-left: 25px; font-style: bold;" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="fluid-container" style="background-color: rgb(3, 41, 77); height: 50px; color:rgb(223, 222, 222); font-family: serif;">
        <center>
            <div>
                <h1>Welcome <?php echo 'Driver' .' '. $name ;?></h1>
            </div>
        </center>
    </div>
    <div class="divider div-transparent div-dot" style="background-color: black;"></div>
    <br>
    <div class="container">
        <center>
            <h2 class="three">The Following Are Your Bookings</h2>
        </center>
    </div>
<br>
<section id="table">
    <div class="container">
        <center>
            <?php
                if($num_rows > 0)
                    {
            ?>
            <table class="table table-sm mt-3" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">Booking Id</th>
                        <th scope="col">Dealer Email</th>
                        <th scope="col">Source State</th>
                        <th scope="col">Source City</th>
                        <th scope="col">Destiny State</th>
                        <th scope="col">Destiny City</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result)) 
                                {
                                    $booking_id = $row['booking_id'];
                                    $dealer_email = $row['dealer_email'];
                                    $source_state = $row['source_state'];
                                    $source_city = $row['source_city'];
                                    $destiny_state = $row['destiny_state'];
                                    $destiny_city = $row['destiny_city'];
                        ?>
                                    <th scope="row" class="white"><?php echo $booking_id; ?></th>
                                    <td class="white"><?php echo $dealer_email; ?></td>
                                    <td class="white"><?php echo $source_state ?></td>
                                    <td class="white"><?php echo $source_city ?></td>
                                    <td class="white"><?php echo $destiny_state ?></td>
                                    <td class="white"><?php echo $destiny_city; ?></td>
                        <?php
                                }
                            }
                                else
                                {
                                    echo '<center><h2 class="three">No Bookings Yet!</h2></center>';?>
                        <?php
                                }
                        ?>
                            
                    </tr>
                </tbody>
            </tbody>
            </table>
        </center>
    </div>
</section>

<div class="fluid-container mt-5">
    <div class="divider div-transparent div-dot" style="background-color: black;"></div>
</div>
<br>
<section id="section5" style="background-color: rgba(44, 37, 37, 0.966); height: 60%;">
    <div class="fluid-container">
        <div class="container">
        <div class="row" style="align-items: center;">
            <div class="col-sm-6" style="align-items: center;">
                <div class="container" style="align-items: center;">
                    <h2 style="font-family:serif; font-weight: 700; color: rgb(247, 247, 247);">
                        <i class="far fa-envelope"></i> Send Us Your Query
                    </h2> <br>
                    <font style="font-size:18px; font-weight: 600; color: rgba(249, 255, 254, 0.973);">
                        <div>
                            <i class="fas fa-angle-right"></i>  Address : Web-Busters Transport, Nagpur, Maharshtra<br>
                            <span> Pin-Code - 441110</span>
                        </div><br>
                        <div>
                            <i class="fas fa-angle-right"></i>  E-mail : web_busterstransport@gmail.com
                        </div><br>
                        <div>
                            <i class="fas fa-angle-right"></i>  Contact : +91 8055291168
                        </div>
                    </font>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="container">
                    <div style="float: inline-end;">
                    <form class="contact mb-5">
                        <div class="row">
                            <div class="col">
                                <label for="fname" class="form-label ctext">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="lname" class="form-label ctext">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>
    
                        <div class="mt-1">
                            <label for="exampleFormControlInput1" class="form-label ctext">Email Address :</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mt-1">
                            <label for="exampleFormControlTextarea1" class="form-label ctext">Message :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Message"></textarea>
                        </div>
                        <div class="mb-0" style="margin-top: 15px;">
                            <input type="button" class="sendbutton" value="Send Message"></a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container" style="background-color: bisque;">
    <center>
        <b style="font-size:18px;">Copyright &copy; Web-Busters, This Project is Made For Flipr-XII Hackathon.</b>
    </center>
</div>

</body>
</html>