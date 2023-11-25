<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Theatre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="commoncss.css">
    <style>
        .container
        {
            height: 1000px;
        }
        .form_container{
            background-color: #363636;
            border-radius: 25px;
            margin-left: 100px;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px;
            display: inline-block;
        }

        /* .the_disp
        {
            background-color: #363636;
            position: absolute;
            padding: 20px;
            border-radius: 25px;
            margin: 40px;
            width: 700px;
            display: inline-block;
        } */

        .card_container{
            background-color: #363636;
            display: inline-block;
            position: absolute;
            margin-top: 20px;
            border-radius: 25px;
            padding: 20px;
            margin-left: 50px;
            width: 800px;
        }

        .theater_card {
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            width: 250px;
            margin: 10px;
            display: inline-block;
            border-radius: 25px;
        }

        .theater_card:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }

        .theater_name {
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            margin: 0 10px 10px 10px; 
            border: solid red 2px;
            padding: 8px 13px;
            border-radius: 25px;
        }

        .details{
            margin: 12px;
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

    </style>
</head>

<body>
    <div class="Pageheader">
        <div class="header_text">
            <h1 style="text-align:center">MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h2>Updating Theatre Details</h2>
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
        <div class="form_container">
        <h2 class="container_head">Enter new details</h2>
        <hr>
            <form action="update_t.php" method="post">
            <input type="text" class="textfields" name="tid" placeholder="New Theatre ID" required>
                <br><br>
                <input type="text" class="textfields" name="tname" placeholder="New Theatre Name">
                <br><br>
                <input type="text" class="textfields" name="tlocation" placeholder="New Theatre Location">
                <br><br>
                <input type="text" class="textfields" name="tcapacity" placeholder="New Theatre Capacity">
                <br><br>
                <input type="text" class="textfields" name="tscreens" placeholder="New Theatre Screens">
                <br><br>
                <input type="text" class="textfields" name="towner" placeholder="New Theatre Owner">
                <br><br>
                <button type="submit" id="sbutton" style="color: white;">Update Theatre Details</button>
            </form>     
        </div>
        <div class="card_container">
    <?php
                $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
                if($conn)
                {
                    $q1="select * from theatre";
                    $r1=mysqli_query($conn,$q1);
                    $n=mysqli_num_rows($r1);

                    echo '
                    <h3 class="container_head">TOTAL THEATRES ARE:&emsp;'.$n.'</h3>
                    <hr>
                    ';
                    if($r1)
                    {
                        while($info=mysqli_fetch_array($r1))
                        {
                            echo "<br><br>";
                            $t_id = $info['T_id'];
                            $t_name = $info['T_name'];
                            $t_location = $info['T_location'];
                            $t_capacity = $info['T_capacity'];
                            $t_screens = $info['T_screens'];
                            $t_owner = $info['T_owner'];

                            echo '
                            <div class="theater_card" style="display: inline-block;">
                                <div class="theater_name">
                                    <span style= "display: inline; font-size: 22px;">'.$t_name.'</span>
                                    &emsp;<span>'.$t_location.'</span>
                                </div>
                                <div class="details">
                                    <span><b>THEATER ID:&emsp;</b> '.$t_id.'</span><br>
                                    <span><b>OWNER:&emsp;</b> '.$t_owner.'</span><br>
                                    <span><b>SCREENS:&emsp;</b> '.$t_screens.'</span><br>
                                    <span><b>CAPACITY:&emsp;</b> '.$t_capacity.'</span>
                                </div>
                            </div>
                            ';
                        }
                    }
                    mysqli_close($conn);
                }
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