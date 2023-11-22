<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $bid = $_POST["bid"];
        $theater=$_POST["theater"];
        $showtime=$_POST["showtime"];
        $seats=$_POST["seats"];
        $sel_seats ="";
        for($i =0; $i<30; $i++  )
        {
            $sel_seats = $sel_seats." ".$seats[$i];
        }

        $q1="update movies set theater='$theater', showtime='$showtime', seats='$seats' where b_id='$bid'";
        $r1=mysqli_query($conn,$q1);
        header("Location: ticket_display.php");
        mysqli_close($conn);
    }
?>