<?php
    $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
    $mov_id = $_POST['mov_id'];
    $mov_name = $_POST['mov_name'];

    $query = "SELECT movies.M_id, movies.M_title, COUNT(tickets.b_id) AS Total_Ticket_Booked
                FROM movies
                WHERE movies.M_id = mov_id
                LEFT JOIN tickets ON movies.M_id = tickets.M_id
                GROUP BY movies.M_id";

    $result = mysqli_query($conn, $query);

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