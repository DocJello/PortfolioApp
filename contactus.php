<?php
    $con = mysqli_connect('localhost', 'root');
    if($con)
    {
        echo "Connection Successful.";
    }
    else
    {
        echo "Connection Failed.";
    }
    mysqli_select_db($con, 'rguzone');

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $query = "INSERT INTO contact (fullname, email, mobileno) VALUES ('$name', '$email', '$mobileno')";
    mysqli_query($con, $query);
    header('location:index.php#contactus')
?>