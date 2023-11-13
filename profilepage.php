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
            border-radius: 25px;
            height: 500px;
        }

        .profile_img{
            /* position: relative;
            top: 25px;
            left: 25px;
            display: inline-block; */
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            width: 420px;
            padding: 20px;
            margin: 10px;
            border: solid red;
            display: inline-block;
            border-radius: 25px;
        }

        .profile_about{
            /* position: relative;
            left: 60px;
            top: 25px;
            background-color: red;
            height: 420px;
            width: 600px;
            border-radius: 25px;
            display: inline-block; */
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            position: relative; 
            width: 500px;
            padding: 20px;
            border: solid red;
            margin: 10px;
            display: inline-block;
            border-radius: 25px;
        }

        .info{
            
            border: solid black 5px;
            margin-top: 100px;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page_head">
            <h1 style="color: red;">Profile</h1>
        </div>
        <div class="topnav">
            <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
            <a href="my_tickets.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
            <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
            <a href="login.html"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
        </div>
        <div class="profile_box">
            <div class="profile_img">
                <img src="mypic.png" alt="pfp" style="border-radius: 25px; width: 400px; border: solid red 10px;">
            </div>
            <div class="profile_about" style="color: black;">
                <h3>About</h3><hr>
                <div class="info">
                    <label>username: </label><?php echo $username."<br><br>" ?>
                    <label>Email Id</label><?php echo $email."<br><br>" ?>
                    <label>Phone Number</label><?php echo $phoneno."<br><br>" ?><br> 
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>