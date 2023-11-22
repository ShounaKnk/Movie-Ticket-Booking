<?php
    $con = mysqli_connect("localhost","root","","movie_ticket_booking");
    if(isset($_COOKIE['Mid']))
    {
        $mid = $_COOKIE['Mid'];
        $q1="select * from tickets";
        $r=mysqli_query($con,$q1);
        $n=mysqli_num_rows($r);
    }
    else
        echo "error in fetching the data";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="commoncss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .ticket_container{
            background-color: #363636;
            border-radius: 25px;
            margin-top: 30px;
            padding-bottom: 15px;
            margin-bottom: 30px;
            display: inline-block;
            padding-right: 20px;
            margin-left: 320px;
            padding: 20px;
            width: 700px;
            color: white;
        }

        .ticket_card{
            margin-top: 20px;
            width: 700px;
            height: 170px;
            background-color: azure;
        }

        .about{
            display: inline-block;
        }
        
        .Mname{
            margin: 10px 0 0 10px;
            text-transform: uppercase;
            display: inline;
        }
    </style>

</head>
<body>
    <div class="page_head">
        <h1>Tickets</h1>
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.php"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
        <a href="theatres.php"><i class="fa fa-fw fa-user"></i>Theaters</a>
    </div>
    <div class="ticket_container">
    <?php
            if($r)
            {
                echo "TOTAL MOVIES ARE: ".$n;
                while($info=mysqli_fetch_array($r))
                {
                    if(isset($info))
                    {
                        echo "<br><br>";
                            echo "<br>Booking ID: ".$info['b_id'];
                            echo "<br>Movie ID: ".$info['m_id'];
                            echo "<br>Movie Name: ".$info['m_name'];
                            echo "<br>Theater Name: ".$info['theater'];
                            echo "<br>Showtime: ".$info['showtime'];
                            echo "<br>Seats: ".$info['seats'];
                    }
                }
            }
            else
                echo "error in fetching the data";
            mysqli_close($con);
            
        ?>
        </div>
        <div class="select_button">
            <a href="HomePage.html" id="bbutton"><span id="button_text">Add</span></a>
            <a href="update_ticket.html" id="bbutton"><span id="button_text">Update</span></a>
            <a href="delete_ticket.html" id="bbutton"><span id="button_text">Delete</span></a>
        </div>
        
    </div>
</body>
</html>