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

        $q = "update tickets set m_name = ''
            ('$username', '$gender' , '$dob', '$email', '$password', '$phno', 'unactive')";
        $r = mysqli_query($con, $q);
        if($r)
        {
            echo "data entered successfully";
            header("Location: login.html");
        }
        else{
            echo "error in entering the data";
        }
    }
    get_data();
?>