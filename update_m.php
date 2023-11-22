<?php
    $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
    if($conn)
    {
        $M_id=$_POST["m_id"];
        $M_title=$_POST["m_title"];
        $M_genre=$_POST["m_genre"];
        $M_prod=$_POST["m_prod"];
        $M_director=$_POST["m_director"];
        $M_desp=$_POST["m_desp"];
        $M_cast=$_POST["m_cast"];


        $q1="update movies set M_title='$M_title', M_genre='$M_genre', M_producer='$M_prod', M_director='$M_director', M_desp='$M_desp',M_cast='$M_cast' where M_id='$M_id'";
        $r1=mysqli_query($conn,$q1);
        header("Location: HomePage.php");
        mysqli_close($conn);
    }
?>