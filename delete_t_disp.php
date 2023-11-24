<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting Theatre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="commoncss.css">
    <style>
        .container{
            background-color: #363636;
            border-radius: 25px;
            margin-left: 560px;
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
            <h1 style="text-align:center">MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h2>Deleting Theatre Details</h2>
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
        <h2 class="container_head" style="color:grey">Enter new details</h2>
        <hr>
        <form action="delete_t.php" method="post">
	    <input type="text" class="textfields" name="tid" placeholder="Theatre ID">
            <br><br>
            <button type="submit" id="sbutton">Delete Details</button>
        </form>     
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