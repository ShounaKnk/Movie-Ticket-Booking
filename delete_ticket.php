<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $b_id=$_POST["b_id"];
        $q1="delete from tickets where b_id='$b_id'";
        $r1=mysqli_query($conn,$q1);
        if($r1)
        {
            echo "<script>alert ('Ticket Deleted Successfully')</script>";
            header("Location: delete_ticket_disp.php");
        }
        else{
            echo "<script>alert ('Ticket Deletion Failed')</script>";
        }
        mysqli_close($conn);
    }
?>