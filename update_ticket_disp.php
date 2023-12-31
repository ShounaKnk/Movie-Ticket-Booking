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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="commoncss.css">
    <style>
        .container{
            background-color: #363636;
            border-radius: 25px;
            margin-left: 200px;
            margin-top: 30px;
            margin-bottom: 30px;
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

        select{
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

        .seat_buttons{
            margin-left: 50px;
        }

        .textfields:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }

        .seats{
            margin: 10px;
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
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            height: 40px;
            border-radius: 25px;
        }
        #sbutton:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }

        .ticket_cont{
            background-color: #363636;
            position: absolute;
            padding: 20px;
            border-radius: 25px;
            margin: 40px;
            width: 700px;
            display: inline-block;
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
</head>

<body>
    <div class="Pageheader">
        <div class="header_text">
            <h1>MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h2>Movie Ticket Booking</h2>
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
        <h2 class="container_head">Update Ticket</h2>
        <hr>
        <form action="update_ticket.php" method="post" require>
            <input type="text" class="textfields" name="bid" placeholder="Booking ID to Update" required><br><br>
            <select name="Theater">
                <option >Select theater</option>
                <option name="theater" value="INOX_Panjim">INOX, Panjim</option>
                <option name="theater" value="1930 Vasco">1930 Vasco, Vasco</option>
                <option name="theater" value="Jio Cinema">Jio Cinema, Margao</option>
                <option name="theater" value="Tesla Shows">Tesla Shows, Mapusa</option>
            </select>
            <br><br>
            <select name="Showtime">
                <option name="showtimes" >Select showtime</option>
                <option name="showtimes" value="10_AM">10 AM</option>
                <option name="showtimes" value="1 PM">1 PM</option>
                <option name="showtimes" value="3 PM">3 PM</option>
                <option name="showtimes" value="6 PM">6 PM</option>
            </select>
            <br><br>
            <div class="seat_buttons">
                <span>a</span>
                <input type="checkbox" name="seats[]" class="seats" value="a1"><label for="a1">1</label>
                <input type="checkbox" name="seats[]" class="seats" value="a2"><label for="a2">2</label>
                <input type="checkbox" name="seats[]" class="seats" value="a3"><label for="a3">3</label>
                <input type="checkbox" name="seats[]" class="seats" value="a4"><label for="a4">4</label>
                <input type="checkbox" name="seats[]" class="seats" value="a5"><label for="a5">5</label>
                <input type="checkbox" name="seats[]" class="seats" value="a6"><label for="a6">6</label>
                <br><span>b</span>
                <input type="checkbox" name="seats[]" class="seats" value="b1"><label for="b1">1</label>
                <input type="checkbox" name="seats[]" class="seats" value="b2"><label for="b2">2</label>
                <input type="checkbox" name="seats[]" class="seats" value="b3"><label for="b3">3</label>
                <input type="checkbox" name="seats[]" class="seats" value="b4"><label for="b4">4</label>
                <input type="checkbox" name="seats[]" class="seats" value="b5"><label for="b5">5</label>
                <input type="checkbox" name="seats[]" class="seats" value="b6"><label for="b6">6</label>
                <br><span>c</span>
                <input type="checkbox" name="seats[]" class="seats" value="c1"><label for="c1">1</label>
                <input type="checkbox" name="seats[]" class="seats" value="c2"><label for="c2">2</label>
                <input type="checkbox" name="seats[]" class="seats" value="c3"><label for="c3">3</label>
                <input type="checkbox" name="seats[]" class="seats" value="c4"><label for="c4">4</label>
                <input type="checkbox" name="seats[]" class="seats" value="c5"><label for="c5">5</label>
                <input type="checkbox" name="seats[]" class="seats" value="c6"><label for="c6">6</label>
                <br><span>d</span>
                <input type="checkbox" name="seats[]" class="seats" value="d1"><label for="d1">1</label>
                <input type="checkbox" name="seats[]" class="seats" value="d2"><label for="d2">2</label>
                <input type="checkbox" name="seats[]" class="seats" value="d3"><label for="d3">3</label>
                <input type="checkbox" name="seats[]" class="seats" value="d4"><label for="d4">4</label>
                <input type="checkbox" name="seats[]" class="seats" value="d5"><label for="d5">5</label>
                <input type="checkbox" name="seats[]" class="seats" value="d6"><label for="d6">6</label>
                <br><span>e</span>
                <input type="checkbox" name="seats[]" class="seats" value="e1"><label for="e1">1</label>
                <input type="checkbox" name="seats[]" class="seats" value="e2"><label for="e2">2</label>
                <input type="checkbox" name="seats[]" class="seats" value="e3"><label for="e3">3</label>
                <input type="checkbox" name="seats[]" class="seats" value="e4"><label for="e4">4</label>
                <input type="checkbox" name="seats[]" class="seats" value="e5"><label for="e5">5</label>
                <input type="checkbox" name="seats[]" class="seats" value="e6"><label for="e6">6</label>
            </div>
            <button style="color:white;" type="submit" id="sbutton">Submit</button>
        </form>     
    </div>
    <div class="ticket_cont">
    <?php
            if($r)
            {
                echo '<h2 style="margin-left: 20px; margin-bottom: 3px;">Total Tickets Are: '.$n.'</h1><hr>';
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
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>

</body>
</html>