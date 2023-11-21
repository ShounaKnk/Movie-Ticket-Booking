<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="commoncss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>MovieMyShow</title>
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
            .available_movies {
                background-color: rgb(54, 54, 54);
                margin: 35px 90px ;
                padding: 20px;
                border-radius: 25px;
            }
    
            .head_text{
                display: inline;
                position: relative;
                top: 20px;
                left: 20px;
                font-size: 25px;
                color: red;
                padding: 5px;
            }
            .block_head{
                margin-bottom: 20px;
            }
            .card{
                box-shadow: 4px 7px 12px 0 rgba(0, 0, 0, 0.5);
                width: 200px;
                padding: 20px;
                margin: 10px;
                display: inline-block;
                border-radius: 25px;
            }
            .card:hover {
                box-shadow: 0px 20px 15px rgba(0,0,0,0.7);
                background-color: red;
            }
            .crud a:hover
            {
                background-color: red;
                color: black;
            }
            .movie_info
            {
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="Pageheader">
                <div class="header_text">
                    <h1>MovieMyShow</h1>
                </div>
            </div>
            <div class="page_head">
                <h2>Movies</h2>
            </div>
        </div>
        <div class="topnav">
            <a href="HomePage.html"><i class="fa fa-home">Home</i></a>
            <a href="ticket_display.html"><i class="fa fa-fw fa-ticket"></i>My Ticket</i></a>
            <a href="about_us.html"><i class="fa fa-fw fa-phone"></i>Contact Us</a>
            <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profile</a>
            <a href="Movies.php"><i class="fa fa-fw fa-user"></i>Movies</a>
            <a href="login.html"><i class="fa fa-fw fa-user"></i>Theaters</a>
        </div>
        <br>
        <div class="crud">
            <a href="insert_m.html">Insert a Movie</a>
            <a href="delete_m.html">Delete a Movie</a>
            <a href="update_m.html">Update a Movie</a>
            <a href="display_m.php">Display all movies</a>
        </div>
        <br>
        <div class="available_movies">
            <div class="block_head">
                <p class="head_text"><b>Available Movies</b></p>
            </div>
            <form action="bookticket.php" method="post">
                <a href="movie_details.php" onclick="sendData(101, 'M1', 'avl')"><div class="card">
                    <img src="https://m.media-amazon.com/images/M/MV5BMDBmYTZjNjUtN2M1MS00MTQ2LTk2ODgtNzc2M2QyZGE5NTVjXkEyXkFqcGdeQXVyNzAwMjU2MTY@._V1_.jpg" alt="transfomer" style="width: 100%; border-radius: 20px;">
                    <div class="movie_info">
                        <h4 style="text-align: center;">Oppenheimer</h4>
                    </div>
                </div></a>
                <a href="movie_details.html" onclick="sendData(102, 'M1', 'avl')"><div class="card">
                    <img src="https://www.themoviedb.org/t/p/original/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="transfomer" style="width: 100%; border-radius: 20px;">
                    <div class="movie_info">
                        <h4 style="text-align: center;">Barbie</h4>
                    </div>
                </div></a>
                <a href="movie_details.html" onclick="sendData(103, 'M1', 'avl')"><div class="card">
                    <img src="https://m.media-amazon.com/images/M/MV5BM2U2YWU5NWMtOGI2Ni00MGMwLWFkNjItMjgyZWMxNjllNTMzXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg" alt="transfomer" style="width: 100%; border-radius: 20px;">
                    <div class="movie_info">
                        <h4 style="text-align: center;">The Marvels</h4>
                    </div>
                </div></a>
                <a href="movie_details.html" onclick="sendData(104, 'M1', 'avl')"><div class="card">
                    <img src="https://www.themoviedb.org/t/p/original/aAngiE34BMFDTOXpjc04Lr8zsX1.jpg" alt="transfomer" style="width: 100%; border-radius: 20px;">
                    <div class="movie_info">
                        <h4 style="text-align: center;">Fast X</h4>
                    </div>
                </div></a> 
            </form>
        </div>
        <div class="available_movies">
            <div class="block_head">
                <p class="head_text"><b>Added Movies</b></p>
            </div>
            <?php
                $conn=mysqli_connect("localhost","root","","movie_ticket_booking");
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
        <div class="footer">
            <div class="footer_text">
                <p>&copy; MoiveMyShow LLC. <br> All Rights Reserved </p>
            </div>
        </div>
    </body>
</html>