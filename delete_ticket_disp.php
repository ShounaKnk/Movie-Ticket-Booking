<?php
    $con = mysqli_connect("localhost","root","","movie_ticket_booking");
    $u_id = $_COOKIE['uid'];
    if($con)
    {
        $q1="select * from tickets where u_id = $u_id";
        $r=mysqli_query($con,$q1);
        $n=mysqli_num_rows($r);
    }
    else
        echo "error in fetching the data";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert-Movie</title>
        <link rel="stylesheet" href="commoncss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>MovieMyShow</title>
    </head>
    <style>
        .container{
            background-color: #363636;
            border-radius: 25px;
            margin-left: 520px;
            padding: 20px;
            display: inline-block;
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
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            display: block;
            width: 400px;
            color: white;
        }

        .textfields:focus{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }

        #sbutton{
            background-color: red;
            border: none;
            margin-top: 20px;
            width: 400px;
            color: white;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            height: 40px;
            border-radius: 25px;
        }

        #sbutton:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }

        .ticket_cont{
            background-color: #363636;
            /* position: absolute; */
            padding: 20px;
            border-radius: 25px;
            margin: 40px;  width: 700px;
            margin-left: 380px;
            margin-bottom: 20px;
        }

        .ticket_card{
            margin: 10px;
            width: 300px;
            height: 170px;
            display: inline-block;
            background-color: azure;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
        }

        .ticket_card:hover {
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 1);
        }

        .about{
            display: inline-block;
        }
        
        .Mname{
            margin: 10px 0 0 10px;
            text-transform: uppercase;
            display: inline; 
        }
    </style>
    <body>
        <div class="Pageheader">
            <div class="header_text">
                <h1>MovieMyShow</h1>
            </div>
        </div>
        <div class="page_head">
            <h2>Delete Ticket</h2>
        </div>
        <div class="topnav">
            <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
            <a href="ticket_display.php"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
            <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
            <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
            <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
            <a href="theatres.php"><i class="fa fa-fw fa-user"></i>Theaters</a>
        </div>
        <br><br>
        <div class="container">
        <h2 class="container_head">Delete Ticket</h2>
        <hr>
            <form method="post" action="delete_ticket.php" autocomplete="off" required>
                <input type="textbox" name="b_id" class="textfields" placeholder="Booking ID to Delete" required><br><br>
                <input type="submit" id="sbutton">
            </form>
        </div>
    <div class="ticket_cont">
    <?php
            if($r)
            {
                echo '<h3 style="margin-left: 20px;">Total Tickets Are: '.$n.'</h3>';
                while($info=mysqli_fetch_array($r))
                {
                    if(isset($info))
                    {
                            $bookingID = $info['b_id'];
                            $mID = $info['m_id'];
                            $movie_name = $info['m_name'];
                            $TheaterN = $info['theater'];
                            $showtime = $info['showtime'];
                            $seats = $info['seats'];

                        echo '
                        <div class="ticket_card" style="color: black; border-radius: 25px; padding: 10px;" >
                        <h2 class="Mname" style="display: inline;">'.$movie_name.'</h2>&emsp;<span class="Tname" >'.$TheaterN.'</span>
                        <hr style="border: dashed red 2px; padding: 0; margin: 2px;">
                        <div class="about">
                            <p style="text-decoration: underline;"><label><b>booking id: </b></label>'.$bookingID.'</p>
                            <p><label><b>showtime: </b></label>'.$showtime.'</p>
                            <p><label><b>seats: </b></label>'.$seats.'</p>
                        </div>
                    </div>
                        ';
                    }
                }
            }
            else
                echo "error in fetching the data";
            mysqli_close($con);
            
        ?>
    </div>
    <div class="footer" style="background-color: red;">
        <div class="footer_text">
            <p style="display: inline-block;">&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
    </body>
</html>