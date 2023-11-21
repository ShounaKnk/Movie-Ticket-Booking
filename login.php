<?php
    $con = mysqli_connect("localhost","root","","movie_ticket_booking");
    $username = $_POST['username'];
    $pword = $_POST['pwrd'];

    $q = "select password from user_details where username = '$username'";
    $r = mysqli_query($con, $q);

    if($r)
    {
        $info = mysqli_fetch_array($r);
        $p = $info['password'];
        if($p == $pword)
        {
            // header("Location: DMQP_Project/HomePage.html");
            echo "login Successful";
            $aq = "Update user_details set status = 'active' where username='$username'";
            $r = mysqli_query($con, $aq);
            header("Location: HomePage.html");
        }
        else
        {
            echo "enter correct password";
        }
    }
    else{
        echo "<script>alert 'script'</script>";
    }
?>