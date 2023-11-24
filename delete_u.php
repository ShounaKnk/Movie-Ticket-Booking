<?php
    if(isset($_POST['username'])) 
    {
        $username = $_POST['username'];
        $conn = mysqli_connect("localhost", "root", "", "movie_ticket_booking");
        if($conn) 
        {
            // Use mysqli_real_escape_string to prevent SQL injection
            //$username = mysqli_real_escape_string($conn, $username);
            $query = "delete from user_details where username = '$username'";
            $r = mysqli_query($conn, $query);
            if($r) 
            {
                echo "Deletion Successful !";
                header("Location: createaccount.html");


            } 
            else 
            {
                echo "Deletion Failed !";
            }

            mysqli_close($conn);
        } 
        else 
        {
            echo "Connection Failed !";
        }
    } 
    else 
    {
        echo "Invalid request. Please provide a correct username.";
    }
?>