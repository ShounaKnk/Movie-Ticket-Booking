<?php
    $con = mysqli_connect("localhost", "root", "", "movie_ticket_booking");
    $q = "select * from user_details where status = 'active'";
    $r = mysqli_query($con, $q);
    $info = mysqli_fetch_array($r);
    $username = $info['username'];
    $email = $info['emailID'];
    $phno = $info['phno'];
    $pword = $info['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="commoncss.css">
    <style>
        .container{
            background-color: #363636;
            border-radius: 25px;
            margin-left: 560px;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px;
            display: inline-block;
        }
        .container_head{
            display: inline-block;
            margin-top: 10px;
            
        }
        hr{
            margin-bottom:20px;
            margin-top: 0px;
        }

        .textfields{
            background-color: #363636;
            border: none;
            font-size: 15px;
            border-bottom: solid red 2px;
            padding: 10px 0 2px 5px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            display: block;
            width: 400px;
            color: white;
        }

        .textfields:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
        }

        #tc{
            text-decoration: underline;
            color: white;
        }

        label{
            margin-bottom: 20px;
        }

        #sbutton{
            background-color: red;
            border: none;
            margin-top: 20px;
            width: 400px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            height: 40px;
            border-radius: 25px;
        }
        #sbutton:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
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
        <h2>Movie Ticket Booking</h2>
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="login.html"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
    </div>
    
    <div class="container">
        <h2 class="container_head">Update Profile</h2>
        <hr>
        <form action="signup.php" method="post">
            <input type="text" class="textfields" name="username" placeholder="Enter Username" value ="<?php echo $username ?>">
            <br><br>
            <input type="text" class="textfields" name="email" placeholder="Enter Email ID" value ="<?php echo $email ?>">
            <br><br>
            <input type="text" class="textfields" name="pword" placeholder="Enter Password" value ="<?php echo $pword ?>">
            <br><br>
            <input type="text" class="textfields" name="phno" placeholder="Enter Phone number" value ="<?php echo $phno ?>">
            <br><br>
            <label>Gender</label><br>
            <input type="radio" id="m" name="gender" value="male">Male&nbsp;
            <input type="radio" id="f" name="gender" value="female">female&nbsp;
            <input type="radio" id="o" name="gender" value="others">Others&nbsp;
            <br><br>
            <label>Date of Birth</label><br>
            <input type="date" name="dob">
            <br><br>
            <input type="checkbox" checked id="prsnlz">I agree to share my data for personalized expirience<br>
            <input type="checkbox">I agree to <a href="tc.txt" id="tc">terms and conditions</a><br>
            <button type="submit" id="sbutton">Submit</button>
        </form>     
    </div>
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>

</body>
</html>