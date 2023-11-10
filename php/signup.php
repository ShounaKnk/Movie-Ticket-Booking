<?php
    function get_data()
    {
        $con = mysqli_connect("localhost", "root", "", "movie_ticket_booking");
        if($con){
            echo "connection successful";
        }
        else{
            echo "connection unsuccessful";
        }
    }
    get_data();
?>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Movie Ticket Booking</h1>
    <hr>
    <h2>Sign Up</h2>
    <form action="signup.php" method="post">
        <input type="text" id="name" placeholder="Enter Name">
        <br><br>
        <input type="text" id="username" placeholder="Enter username">
        <br><br>
        <input type="text" id="em" placeholder="Enter Email ID">
        <br><br>
        <input type="text" id="phno" placeholder="Enter Phone number">
        <br><br>
        <label>Gender</label><br>
        <input type="radio" id="m" name="g" value="male">Male&nbsp;
        <input type="radio" id="f" name="g" value="female">female&nbsp;
        <input type="radio" id="o" name="g" value="others">Others&nbsp;
        <br><br>
        <label>Date of Birth</label><br>
        <input type="date" id="DOB">
        <br><br>
        <input type="checkbox" checked id="prsnlz">I agree to share my data for personalized expirience<br>

        <input type="checkbox" id="t&c">I agree to <a href="t&c.txt">terms and conditions</a>
        <button type="submit">Submit</button>
    </form> 
    
</body>
    </form>
</body>
</html>