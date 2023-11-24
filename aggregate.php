<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booked Movies</title>
    <link rel="stylesheet" href="commoncss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container{
            background-color: #363636;
            border-radius: 25px;
            margin-left: 520px;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px;
            display: inline-block;
            width: 400px;
        }
        .container_head{
            display: inline-block;
            margin-top: 10px;
            
        }
        .container_php {
            background-color: #363636;
            border-radius: 25px;
            margin-top: 30px;
            padding-bottom: 15px;
            margin-bottom: 30px;
            display: inline-block;
            padding-right: 20px;
            margin-left: 520px;
            width: 400px;
        }
        hr{
            margin-bottom:20px;
            margin-top: 0px;
        }

        .textfields{
            background-color: #363636;
            border: none;
            font-size: 15px;
            border-bottom: solid red 2px;
            padding: 10px 0 2px 5px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            display: block;
            width: 400px;
            color: white;
        }

        .textfields:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
        }

        #tc{
            text-decoration: underline;
            color: white;
        }

        label{
            margin-bottom: 20px;
        }

        #sbutton{
            background-color: red;
            border: none;
            margin-top: 20px;
            width: 400px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            height: 40px;
            border-radius: 25px;
        }
        #sbutton:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }
        

        .text_container{
            margin-top: 30px;
            margin-left: 22px;
            display: block;
            border-radius: 25px;
            font-size: 20px;
            text-align: center;
        }
        
        hr{
            margin-bottom:20px;
            margin-top: 0px;
        }

        .textfields{
            background-color: #363636;
            border: none;
            font-size: 15px;
            border-bottom: solid red 2px;
            padding: 10px 0 2px 5px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            display: block;
            width: 400px;
            color: white;
        }

        .textfields:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
        }

        #tc{
            text-decoration: underline;
            color: white;
        }

        label{
            margin-bottom: 20px;
        }

        #sbutton{
            background-color: red;
            border: none;
            margin-top: 20px;
            width: 400px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            height: 40px;
            border-radius: 25px;
        }
        #sbutton:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <div class="Pageheader">
        <div class="header_text">
            <h1>MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h2>Booked Tickets for a Movie</h2>
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.php"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
        <a href="theatres.php"><i class="fa fa-fw fa-user"></i>Theaters</a>
    </div>
    <div class="container">
        <h2 class="container_head">Booked Tickets for a single movie</h2>
        <hr>
        <form method="post">
			<label>Enter the movie id </label>
            <input type="text" class="textfields" name="mov_id">
            <button type="submit" id="sbutton">Submit</button>
            <br><br>
		</form>
    </div>
    <div class="container_php">
        <div class="text_container" style="display:block;">
            <?php
                $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
                if (isset($_POST['mov_id'])) {
                    $M_id = $_POST['mov_id'];
                    $q1 = "select movies.M_id, movies.M_title, count(tickets.b_id) as Total_Ticket_Booked
                            from movies, tickets 
                            where movies.M_id = tickets.m_id and movies.M_id = '$M_id'";

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

                }
                mysqli_close($conn);
            ?>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
</body>
</html>
