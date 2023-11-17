<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="commoncss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
        .container{
            background-color: #363636;
            border-radius: 25px;
            height: 520px;
            width: 1200px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 170px;
        }

        .movie_poster{
            position: absolute;
            border-radius: 25px;
            margin-top: 35px;
            margin-left: 32px;
        }
        img{
            position: absolute;
            border-radius: 25px;
            border: solid red 6px;
            display: inline;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.5);
        }

        .info_container{
            background-color: #363636;
            border: solid red 3px;
            border-radius: 25px;
            height: 480px;
            width: 800px;
            display: inline-block;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.5);
            position: absolute;
            margin-top: 15px;
            margin-left: 370px;
        }

        .movie_info_1{
            position: absolute;
            width: 740px;
            left: 15px;
            top: 30px;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.3);
            border: solid rgba(0,0,0,0.2) 1px;
            border-radius: 25px;
            text-align: justify;
            padding: 15px;
            display: inline-block;
        }
        .movie_info_2{
            position: absolute;
            bottom: 13px;
            left: 15px;
            height: 280px;
            width: 360px;
            border: solid rgba(0,0,0,0.2) 1px;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.3);
            border-radius: 25px;
        }

        .movie_info_3{
            position: absolute;
            bottom: 83px;
            right: 15px;
            height: 210px;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.3);
            border: solid rgba(0,0,0,0.2) 1px;
            width: 375px;
            border-radius: 25px;
        }
        .info_text{
            position: inherit;
            left: 32px;
            top: 32px;
        }

        #bbutton{
            position: absolute;
            background-color: red;
            height: 50px;
            width: 375px;
            bottom: 13px;
            right: 15px;
            box-shadow: 0px 20px 15px rgba(0,0,0,0.3);
            text-decoration: none;
            color: white;
            border-radius: 25px;
        }
        span{
            position: absolute;
            top: 15px;
            left: 145px;
        }
    </style>
    <script>
        var movi_id = localStorage.getItem('Movie_id');
        function M_name_display()
        {
            document.getElementById('movid').innerHTML = movi_id;
        }

        document.cookie="Mid = "+movi_id;
        
    </script>
</head>
<body onload="M_name_display()">
    <div class="Pageheader">
        <div class="header_text">
            <h1>MovieMyShow</h1>
        </div>
    </div>
    <div class="page_head">
        <h1 id="movid"></h1>  
    </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="login.html"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
    </div>
    <div class="container">
        <div class="poster_container">
            <div class="movie_poster">
                <img src="movie_poster.jpg" alt="movie_poster" style="width: 300px;">
            </div>
        </div>
        <div class="info_container">
            <div class="movie_info_1">
            <?php
                $conn=mysqli_connect("localhost","root","","movie");

                if($conn)
                {
                    echo "Details:";
                }
                else
                {
                    echo "error: Logins database not connected";
                    exit();
                }
                
                $q1="SELECT * FROM MOVIES WHERE M_id='101'";
                $r1=mysqli_query($conn,$q1);
                $n=mysqli_num_rows($r1);
                $i=0;

                if($r1)
                {
                    $info=mysqli_fetch_array($r1);
                        echo "<br>Movie ID: ".$info['M_id'];
                        echo "<br>Movie Name: ".$info['M_title'];
                        echo "<br>Genre: ".$info['M_genre'];
                        echo "<br>Production: ".$info['M_prod'];
                        echo "<br>Director: ".$info['M_desp'];
                        echo "<br>Cast: ".$info['M_cast'];
                        $i++;
                }
                else
                    echo "error: Login record not inserted";
                
                mysqli_close($conn);
            ?>
            </div>
            <div class="movie_info_2">
                <div class="info_text">
                    <label>director: </label>john doe<br><br><br>
                    <label>writer: </label>john doe<br><br><br>
                    <label>staff: </label>john doe<br><br><br>
                    <label>staff: </label>john doe<br>
                </div>
            </div>
            <div class="movie_info_3">
                <div class="info_text">
                    <label>director: </label>john doe<br><br><br>
                    <label>writer: </label>john doe<br><br><br>
                    <label>staff: </label>john doe
                </div>
            </div>
            <div class="book_button">
                <!-- <button type="button"></button> -->
                <a href="theaterselect.html" id="bbutton"><span>Book Ticket</span></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_text">
            <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
        </div>
    </div>
</body>
</html>