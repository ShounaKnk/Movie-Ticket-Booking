<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Booked Tickets</title>
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
        .the_disp
        {
            background-color: rgb(54, 54, 54);
            margin: 35px 200px ;
            padding: 20px;
            border-radius: 25px;
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
        <h2>Tickets booked by user</h2>
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
        <h2 class="container_head">Tickets booked by user</h2>
        <hr>
        <form method="post">
			<label>Enter the user id </label>
            <input type="text" class="textfields" name="u_id">
            <button type="submit" id="sbutton">Submit</button>
            <br><br>
		</form>
    </div>
    <div class="container_php">
        <div class="text_container" style="display:block;">
            <?php
                $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
                if (isset($_POST['u_id'])) {
                    $u_id = $_POST['u_id'];
                    $q1 = "select * from user_details LEFT OUTER JOIN tickets on user_details.u_id=tickets.u_id where tickets.u_id='$u_id'";

                    $result = mysqli_query($conn, $q1);
                    
                    echo "<table border='1'>
                            <tr>
                                <th>User ID</th>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Phone nos</th>
                                <th>Bookin ID</th>
                                <th>Movie ID</th>
                                <th>Movie name</th>
                                <th>Theater</th>
                                <th>Showtime</th>
                                <th>Seats</th>
                                <th>User ID</th>
                            </tr>";

                    while ($row=mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$row['u_id']."</td>
                                <td>".$row['username']."</td>
                                <td>".$row['emailID']."</td>
                                <td>".$row['phno']."</td>
                                <td>".$row['b_id']."</td>
                                <td>".$row['m_id']."</td>
                                <td>".$row['m_name']."</td>
                                <td>".$row['theater']."</td>
                                <td>".$row['showtime']."</td>
                                <td>".$row['seats']."</td>
                                <td>".$row['u_id']."</td>
                            </tr>";
                    }
                    echo "</table>";

                    // if ($result) 
                    // {
                    //     $row = mysqli_fetch_array($result);
                    //     if ($row) 
                    //     {
                    //         echo "user ID: " . $row['u_id'] . "<br>";
                    //     } 
                    //     else 
                    //     {
                    //         echo "No results found for the provided movie ID.";
                    //     }
                    // } else {
                    //     echo "Error executing the query: " . mysqli_error($conn);
                    // }

                }
                mysqli_close($conn);
            ?>
        </div>
    </div>
    <div class="the_disp">
        <?php
            $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
            if($conn)
            {
                $q1="select * from theatre";
                $r1=mysqli_query($conn,$q1);
                $n=mysqli_num_rows($r1);

                echo "TOTAL THEATRES ARE: ".$n;

                if($r1)
                {
                    while($info=mysqli_fetch_array($r1))
                    {
                        echo "<br><br>";
                        echo "<br>Theatre ID: ".$info['T_id'];
                        echo "<br>Theatre Name: ".$info['T_name'];
                        echo "<br>Theatre Location: ".$info['T_location'];
                        echo "<br>Theatre Capacity: ".$info['T_capacity'];
                        echo "<br>Theatre Screens: ".$info['T_screens'];
                        echo "<br>Theatre Owner: ".$info['T_owner'];
                    }
                }
                mysqli_close($conn);
            }
        ?>
    </div>
    
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
</body>
</html>
