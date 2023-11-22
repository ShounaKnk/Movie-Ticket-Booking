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
            <a href="HomePage.php"><i class="fa fa-home">Home</i></a>
            <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
            <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
            <a href="login.html"><i class="fa fa-fw fa-user"></i>Login / Signup</a>
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
                $conn=mysqli_connect("localhost","root","","movie");
                if($conn)
                {
                    $q1="select * from movies";
                    $r1=mysqli_query($conn,$q1);
                    $n=mysqli_num_rows($r1);

                    echo "TOTAL MOVIES ARE: ".$n;

                    if($r1)
                    {
                        while($info=mysqli_fetch_array($r1))
                        {
                            echo "<br><br>";
                            echo "<br>Movie ID: ".$info['M_id'];
                            echo "<br>Movie Title: ".$info['M_title'];
                            echo "<br>Movie Genre: ".$info['M_genre'];
                            echo "<br>Movie Producer: ".$info['M_producer'];
                            echo "<br>Movie Director: ".$info['M_director'];
                            echo "<br>Movie Description: ".$info['M_desp'];
                            echo "<br>Movie Cast: ".$info['M_cast'];
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