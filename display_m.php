<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert-Movie</title>
        <link rel="stylesheet" href="common.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>MovieMyShow</title>
    </head>
    <style>
        .crud a
        {
            background-color: rgb(54, 54, 54);
            overflow: auto;
            width: 100px;
            text-decoration: none;
            margin: 10px;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .crud a:hover
        {
            background-color: red;
            color: black;
        }
        .sub
        {
            background-color: grey;
            overflow: auto;
            width: 100px;
            text-decoration: none;
            margin: 10px;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .phpdisp
        {
            background-color: rgb(54, 54, 54);
            margin: 35px 200px ;
            padding: 20px;
            border-radius: 25px;
        }

        .theater_card {
            margin-top: 10px;
            margin-left: 20px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            /* width: 600px;
            height: 120px; */
            display: block;
            padding: 20px;
            border: solid red 2px;
            border-radius: 25px;
        }
        hr{
            margin-bottom:20px;
            margin-top: 10pxpx;
        }

        .theater_card:hover{
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
        }

        .theater_name {
            margin-top: 15px;
            box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.2);
            margin-left: 15px;
            border: solid red 2px;
            display: inline-block;
            border-radius: 25px;
            padding: 4px;
        }
    </style>
    <body>
        <div class="container">
            <div class="Pageheader">
                <div class="header_text">
                    <h1>MovieMyShow</h1>
                </div>
            </div>
            <div class="page_head">
                <h2>Insert a Movie</h2>
            </div>
        </div>
    <div class="topnav">
        <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
        <a href="ticket_display.php"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
        <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
        <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
        <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
        <a href="theatres.php"><i class="fa fa-fw fa-user"></i>Theaters</a>
    </div>
        <br>
        <div class="crud">
            <a href="insert_m.html">Insert a Movie</a>
            <a href="delete_m.html">Delete a Movie</a>
            <a href="update_m.html">Update a Movie</a>
            <a href="display_m.php">Display all movies</a>
        </div>
        <br><br>
        <div class="phpdisp">
            <?php
                $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
                if($conn)
                {
                    $q1="select * from movies";
                    $r1=mysqli_query($conn,$q1);
                    $n=mysqli_num_rows($r1);

                    echo "TOTAL MOVIES ARE: ".$n."<br><br>";

                    if($r1)
                    {
                        while($info=mysqli_fetch_array($r1))
                        {
                            
                            $mid = $info['M_id'];
                            $mtitle = $info['M_title'];
                            $genre = $info['M_genre'];
                            $producer = $info['M_producer'];
                            $director = $info['M_director'];
                            $desc = $info['M_desp'];
                            $cast = $info['M_cast'];
                            // <div class="theater_name"><span>'.$mtitle.'</span><span>'.$mid.'</span></div>

                            echo '
                            <div class="theater_card">
                            <h3 style="display: inline;">'.$mtitle.'</h3><span style=" display: inline--block; position: inerit; right: 0;">'.$mid.'</span>
                            <hr>
                            <div class="show_times">
                                <label style="text-decoration: underline;"><b>Descrption:</b></label><span>&emsp;'. $desc .'</span><br><br>
                                <label style="text-decoration: underline;"><b>Genre:</b></label><span>&emsp;'. $genre.'</span><br><br>
                                <label style="text-decoration: underline;"><b>Director:</b></label><span>&emsp;'. $director.'</span><br><br>
                                <label style="text-decoration: underline;"><b>Producer:</b></label><span>&emsp;'. $producer.'</span><br><br>
                                <label style="text-decoration: underline;"><b>Cast:</b></label><span>&emsp;'. $cast.'</span><br><br>
                            </div>
                        </div>
                            ';
                        }
                    }
                    mysqli_close($conn);
                }
            ?>
        </div>
    </body>
    <footer>
        <p>&copy; 2023 MovieMyShow LLC</p>
        <p>All Rights Reserved</p>
    </footer>
</html>