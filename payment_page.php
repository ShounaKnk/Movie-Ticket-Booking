<?php
    function finalDATA()
    {
        if(isset($_COOKIE['Mid']))
        {
            $movie_id = $_COOKIE['Mid'];
            $movie_name = $_COOKIE['Mn'];
            $TheaterN = $_COOKIE['Theater'];
            $showTime = $_COOKIE['ShowT'];
            $seats = $_COOKIE['seats'];
    
            $con = mysqli_connect("localhost","root","","movie_ticket_booking");
            $q = "insert into tickets (m_id, m_name, theater, showtime, seats) values ('$movie_id', '$movie_name' , '$TheaterN', '$showTime', '$seats')";
            $r = mysqli_query($con, $q);
            if($r)
            {
                echo '<script>alert ("ticket booked")</script>';
            }
            else{
                echo "error in entering the data";
            }
        }
    }
    finalDATA();
    header("Location: ticket_display.php");
?>