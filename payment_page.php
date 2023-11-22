<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="commoncss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            background-color: #363636;
            border-radius: 25px;
            margin-top: 30px;
            padding-bottom: 15px;
            margin-bottom: 30px;
            display: inline-block;
            padding-right: 20px;
            margin-left: 455px;
        }

        .text_container{
            margin-top: 30px;
            margin-left: 22px;
            display: block;
            border-radius: 25px;
            font-size: 42px;
            text-align: center;
        }
        .thumbs_up{
            color: red;
            font-size: 80px;
            display: block;
            text-align: center;
        }
        
        #bbutton{
            position: relative;
            background-color: red;
            margin-top: 40px;
            height: 50px;
            display: block;
            width: 375px;
            left: 40px;
            text-decoration: none;
            color: white;
            border-radius: 25px;
        }
        span{
            position: absolute;
            top: 15px;
            left: 165px;
        }
    </style>
</head>
<body>
    <div class="Pageheader">
        <div class="header_text">
            <h1>MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h2>Payment</h2>
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.php"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
        <a href="login.html"><i class="fa fa-fw fa-user"></i>Theaters</a>
    </div>
    <div class="container">
        <div class="text_container" style="display:block;">
            <p>YOUR TICKETS<br>ARE ON THE HOUSE!</p>
        </div>
        <div class="thumbs_up">
            <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="button_container">
            <form action="finalDATA()">
            <div class="book_button">
                <a href="ticket_display.php" id="bbutton"><span>Paid</span></a>
            </div>
        </div>
            </form>
    </div>
    
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
</body>
</html>
<?php
    function finalDATA()
    {
        $movie_id = $_COOKIE['Mid'];
        $movie_name = $_COOKIE['Mn'];
        $TheaterN = $_COOKIE['Theater'];
        $showTime = $_COOKIE['ShowT'];
        $seats = $_COOKIE['seats'];

        $con = mysqli_connect("localhost","root","","movie_ticket_booking");
        $q = "insert into tickets(m_id, m_name, theater, showtime, seats) values('$movie_id', '$movie_name' , '$TheaterN', '$showTime', '$seats');";
        $r = mysqli_query($con, $q);
        if($r)
        {
            echo "<script>alert 'ticket booked'</script>";
            header("Location: ticket_display.html");
        }
        else{
            echo "error in entering the data";
        }
    }
?>