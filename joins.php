<?php
    $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
    $M_id = $_POST['mov_id'];


    $q1 = "select movies.M_id, movies.M_title, count(ticket.b_id) as Total_Ticket_Booked
                from movies left outer join ticket on movies.M_id = ticket.m_idT
                where movies.M_id = '$M_id'";

    $result = mysqli_query($conn, $q1);

    if ($result) 
    {
        $row = mysqli_fetch_array($result);
        if ($row) 
        {
            echo "Movie ID: " . $row['M_id'] . "<br>";
            echo "Movie Title: " . $row['M_title'] . "<br>";
            echo "Tickets booked: " . $row['Total_Ticket_Booked'] . "<br>";
        } 
        else 
        {
            echo "No results found for the provided movie ID.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>