<?php
    $conn = mysqli_connect("localhost","root","","movie_ticket_booking");
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $phno = $_POST['phno'];
    $dob = $_POST['dob'];

    $q2 = "update user_details set email='$email', pword='$pword', phno='$phno', gender='$gender', dob='$dob' where username = ".$username."";
    $r2 = mysqli_query($conn,$q2);
    if($r2)
    {
        echo "<script>alert ('User details updated successfully')</script>";
        header("Location: profilepage.php");
    }
    

    mysqli_close($conn);
?>