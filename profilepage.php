<?php
    $con = mysqli_connect("localhost", "root", "", "movie_ticket_booking");
    $q = "select * from user_details where status = 'active'";
    $r = mysqli_query($con, $q);
    $info = mysqli_fetch_array($r);
    $username = $info['username'];
    $email = $info['emailID'];
    $phno = $info['phno'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="commoncss.css">
    <style>
        .profile_box{
            background-color: rgb(54, 54, 54);
            margin: 35px 200px ;
            padding: 20px;
            border-radius: 25px;
            height: 460px;
        }

        .profile_img{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            width: 420px;
            padding: 20px;
            display: inline-block;
            border-radius: 25px;
        }
        .info{
            margin-top:50px;
        }


        .profile_about{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            position: absolute; 
            width: 500px;
            height: 400px;
            padding: 20px;
            border: solid red;
            margin-left: 20px;
            margin-top: 10px;
            display: inline-block;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <div class="Pageheader">
        <div class="header_text">
            <h1>MovieMyShow</h1>
        </div>
    </div>
    <div class="container">
        <div class="page_head">
            <h1 style="color: red;">Profile</h1>
        </div>
        <div class="topnav">
            <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
            <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
            <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
            <a href="login.html"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
        </div>
        <div class="profile_box">
            <div class="profile_img">
                <img src="mypic.png" alt="pfp" style="border-radius: 25px; width: 400px; border: solid red 10px;">
            </div>
            <div class="profile_about">
                <h2  style="color: white;">About</h2><hr>
                <div class="info" style="color: white;">
                    <label>username: </label><?php echo $username."<br><br>" ?>
                    <label>Email Id</label><?php echo $email."<br><br>" ?>
                    <label>Phone Number</label><?php echo $phoneno."<br><br>" ?><br> 
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
</body>
</html>