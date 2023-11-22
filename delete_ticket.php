<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $b_id=$_POST["b_id"];
        $q1="delete from tickets where b_id='$b_id'";
        $r1=mysqli_query($conn,$q1);
        header("Location: ticket_display.php");
        mysqli_close($conn);
    }
?>