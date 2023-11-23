<?php
    $conn = mysqli_connect("localhost","root","","movie_ticket_booking");

    $q1 = " select * from user_details LEFT OUTER JOIN ticket on user_details.u_id=ticket.u_idT";

    $result = mysqli_query($conn, $q1);

    if ($result) 
    {
       echo "query executed"; 
    } 
    else
    {
       echo "Error executing the query: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>