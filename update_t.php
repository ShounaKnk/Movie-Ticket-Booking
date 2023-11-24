<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $T_id=$_POST["tid"];
        $T_name=$_POST["tname"];
        $T_location=$_POST["tlocation"];
        $T_capacity=$_POST["tcapacity"];
        $T_screens=$_POST["tscreens"];
        $T_owner=$_POST["towner"];


        $q1="update theatre set T_id='$T_id', T_name='$T_name', T_location='$T_location', T_capacity='$T_capacity', T_screens='$T_screens', T_owner='$T_owner' where T_id='$T_id'";
        $r1=mysqli_query($conn,$q1);
        if($r1)
        {
            echo "<script>alert ('Theater details updated successfully')</script>";
            header("Location: theatres.php");
        }
        
        mysqli_close($conn);
    }
?>