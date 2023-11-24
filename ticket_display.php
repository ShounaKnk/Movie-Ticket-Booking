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
    <title>Document</title>
    <link rel="stylesheet" href="commoncss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .ticket_container{
            background-color: #363636;
            border-radius: 25px;
            margin-top: 30px;
            padding-bottom: 15px;
            margin-bottom: 30px;
            display: inline-block;
            padding-right: 20px;
            margin-left: 320px;
            padding: 20px;
            width: 700px;
            color: white;
            /* text-align: center; */
        }

        .ticket_card{
            margin-top: 20px;
            width: 680px;
            height: 170px;
            background-color: azure;
        }

        .about{
            display: inline-block;
        }
        
        .Mname{
            margin: 10px 0 0 10px;
            text-transform: uppercase;
            display: inline;
        }

        .select_button{
            margin-left: 70px;
        }

        #bbutton{
            display: inline-block;
            margin-top: 25px;
            margin-left: 20px;
            background-color: red;
            height: 50px;
            width: 150px;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.3);
            text-decoration: none;
            color: white;
            border-radius: 25px;
        }

        #bbutton:hover{
            box-shadow: 0px 20px 15px rgba(0,0,0,0.5);
        }
        #button_text{
            position: relative;
            top: 15px;
            left: 55px;
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
    <div class="page_head">
        <h1>Tickets</h1>
    </div>
        <div class="topnav">
            <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
            <a href="ticket_display.php"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
            <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
            <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
            <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
            <a href="theatres.php"><i class="fa fa-fw fa-user"></i>Theaters</a>
        </div>
    <div class="ticket_container">
    <?php
            if($r)
            {
                echo "TOTAL MOVIES ARE: ".$n;
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
        <div class="select_button">
            <a href="HomePage.html" id="bbutton"><span id="button_text">Add</span></a>
            <a href="update_ticket_disp.php" id="bbutton"><span id="button_text">Update</span></a>
            <a href="delete_ticket_disp.php" id="bbutton"><span id="button_text">Delete</span></a>
        </div>
        </div>
        
    </div>
</body>
</html>