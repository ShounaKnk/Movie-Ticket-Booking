<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $b_id = $_POST["bid"];
        $theater=$_POST["Theater"];
        $showtime=$_POST["Showtime"];
        $seats=$_POST["seats"];
        $n=count($seats);
        $sel_seats ="";
        for($i =0; $i<$n; $i++  )   
        {
            $sel_seats = $sel_seats." ".$seats[$i];
        }

        $q1="update tickets set theater='$theater', showtime='$showtime', seats='$sel_seats' where b_id='$b_id'";
        $r1=mysqli_query($conn,$q1);
        header("Location: ticket_display.php");
        mysqli_close($conn);
    }
?>