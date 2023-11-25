<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theatre_doc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="commoncss.css">
    <style>
        .theater_menu {
            background-color: #363636;
            border-radius: 25px;
            margin-top: 30px;
            padding-bottom: 15px;
            margin-bottom: 30px;
            display: inline-block;
            padding-right: 20px;
            margin-left: 410px;
        }

        .menu_head {
            margin-top: 15px;
            margin-left: 20px;
            padding: 5px;
            background-color: red;
            border-radius: 25px;
            display: inline-block;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
        }

        .container_head{
            margin: 20px 20px 10px;
        }
        hr{
            margin-left: 20px;
            border-color: red;
        }


        .theater_card {
            margin-left: 20px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            width: 600px;
            padding: 10px;
            display: block;
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
            border-radius:25px;
            margin: 12px;
        }

        .show_times {
            margin-top: 30px;
            margin-left: 15px;
        }

        button{
            border: none;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
            border-radius: 25px;
        }
        button:focus{
            background-color: rgb(252, 46, 46);
        }

        button:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.7);
            background-color: rgb(234, 0, 0);
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

        .select_button{
            margin-left: 60px;
        }
        #bbutton:hover{
            box-shadow: 0px 20px 15px rgba(0,0,0,0.7);
        }
        #button_text{
            position: relative;
            top: 15px;
            left: 55px;
        }
        
    </style>
    <script>
        function sednData(theatre, Stime)
        {
            localStorage.setItem("Theatre", theatre);
            localStorage.setItem("ShowTime", Stime);
        }
    </script>
</head>

<body>
    <div class="Pageheader">
        <div class="header_text">
            <h1 style="text-align:center">MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h1>Select Theater</h1>
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="theatres.php"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
    </div>
    <div class="theater_menu">
        <div class="menu_head">
            <span>Avaiilable Theaters</span>
        </div>
        <div class="the_disp">
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
                            <div class="theater_card">
                                <div class="theater_name"><span style= "display: inline; font-size: 22px;">'.$t_name.'</span>
                                &emsp;<span>'.$t_location.'</span>
                                </div>
                                <div class="details">
                                    <span><b>THEATER ID:&emsp;</b> '.$t_id.'</span><br>
                                    <span><b>OWNER:&emsp;</b> '.$t_owner.'</span><br>
                                    <span><b>SCREENS:&emsp;</b> '.$t_screens.'</span><br>
                                    <span><b>CAPACITY:&emsp;</b> '.$t_capacity.'</span><br>
                                </div>
                            </div>
                            ';
                        }
                    }
                    mysqli_close($conn);
                }
            ?>
        </div>
        <div class="select_button">
            <a href="insert_t_disp.php" id="bbutton"><span id="button_text">Add</span></a>
            <a href="update_t_disp.php" id="bbutton"><span id="button_text">Update</span></a>
            <a href="delete_t_disp.php" id="bbutton"><span id="button_text">Delete</span></a>
        </div>
    </div>
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
</body>

</html>