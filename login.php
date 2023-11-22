<?php
    $con = mysqli_connect("localhost","root","","movie_ticket_booking");
    $username = $_POST['username'];
    $pword = $_POST['pwrd'];

    $q = "select password, u_ID from user_details where username = '$username'";
    $r = mysqli_query($con, $q);

    if($r)
    {
        $info = mysqli_fetch_array($r);
        $p = $info['password'];
        $uid = $info['u_ID'];
        setcookie("uid", $value = $uid);

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