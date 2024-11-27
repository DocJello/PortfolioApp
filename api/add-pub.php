<?php
session_start();
     $con = mysqli_connect("localhost", "root","","rguzone");
     if(!$con)
     {
         die("Failed to connect to MySQL.");
         exit();
     }

    $title = $_POST['title'];
    $publisher = $_POST['publisher'];
    $venue = $_POST['venue'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $level = $_POST['level'];
    $role = $_POST['role'];
    $link = $_POST['link'];

    $sql = "INSERT INTO publication (title, publisher, venue, type, date, level, role, link) 
        VALUES('$title', '$publisher', '$venue', '$type', '$date', '$level', '$role', '$link')";
   if (mysqli_query($con, $sql))
   {        
        $_SESSION['status'] = "A new publication has been successfully added to the records.";
        header('Location: pub-encoder.php');
   }
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }     
    mysqli_close($con);   
?>