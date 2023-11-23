<?php
    $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
    $mov_id = $_POST['mov_id'];


    $q1 = "select movies.M_id, movies.M_title, count(tickets.b_id) as Total_Ticket_Booked
                from movies
                where movies.M_id = mov_id
                left outer join tickets on movies.M_id = tickets.M_id
                group by movies.M_id";

    $result = mysqli_query($conn, $q1);

    if ($result) 
    {
        $row = mysqli_fetch_assoc($result);
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