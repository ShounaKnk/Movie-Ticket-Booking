<?php
    // $movie_id = $_COOKIE['Mid'];
    // $movie_name = $_COOKIE['Mn'];
    // $movie_name = $_COOKIE['Theater'];
    // $movie_name = $_COOKIE['ShowT'];
    // $movie_name = $_COOKIE['seats'];
    $con = mysqli_connect("localhost","root","","movie_ticket_booking");
    $mid = $_COOKIE['Mid'];
    $q1="select * from tickets where m_id='$mid'";
    $r=mysqli_query($conn,$q1);
    $n=mysqli_num_rows($r1);
    if($r1)
    {
        $info=mysqli_fetch_array($r1);
        $bookingtID = $info['b_id'];
        $movie_id = $info['m_id'];
        $movie_name = $info['m_name'];
        $TheaterN = $info['theater'];
        $showTime = $info['showtime'];
        $seats = $info['seats'];
    }
    else
       echo "error in fetching the data";
    mysqli_close($conn);
    
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
    <script>
        // function dispDets()
        // {
        //     var mName = localStorage.getItem("Movie_name");
        //     var showT = localStorag.getItem("ShowTime");
        //     var Tname = localStorage.getItem("Theatre");
        //     document.getElementById('mName').innerHTML=mName;
        //     document.getElementById('Tname').innerHTML=Tname;
        //     document.getElementById('showT').innerHTML=showT;
        // }
    </script>

</head>
<!-- <body onload="dispDets()"> -->
<body>
    <div class="page_head">
        <h1>Tickets</h1>
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="login.html"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
    </div>
    <div class="ticket_container">
        <!-- <div class="ticket_card">
            <h2 id="Mname" style="display: inline;">
                <?php echo $movie_name?>
            </h2>
            <p id="Tname">
                <?php echo $theater ?>
            </p>
            <br style="border: dashed;">
            <span id="about">
                <?php echo $bookingID ?>
                <?php echo $showTime ?>
                <?php echo $seats ?>
            </span>
        </div> -->
        <div class="ticket_card" >
            <h2 class="Mname" style="display: inline;"><?php echo $movie_name?></h2>&emsp;<span class="Tname" ><?php echo $theater ?></span>
            <hr style="border: dashed red 2px; padding: 0; margin: 2px;">
            <div class="about">
                <p style="text-decoration: underline;"><label><b>booking id: </b></label><?php echo $bookingID ?></p>
                <p><label><b>showtime: </b></label><?php echo $showTime ?></p>
                <p><label><b>seats: </b></label><?php echo $seats ?></p>
            </div>
        </div>
        <!-- <div class="ticket_card">

        </div>
        <div class="ticket_card">

        </div>
        <div class="ticket_card">

        </div> -->
    </div>
</body>
</html>