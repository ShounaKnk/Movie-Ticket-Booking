<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $T_id=$_POST["tid"];
        $q1="delete from theatre where T_id='$T_id'";
        $r1=mysqli_query($conn,$q1);
        if($r1)
        {
            echo "<script>alert ('Theater deleted successfully')</script>";
            header("Location: theatres.php");
        }
        mysqli_close($conn);
    }
?>