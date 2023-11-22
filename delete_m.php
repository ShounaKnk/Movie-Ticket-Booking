<?php
    $conn=mysqli_connect("localhost","root","","movie");
    if($conn)
    {
        $M_id=$_POST["m_id"];
        $q1="delete from movies where m_id='$M_id'";
        $r1=mysqli_query($conn,$q1);
        header("Location: HomePage.php");
        mysqli_close($conn);
    }
?>