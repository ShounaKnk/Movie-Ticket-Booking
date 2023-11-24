<?php
    $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $phno = $_POST['phno'];
    $dob = $_POST['dob'];

    $q2 = "update user_details set email='$email' where username = ".$username."";
    $r2 = mysqli_query($conn,$q2);

    $q3 = "update user_details set pword='$pword' where username = ".$username."";
    $r3 = mysqli_query($conn,$q3);

    $q4 = "update user_details set phno='$phno' where username = ".$username."";
    $r4 = mysqli_query($conn,$q4);

    $q5 = "update user_details set gender='$gender' where username = ".$username."";
    $r5 = mysqli_query($conn,$q5);

    $q6 = "update user_details set dob='$dob' where username = ".$username."";
    $r6 = mysqli_query($conn,$q6);
    header("Location: profilepage.php");

    mysqli_close($conn);
?>