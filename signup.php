<?php
    function get_data()
    {
        $con = mysqli_connect("localhost","root","","movie_ticket_booking");
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $password = $_POST['pword'];
        $phno = $_POST['phno'];

        $q = "insert into user_details values
            ('$username', '$gender' , '$dob', '$email', '$password', '$phno')";
        $r = mysqli_query($con, $q);
        if($r)
        {
            echo "data entered successfully";
        }
        else{
            echo "error in entering the data";
        }
    }
    get_data();
?>